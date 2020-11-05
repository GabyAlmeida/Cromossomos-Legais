<div class="about-us-area section-padding-2-0 bg-img" id="about">


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="galeria" class="container">


                    <div class="button-wrapper">
                        <!-- Button trigger modal -->
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
                                        <b>Adicionar Imagens:</b> Clique no botão “+” (mais). Selecione imagens do seu dispositivo e coloque-as no jogo, não se esqueça de dar um nome à ela. É necessário que haja no mínimo 2 imagens e no máximo 7 para que você consiga jogar.
                                    </p>
                                    <p>
                                        <b>Editar:</b> Na edição é possível mudar o nome da sua imagem. Clique no botão “Editar” e troque o nome.
                                    </p>
                                    <p>
                                        <b>Excluir:</b> Clique no botão “Excluir” para mandar sua imagem para a lixeira. Exclua as fotos para que possa adicionar mais ou no caso de não querê-la mais no jogo.
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Entendi :)</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section-heading">
                        <h2 class="text-dark">Minha Galeria</h2>
                        <?php
                        $quantia_imagem = quantidadeImagem();
                        if ($quantia_imagem <= 7 and $quantia_imagem > 1) {
                            ?>
                        <button  type="button" class="btn btn-success"><a href="./jogo/jogo/"><h3 id="botao_jogar">Jogar!</h3></a></button>

                            <?php
                        }
                        ?>
                    </div>
                    <div class="row">
                        <?php foreach ($imagens as $imagem): ?>
                            <div class="col-sm-3">
                                <div class="card" >
                                    <img src="<?= $imagem['caminho'] ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $imagem['nomeimagem'] ?></h5>

                                        <div class="card-text">
                                            <a href="./jogo/deletar/<?= $imagem['idImagem'] ?>" class="btn btn-danger">Excluir</a>
                                            <a href="./jogo/editar/<?= $imagem['idImagem'] ?>" class="btn btn-info">Editar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <?php
                    $quantia = $_SESSION["auth"]["user"]["quantia"];
                    if ($quantia == 0) {
                        ?>
                        <h3>Adicione no mínimo duas fotos para começar </h3>
                        <?php
                    }

                    if ($quantia < 7) {
                        ?>
                        <button type="button" id="botao_adicionar" class="btn btn-primary btn-circle btn-xl"><a href="./jogo/adicionar"><img src="./publico/img/plus.jpg"></a></button>
                                <?php
                            } else {
                                ?>


                        <h3>Você já atingiu o limite de fotos</h3>
                        <?php
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>


