<div class="about-us-area section-padding-2-0 bg-img" id="about">

</div>
<div  id="main" class="main container">
    <!-- Button trigger modal -->

    <div class="button-wrapper">
        <button type="button" class="btn btn-primary btn-circle btn-xl helps" data-toggle="modal" data-target="#exampleModal">
            ?
        </button> 
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Como Funciona?</h5>

                </div>
                <div class="modal-body" style="text-align: justify">
                    <p>
                        <b>O jogo:</b> O jogo começa com todas as cartas viradas para baixo. Para virar as cartas é preciso clicar em cima delas. Pode ser jogado por 1 ou mais pessoas. O objetivo é encontrar o maior número de pares possíveis. Se o jogador vira duas cartas que não correspondem, ambas são postas para baixo novamente. Se o jogador vira duas cartas que correspondem, a pontuação aumenta. O jogo acaba quando todos os pares de cartas são encontrados. 
                    </p>
                    <p>
                        <b>Reiniciar:</b> Caso você queira recomeçar o jogo é só clicar no botão representado por uma seta e as cartas voltarão a ficar viradas para baixo.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Entendi :)</button>
                </div>
            </div>
        </div>
    </div>

    <div id="control">
        <button type="button" id="botao_adicionar" class="btn btn-primary btn-circle btn-xl" onclick="GameControl.createGame()"><img src="./publico/img/reiniciar.png"></button>
        <div id="score">
        </div>
    </div>

    <div id="game" class="row">
    </div>



    <!-- Modal -->
    <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fim de Jogo!</h5>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        var dadosDoPHP = "<?php echo $listaImagens ?>";
        function carregarDadosDoPHP() {
            return dadosDoPHP;
        }


    </script>
</div>

<script type="text/javascript" src="./publico/js/game.js"></script>


