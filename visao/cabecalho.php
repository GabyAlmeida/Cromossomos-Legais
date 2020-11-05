<nav class="nav-menu">
    <header class="header-area">
        <!-- Navbar Area -->
        <div class="musica-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container-fluid">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="musicaNav">


                        <!-- Nav brand -->
                        <!--
                        <a href="index.html" class="nav-brand"><img src="./publico/img/core-img/logo.png" alt=""></a>-->

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>

                                    <li><a href="./" >Principal</a>
                                        <ul class="dropdown">
                                            <li><a  href="./#about">Sobre</a></li>
                                            <li><a  href="./#team">Quem Somos?</a></li>
                                        </ul>
                                    </li>
                                    <?php if (estaLogado()) { ?>
                                        <li><a   href="./jogo/selecionarImagem">Galeria</a></li>

                                        <?php
                                        $quantia_imagem = quantidadeImagem();
                                        if ($quantia_imagem <= 7 and $quantia_imagem > 1) {
                                            ?>
                                            <li><a  href="./jogo/jogo">Jogar</a></li>
                                        <?php } ?>
                                        <li><a  href="./usuario/comum">Área do Usuário</a>
                                        <?php } ?>
                                        <?php if (adminestaLogado()) { ?>
                                        <li><a>Área do Administrador</a>
                                            <ul class="dropdown">
                                                <li><a  href="./usuario/admin">Tds/usuários</a></li>
                                                <li><a  href="./admin/alteracaoUser">Alt/usuário</a></li>
                                                <li><a  href="./admin/alteracaoImagem">Alt/imagem</a></li>

                                            </ul>
                                        </li>
                                    <?php } ?>
                                    <?php if (estaLogado()) { ?>
                                        <li><a  href="./login/logout">Sair</a></li>
                                    <?php } else { ?>
                                        <li><a  href="./login">Entrar/Cadastro</a></li>

                                    <?php } ?>

                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <link rel="manifest" href="publico/teste.php">
    </header>
</nav>