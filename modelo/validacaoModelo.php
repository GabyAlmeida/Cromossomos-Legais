<?php

function validar_email($email) {
    $email = strip_tags($email);
    if (strlen(trim($email)) == 0) {
        return "Você deve inserir um e-mail." . "<br>";
    } elseif (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
        return "E-Mail is not valid brother" . "<br>";
    } else {
        return true;
    }
}

function validar_nome($nome) {
    $nome = strip_tags($nome);
    if (!is_numeric($nome)) {
        if (strlen(trim($nome)) < 3) {
            return "Preencha o campo nome com no minimo 3 caracteres." . "<br>";
        }
    } else {
        return "preencha o campo nome apenas com texto<br>";
    }
    return true;
}

function validar_senha($senha, $senha_conf) {
    $senha = strip_tags($senha);
    $senha_conf = strip_tags($senha_conf);
    if ((strlen(trim($senha)) < 8) || (strlen(trim($senha)) > 16)) {
        return "Preencha o campo senha com no minimo 8 caracteres e máximo 16." . "<br>";
    }
    if (is_numeric($senha)) {
        return "senha invalida<br>";
    }
    if ($senha != $senha_conf) {
        return "senha nao confirmada!";
    }

    return true;
}
?>
