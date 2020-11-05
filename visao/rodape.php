<footer class="footer-area section-padding-100-0">
    <div class="container-fluid">
        <div class="row">

            <!-- Footer Widget Area -->
            <div class="col-12 col-md-6 col-xl-3">
                <div class="footer-widget-area mb-100">
                    <!--<a href="#"><img src="./publico/img/core-img/logo2.png" alt=""></a>-->
                    <!--<p class="copywrite-text"><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!--Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos os direitos reservados</a>-->
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-4 col-xl-2">
                <div class="footer-widget-area mb-100">
                    <div class="widget-title">
                        <h4>Principal</h4>
                    </div>
                    <nav>
                        <ul class="footer-nav">
                            <li><a href="#">Sobre o Projeto</a></li>
                            <li><a href="#">Quem somos?</a></li>
                            <?php if (estaLogado()) { ?>
                                <li><a  href="./usuario/comum">Área do Usuário</a>

                                    <?php } ?>
                                    <?php if (estaLogado()) { ?>
                                    <li><a  href="./login/logout">Sair</a></li>
                                <?php } else { ?>
                                    <li><a  href="./login">Login/Cadastro</a></li>

                                <?php } ?>
                            </ul>
                        </nav>
                    </div>
                </div>

                <?php if (estaLogado()) { ?>
                    <div class="col-12 col-sm-4 col-xl-2">
                        <div class="footer-widget-area mb-100">
                            <div class="widget-title">
                                <h4>Jogo</h4>
                            </div>
                            <nav>
                                <ul class="footer-nav">
                                    <li><a   href="./jogo/selecionarImagem">Galeria</a></li>
                                    <li><a   href="./jogo/adicionar">Adicionar Imagem</a></li>
                                    <?php
                                    $quantia_imagem = quantidadeImagem();
                                    if ($quantia_imagem <= 7 and $quantia_imagem > 1) {
                                        ?>
                                        <li><a  href="./jogo/jogo">Jogar</a></li>
                                    <?php } ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                <?php } ?>

            <!-- Footer Widget Area -->
            <div class="col-12 col-sm-4 col-xl-2">
                <div class="footer-widget-area mb-100">
                    <div class="widget-title">
                        <h4>Entre em contato</h4>
                    </div>
                    <nav>
                        <ul class="footer-nav">
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Instagram</a></li>
                            <li><a href="#">Email</a></li>

                        </ul>
                    </nav>
                </div>
            </div>



        </div>
    </div>
</footer>

