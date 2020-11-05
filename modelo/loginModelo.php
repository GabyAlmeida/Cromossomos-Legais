
<?php
function quantidadeImg($idusuario){
    $sql= "SELECT count(idImagem) as qtadeImagem FROM imagens WHERE idusuario= $idusuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    return $usuario["qtadeImagem"];
}

function pegarLogin($nome,$senha) {
    $nome= mysqli_real_escape_string(conn(),$nome);
    $senha= mysqli_real_escape_string(conn(),$senha);
    $sql = "SELECT * FROM usuario WHERE nomeusuario= '$nome' and senha='$senha'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
      echo "Erro" . mysqli_error($cnx);
      die();
    }
    $login = mysqli_fetch_array($resultado);
    return $login;
}
?>
