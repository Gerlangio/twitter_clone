<?php
  //requer uma vez
    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $objDb = new db();
    $link = $objDb->conecta_mysql();

    $sql = "insert into usuarios(usuario, email, senha) values ('usuario', 'email', 'senha')";

    //executar a query
    mysqli_query($link, $sql);
?>