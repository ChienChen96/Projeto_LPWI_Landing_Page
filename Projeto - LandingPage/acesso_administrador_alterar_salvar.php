<?php

    $id = $_POST["id"];
    $username = $_POST["username"];
    $senha = $_POST["senha"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    $con = new mysqli("127.0.0.1","root","", "cadastro");


    $sql = "SELECT COUNT(1) as total FROM login WHERE id=$id";
    $rs = $con->query($sql);
    $total = $rs->fetch_assoc();

    if($total["total"==0]){
      echo "Id não existe";
      exit;
    }

    $sql = "UPDATE login SET username = '$username', senha='$senha', email='$email', telefone='$telefone' WHERE id = $id";
    $con->query($sql);
    header("Location:acesso_administrador_buscar.php");

?>
