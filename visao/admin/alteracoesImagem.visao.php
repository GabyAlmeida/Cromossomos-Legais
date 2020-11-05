<div class="about-us-area section-padding-2-0 bg-img" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div id="galeria" class="container">
                    <div class="section-heading">
                        <h2 class="text-dark">Alterações na tabela "imagem"</h2>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID_LOG</th>

                                <th>USUÁRIO</th>
                                <th>DATA_HORA</th>
                                <th>AÇÃO</th>
                                <th>DADOS</th>
                            </tr>
                        </thead>
                        <?php foreach ($usuarios as $usuario): ?>
                            <tr>
                                <td><?= $usuario['ID_LOG'] ?></td>

                                <td><?= $usuario['USUARIO'] ?></td>
                                <td><?= $usuario['DATA_HORA'] ?></td>
                                <td><?= $usuario['ACAO'] ?></td>
                                <td><?= $usuario['DADOS'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
