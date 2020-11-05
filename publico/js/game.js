function ScoreBoardGameControl(quantia) {
    var score = 0;
    var POINT_GAME = 10;
    var TEXT_SCORE = "Pontos: "

    var TOTAL_CORRECT = quantia;
    var corrects = 0;
    this.updateScore = function () {
        var scoreDiv = document.getElementById("score");
        scoreDiv.innerHTML = TEXT_SCORE + score;
    }

    this.incrementScore = function () {
        corrects++;
        score += POINT_GAME;
        if (corrects == TOTAL_CORRECT) {
            $('#modalExemplo').modal();
            $("#modalExemplo .modal-body").text("Parabéns!! Você fez " + score+" ponto!");
            //alert("Fim de Jogo! Sua pontuação foi: " + score);
        }
    }

    this.decrementScore = function () {
        score = score;
    }
}

function Card(picture) {
    var FOLDER_IMAGES = '';
    var IMAGE_QUESTION = "./publico/images/question.png"
    this.picture = picture;
    this.visible = false;
    this.block = false;
    this.equals = function (cardGame) {
        if (this.picture.valueOf() == cardGame.picture.valueOf()) {
            return true;
        }
        return false;
    }
    this.getPathCardImage = function () {
        return FOLDER_IMAGES + picture;
    }
    this.getQuestionImage = function () {
        return FOLDER_IMAGES + IMAGE_QUESTION;
    }
}

function ControllerLogicGame() {
    var firstSelected;
    var secondSelected;
    var block = false;
    var TIME_SLEEP_BETWEEN_INTERVAL = 1000;
    var eventController = this;
    this.addEventListener = function (eventName, callback) {
        eventController[eventName] = callback;
    };

    this.doLogicGame = function (card, callback) {
        if (!card.block && !block) {
            if (firstSelected == null) {
                firstSelected = card;
                card.visible = true;
            } else if (secondSelected == null && firstSelected != card) {
                secondSelected = card;
                card.visible = true;
            }

            if (firstSelected != null && secondSelected != null) {
                block = true;
                var timer = setInterval(function () {
                    if (secondSelected.equals(firstSelected)) {
                        firstSelected.block = true;
                        secondSelected.block = true;
                        eventController["correct"]();
                    } else {
                        firstSelected.visible = false;
                        secondSelected.visible = false;
                        eventController["wrong"]();
                    }
                    firstSelected = null;
                    secondSelected = null;
                    clearInterval(timer);
                    block = false;
                    eventController["show"]();
                }, TIME_SLEEP_BETWEEN_INTERVAL);
            }
            eventController["show"]();
        }
        ;
    };

}

function CardGame(cards, controllerLogicGame, scoreBoard, quantia) {

    quantia = quantia * 2;
    if (quantia > 5) {
        var COLS = 5;
        var LINES = quantia / COLS;
    } else {
        var COLS = quantia;
        var LINES = 1;
    }


    this.cards = cards;
    var logicGame = controllerLogicGame;
    var scoreBoardGameControl = scoreBoard;

    this.clear = function () {
        var game = document.getElementById("game");
        game.innerHTML = '';
    }

    this.show = function () {
        this.clear();
        scoreBoardGameControl.updateScore();
        var cardCount = 0;
        var game = document.getElementById("game");
        for (var i = 0; i < LINES; i++) {
            for (var j = 0; j < COLS; j++) {
                card = cards[cardCount++];
                var cardImageWrapper = document.createElement("div");
                cardImageWrapper.setAttribute("class", "col2 testeCol");
                var cardImage = document.createElement("img");
                //cardImage.setAttribute("class", "img-responsive");

                if (card.visible) {
                    cardImage.setAttribute("src", card.getPathCardImage());
                    cardImage.setAttribute("class", "ola");
                } else {
                    cardImage.setAttribute("src", card.getQuestionImage());
                }
                cardImage.onclick = (function (position, cardGame) {
                    return function () {
                        card = cards[position];
                        var callback = function () {
                            cardGame.show();
                        };
                        logicGame.addEventListener("correct", function () {
                            scoreBoardGameControl.incrementScore();
                            scoreBoardGameControl.updateScore();
                        });
                        logicGame.addEventListener("wrong", function () {
                            scoreBoardGameControl.decrementScore();
                            scoreBoardGameControl.updateScore();
                        });

                        logicGame.addEventListener("show", function () {
                            cardGame.show();
                        });

                        logicGame.doLogicGame(card);

                    };
                })(cardCount - 1, this);

                cardImageWrapper.appendChild(cardImage);
                game.appendChild(cardImageWrapper);
            }
            var br = document.createElement("br");
//game.appendChild(br);
        }
    }
}

function BuilderCardGame() {

    var listaImagensDoPHP = carregarDadosDoPHP();
    var vetorImagens = listaImagensDoPHP.split(",");
    var vetorImagensCopia = vetorImagens.slice();
    quantia = vetorImagens.length;
    var pictures = vetorImagens.concat(vetorImagensCopia);
    //console.log(listaImagensFinal);

    /*
     var pictures = new Array ('10.png','10.png',
     '1.png','1.png',
     '2.png','2.png',
     '3.png','3.png',
     '4.png','4.png',
     '5.png','5.png',
     '6.png','6.png',
     '7.png','7.png',
     '8.png','8.png',
     '9.png','9.png');
     */


    this.doCardGame = function () {
        shufflePictures();
        cards = buildCardGame();
        cardGame = new CardGame(cards, new ControllerLogicGame(), new ScoreBoardGameControl(quantia), quantia)
        cardGame.clear();
        return cardGame;
    }

    var shufflePictures = function () {
        var i = pictures.length, j, tempi, tempj;
        if (i == 0)
            return false;
        while (--i) {
            j = Math.floor(Math.random() * (i + 1));
            tempi = pictures[i];
            tempj = pictures[j];
            pictures[i] = tempj;
            pictures[j] = tempi;
        }
    }

    var buildCardGame = function () {
        var countCards = 0;
        cards = new Array();
        for (var i = pictures.length - 1; i >= 0; i--) {
            card = new Card(pictures[i]);
            cards[countCards++] = card;
        }
        ;
        return cards;
    }
}

function GameControl() {

}

GameControl.createGame = function () {
    var builderCardGame = new BuilderCardGame();
    cardGame = builderCardGame.doCardGame();
    cardGame.show();
}
