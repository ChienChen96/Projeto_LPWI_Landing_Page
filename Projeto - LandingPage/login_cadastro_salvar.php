<?php
$username = @$_POST["username"];
$senha = @$_POST["senha"];
$email=@$_POST["email"];
$telefone = @$_POST["telefone"];

$conexao = new mysqli(
  "127.0.0.1", // servidor hospedagem
  "root",      // usuário
  "" ,          // senha
  "cadastro"     // Nome do banco
);

$sql = "
INSERT INTO login (username,senha,email,telefone)
VALUES ('$username','$senha','$email','$telefone')";

$rs = $conexao->query($sql);


header("location:login.php");


?>