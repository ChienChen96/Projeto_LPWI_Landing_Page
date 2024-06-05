<?php
  $id = $_GET["id"];

  $con = new mysqli("127.0.0.1", "root", "","cadastro");

  $sql = "DELETE  FROM login WHERE id = '$id'";
  $con->query($sql);
  header("location:acesso_administrador_buscar.php");
  //echo $dados["usuario"];

?>
