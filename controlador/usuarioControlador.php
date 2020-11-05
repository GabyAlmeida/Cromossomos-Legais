<?php

require "modelo/usuarioModelo.php";
require "modelo/validacaoModelo.php";

/** admin,user,anon */
function index() {
    redirecionar("usuario/adicionar");
}

/** admin,user */
function comum() {
    $usuarioLogado = pegarUsuarioLogado();
    $usuarios = array();
    $usuarios[] = $usuarioLogado;
    $dados["usuarios"] = $usuarios;

    exibir("usuario/listar", $dados);
}

/** admin */
function admin() {
    $dados["usuarios"] = pegarTodosUsuarios();
    exibir("usuario/admin", $dados);
}

/** anon,admin */
function adicionar() {
    if (!empty($_POST)) {
        if (ehPost()) {
            extract($_POST);

            if (!existe_user($email)) { //se for falso
                $erros = array();
                $erros[] = validar_email($email);
                $erros[] = validar_nome($nome);
                $erros[] = validar_senha($senha, $confirmacao_senha);
                $controle = true;

                foreach ($erros as $validacao) {

                    if ($validacao !== true) {
                        alert($validacao);
                        redirecionar("login/index");
                        $controle = false;
                    }
                }
                if ($controle) {
                    alert(adicionarUsuario($nome, $email, $senha), "success");
                    redirecionar("usuario/adicionar");
                }
            } else {
                alert("Usuário já existe! Tente outro email");
                redirecionar("login/index");
            }
        }
    } else {
        redirecionar("login/index");
    }
}

/** admin, user */
function deletar($id) {
    $aux = print_r($_SESSION["auth"]["role"]);
    alert(deletarUsuario($id));
    if ($aux <> "admin") {
        redirecionar("login/logout");
    } else {
        redirecionar("usuario/admin");
    }
}

    /** admin,user */
    function editar($id) {

        if (ehPost()) {
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            alert(editarUsuario($id, $nome, $email, $senha), "success");
            redirecionar("usuario/comum");
        } else {
            $dados['usuario'] = pegarUsuarioPorId($id);
            $dados['acao'] = "./usuario/editar/$id";
            exibir("usuario/formulario", $dados);
        }
    }

    /** user, admin */
    function visualizar($id) {
        $dados['usuario'] = pegarUsuarioPorId($id);
        exibir("usuario/visualizar", $dados);
    }
    