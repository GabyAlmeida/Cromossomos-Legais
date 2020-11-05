<div class="about-us-area section-padding-2-0 bg-img" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="galeria" class="container">
                    <div class="section-heading">
                        <h2 class="text-dark">editar imagem</h2>
                    </div>

                    <form method="POST" action="<?= @$acao ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nome">Nome da Imagem</label>
                            <input type="text" name="nome" value="<?= @$imagem['nomeimagem'] ?>" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Adicione o nome do seu amigo que está na imagem">
                        </div>

                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
