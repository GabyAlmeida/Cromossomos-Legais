<?php

/** anon,admin */
function index() {
    if (ehPost()) {
        $login = $_POST["login"];
        $passwd = $_POST["passwd"];
        if (authLogin($login, $passwd)) {
            alert("bem vindo . $login","success");
            redirecionar("jogo/");
        } else {
            alert("usuario ou senha invalidos!");
        }
    }
    exibir("login/index");
}

/** admin,user */
function logout() {
    authLogout();
    alert("deslogado com sucesso!","success");
    redirecionar("jogo/");
}
?>