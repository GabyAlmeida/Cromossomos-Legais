<?php

function adicionarImagem($nome, $iduser) {
    $sql = "INSERT INTO imagens (nomeimagem) 
			VALUES ('$nome')";
    if (isset($_FILES['imagem']['name']) && $_FILES['imagem']['error'] == 0) {
        $arquivo_tmp = $_FILES['imagem']['tmp_name'];
        $img = $_FILES['imagem']['name'];

        $extensao = pathinfo($img, PATHINFO_EXTENSION);

        $extensao = strtolower($extensao);
        if (strstr('.jpg;.jpeg;.gif;.png', $extensao)) {
            $novoNome = uniqid(time()) . '.' . $extensao;
            $destino = './publico/images/' . $novoNome;
            @move_uploaded_file($arquivo_tmp, $destino);
            $sql = "INSERT INTO imagens(idusuario,caminho,nomeimagem)
		VALUES ('$iduser','$destino','$nome')";
        }
    }
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao cadastrar produto' . mysqli_error($cnx));
    }
    return 'imagem cadastrado com sucesso!';
}

function editarImagem($id, $nome) {
    $sql = "UPDATE imagens SET nomeimagem = '$nome'  WHERE idImagem = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao alterar imagem' . mysqli_error($cnx));
    }
    return 'Imagem alterada com sucesso!';
}

function deletarImagem($id, $caminho) {
    $exclua = $caminho[0][2];
    $sql = "DELETE FROM imagens WHERE idImagem = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    unlink($exclua);
    if (!$resultado) {
        die('Erro ao deletar imagem' . mysqli_error($cnx));
    }
    return 'imagem deletado com sucesso!';
}

function selecionarImagens() {
    $sql = "SELECT *  from imagens"; //SELECIONAR UM REGISTRO!!
    $retorno = mysqli_query(conn(), $sql);
    $imagens = array();
    while ($registros = mysqli_fetch_array($retorno)) {
        $imagens[] = $registros;
    }
    return $imagens;
}

function pegarListaNomesImagens($iduser) {
    $sql = "SELECT caminho from imagens WHERE idusuario= $iduser"; //SELECIONAR UM REGISTRO!!
    $retorno = mysqli_query(conn(), $sql);
    $imagens = array();
    while ($registros = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) {
        $imagens[] = $registros["caminho"];
    }
    return $imagens;
}

function pegarImagemPorId($id) {
    $sql = "SELECT * FROM imagens WHERE idImagem= $id";
    $resultado = mysqli_query(conn(), $sql);
    $imagens = mysqli_fetch_array($resultado);
    return $imagens;
}

function pegarImagemPorIdUsuario($iduser) {
    $sql = "SELECT * FROM imagens WHERE idusuario= $iduser";
    $retorno = mysqli_query(conn(), $sql);
    $imagens = array();
    while ($registros = mysqli_fetch_array($retorno)) {
        $imagens[] = $registros;
    }
    return $imagens;
}

?>