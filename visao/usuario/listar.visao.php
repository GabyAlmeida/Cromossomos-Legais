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
                                        <b>Editar:</b> Esse botão serve para mudar seus dados pessoais, caso queira trocar de senha, ou digitar outro email, ou até seu próprio nome de usuário. É necessário preencher o campo de confirmação de senha toda vez que alterar algum dado.
                                    </p>

                                    <p>
                                        <b>Excluir:</b> Esse botão não é muito recomendado, a não ser em situações como as de não querer mais ter um usuário no jogo. Ao clicar seu cadastro é deletado e para entrar novamente será necessário outro cadastro. 
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Entendi :)</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="section-heading">
                        <h2 class="text-dark">Meu usuário</h2>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">NOME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">EDITAR</th>
                                <th scope="col">DELETAR</th>
                            </tr>
                        </thead>
                        <?php foreach ($usuarios as $usuario): ?>
                            <tr>
                                <td scope="row"><?= $usuario['idusuario'] ?></td>
                                <td><?= $usuario['nomeusuario'] ?></td>
                                <td><?= $usuario['email'] ?></td>
                                <td><a href="./usuario/editar/<?= $usuario['idusuario'] ?>" class="btn btn-info">edit</a></td>
                                <td><a href="./usuario/deletar/<?= $usuario['idusuario'] ?>" class="btn btn-danger">del</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
