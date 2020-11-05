<?php
require "modelo/usuarioModelo.php";

/** admin*/
function vaibackup(){
    alert(backup());
    redirecionar("admin/");
}

/** admin */
function index(){
    exibir("admin/listar");
}

/** admin */

function alteracaoUser(){
    $dados["usuarios"] = pegarTodasAlteracoesUsuario();
     exibir("admin/alteracoesUser", $dados);
}

function alteracaoImagem(){
    $dados["usuarios"] = pegarTodasAlteracoesImagem();
     exibir("admin/alteracoesImagem", $dados);
}

