

<?php
require "modelo/loginModelo.php";

define('AUTENTICADOR', true);

function authLogin($login, $passwd) {
    $user = pegarLogin($login,$passwd);
    if (!empty($user)) {
        $_SESSION["auth"] = 
            array("user" => $user, "role" => $user["tipousuario"]);
        return true;
    }else{
        return false;
    }
}
function authIsLoggedIn() {
    return isset($_SESSION["auth"]);
}
function authLogout() {
    if (isset($_SESSION["auth"])) {
        $_SESSION["auth"] = null;
        unset($_SESSION["auth"]);
    }
}
function authGetUserRole() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["role"];
    }
}
function estaLogado() {
    return isset($_SESSION["auth"]);   
}
function adminEstaLogado() {
    return (isset($_SESSION["auth"]) && ($_SESSION["auth"]["role"] == "admin"));
}
function userEstaLogado() {
    return (isset($_SESSION["auth"]) && ($_SESSION["auth"]["role"] == "user"));
}
function pegarUsuarioLogado() {
    if (authIsLoggedIn()) {
        return $_SESSION["auth"]["user"];
    }  
}

function quantidadeImagem(){
    $usuarioLogado = pegarUsuarioLogado();
    $idusuario=$usuarioLogado[0];
    $quantia_imagem=quantidadeImg($idusuario);
    return($quantia_imagem);
}
