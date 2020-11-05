<div class="about-us-area section-padding-2-0 bg-img" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="galeria" class="container">
                    <div class="section-heading">
                        <h2 class="text-dark">Editar Usuário</h2>
                    </div>

                    <div id="adi_img">
                        <form  action="<?= @$acao ?>" method="POST">
                            <div class="form-group">
                                <label for="nome">Nome do Usuário</label>
                                <input type="text" name="nome" value="<?= @$usuario['nomeusuario'] ?>" class="form-control" id="nome" aria-describedby="emailHelp" placeholder="Edite o nome de seu usuário">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" value="<?= @$usuario['email'] ?>" class="form-control" id="email" placeholder="Edite seu email">
                            </div>

                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" name="senha" value="<?= @$usuario['senha'] ?>" class="form-control" id="senha" placeholder="Edite sua senha">
                            </div>

                            <div class="form-group">
                                <label for="senha_conf">Confirme sua senha</label>
                                <input type="password" name="confirmacao_senha" class="form-control" id="senha_conf" placeholder="Digite novamente sua senha">
                            </div>

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>