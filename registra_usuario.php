<?php

    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = " select * from usuarios where usuario = '$usuario' ";
    if (mysqli_query($link,$sql)){

      $dados_usuario = mysqli_fetch_array ( $resultado_id)  mysqli_fetch_array($resultado_id);

    }else {
        echo ' Erro ao tentar localizar o registro de usuário';

    }

    die();

    $sql = "INSERT INTO usuarios (usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";

    //executar a query
    if(mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
    }else{
        echo "Erro ao registrar o usuário!";
    }

?>