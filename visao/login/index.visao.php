

<script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<div class="body">
    <div class="veen">
        <div class="login-btn splits">
            <p>Já tem uma conta?</p>
            <button class="active">Entre no jogo :)</button>
        </div>
        <div class="rgstr-btn splits">
            <p>Não tem uma conta?</p>
            <button>Registre-se :)</button>
        </div>
        <div class="wrapper">
            <form method="POST" action="" id="login" tabindex="500">
                <h3>Entrar</h3>
                <div class="email">
                    <input id="login" class="form-control" type="text" name="login" placeholder="Exemplo: ana">
                    <label for="login">Nome do usuário</label>
                </div>
                <div class="passwd">
                    <input id="passwd" class="form-control" name="passwd" type="password" name="passwd" placeholder="Coloque sua senha">
                    <label for="passwd">Senha</label>
                </div>
                <div class="submit">
                    <button type="submit" class="dark">Entrar</button>
                </div>
            </form>

            <form action="usuario/adicionar" method="POST" id="register" tabindex="502">
                <h3>Cadastro</h3>
                <div class="name">
                    <input type="text" name="nome" placeholder="Coloque um nome com ou mais de 3 letras">
                    <label>Nome</label>
                </div>
                <div class="mail">
                    <input type="text" name="email" placeholder="Exemplo: ana@gmail.com">
                    <label>Email</label>
                </div>
                <div class="passwd">
                    <input type="password" name="senha" placeholder="Coloque no mínimo 8 letras e números">
                    <label>Senha</label>
                </div>
                <div class="passwd">
                    <input type="password" name="confirmacao_senha" placeholder="Coloque sua senha novamente">
                    <label>Confirmação de senha</label>
                </div>
                <div class="submit">
                    <button type="submit" class="dark">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>	
</div>

