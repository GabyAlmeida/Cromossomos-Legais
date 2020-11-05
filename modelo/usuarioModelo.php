<?php

function existe_user($email) {
    $sql = "SELECT * FROM usuario WHERE email= '$email'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
 
    if (!empty($usuario)) { //se existir
        return true;
    }else{
        return false;
    }
}

function pegarTodosUsuarios() {
    $sql = "SELECT * FROM usuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;
}

function pegarTodasAlteracoesUsuario() {
    $sql = "SELECT * FROM tbl_log_usuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;
}

function pegarTodasAlteracoesImagem() {
    $sql = "SELECT * FROM tbl_log_imagem";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_array($resultado)) {
        $usuarios[] = $linha;
    }
    return $usuarios;
}

function pegarUsuarioPorId($id) {
    $sql = "SELECT * FROM usuario WHERE idusuario= $id";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado);
    return $usuario;
}

function adicionarUsuario($nome, $email, $senha) {
    $nome = mysqli_real_escape_string(conn(), $nome);
    $email = mysqli_real_escape_string(conn(), $email);
    $senha = mysqli_real_escape_string(conn(), $senha);


    $sql = "INSERT INTO usuario (nomeusuario, email,senha,tipousuario) 
			VALUES ('$nome', '$email', '$senha','user')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao cadastrar usuário' . mysqli_error($cnx));
    }
    return 'Usuario cadastrado com sucesso!';
}

function editarUsuario($id, $nome, $email, $senha) {
    $nome = mysqli_real_escape_string(conn(), $nome);
    $email = mysqli_real_escape_string(conn(), $email);
    $senha = mysqli_real_escape_string(conn(), $senha);
    $sql = "UPDATE usuario SET nomeusuario = '$nome', email = '$email', senha='$senha'  WHERE idusuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao alterar usuário' . mysqli_error($cnx));
    }
    return 'Usuário alterado com sucesso!';
}

function deletarUsuario($id) {
    $sql = "DELETE FROM usuario WHERE idusuario = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao deletar usuário' . mysqli_error($cnx));
    }
    return 'Usuario deletado com sucesso!';
}
