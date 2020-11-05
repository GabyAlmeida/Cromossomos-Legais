<?php

require "modelo/jogoModelo.php";

/** anon,user,admin */
function index() {
    exibir("jogo/inicial");
}

/** admin,user */
function jogo() {
    $quantia = quantidadeImagem();
    $iduser = $_SESSION["auth"]["user"]["idusuario"];
    if ($quantia <= 7 and $quantia > 1) {
        $listaNomesImagens = pegarListaNomesImagens($iduser);
        $listaImagensFormatoTexto = implode(",", $listaNomesImagens);
        $data["listaImagens"] = $listaImagensFormatoTexto;
        exibir("jogo/game", $data);
    } else {
        alert("Você não possuí o numero de imagens suficiente");
        redirecionar("jogo/selecionarImagem");
    }
}

/** user,admin */
function selecionarImagem() {
    $iduser = $_SESSION["auth"]["user"]["idusuario"];
    $dados['imagens'] = pegarImagemPorIdUsuario($iduser);
    $_SESSION["auth"]["user"]["quantia"] = count($dados['imagens']);
    exibir("jogo/listar", $dados);
}

/** admin, user */
function adicionar() {
    $quantia = quantidadeImagem();
    if ($quantia >= 0 and $quantia <= 7) {
        if (ehPost()) {
            extract($_POST);
            $iduser = $_SESSION["auth"]["user"]["idusuario"];
            $msgParaOusuario = adicionarImagem($nome, $iduser);
            alert($msgParaOusuario, "success");
            redirecionar("jogo/selecionarImagem");
        } else {
            exibir("jogo/formulario");
        }
    } else {
        alert("Você já alcançou o maximo de imagens que podem ser cadastradas.");
        redirecionar("jogo/selecionarImagem");
    }
}

/** admin,user */
function editar($id) {
    $caminho = array();
    $caminho[] = pegarImagemPorId($id);
    if (ehPost()) {
        extract($_POST);
        alert(editarImagem($id, $nome),"success");
        redirecionar("jogo/selecionarImagem");
    } else {
        $dados['imagem'] = pegarImagemPorId($id);
        $dados['acao'] = "./jogo/editar/$id";
        exibir("jogo/editar", $dados);
    }
}

/** admin,user */
function deletar($termo) {
    $caminho = array();
    $caminho[] = pegarImagemPorId($termo);
    alert(deletarImagem($termo, $caminho),"success");
    redirecionar("jogo/selecionarImagem");
}

?>
