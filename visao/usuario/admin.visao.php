<div class="about-us-area section-padding-2-0 bg-img" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="galeria" class="container">
                    <div class="section-heading">
                        <h2 class="text-dark">Todos os usuários</h2>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOME</th>
                                <th>EMAIL</th>
                                <th>EDITAR</th>
                                <th>DELETAR</th>
                            </tr>
                        </thead>
                        <?php foreach ($usuarios as $usuario): ?>
                            <tr>
                                <td><?= $usuario['idusuario'] ?></td>
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
