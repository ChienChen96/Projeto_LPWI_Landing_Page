<?php
  $id = $_GET["id"];

  $con = new mysqli("127.0.0.1", "root", "","cadastro");

  // Verificação da conexão
  if ($con->connect_error) {
    die("Falha na conexão: " . $con->connect_error);
  }

  $sql = "SELECT * FROM login WHERE id = $id";

  $rs = $con->query($sql);

  // Verificação da consulta
  if (!$rs) {
    die("Erro na consulta: " . $con->error);
  }

  $dados= $rs->fetch_assoc();

  // echo $dados["usuario"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alterar Dados</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
      >
  <style>

    *{
      margin: 0px;
    font-family: "Inter", sans-serif;
    }
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      background-color: #f0f0f0;
      background-image: url(./assets/plano-de-fundo.svg);
    }
    .form-container {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }
    input[type="text"], input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    input[type="submit"] {
      background-color: #247ba0;
      color: white;
      border: none;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background-color: #60a5fa;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <form action="acesso_administrador_alterar_salvar.php" method="POST">
      <table>
        <tr>
          <th><label for="id">Id</label></th>
          <td><input type="text" id="id" name="id" value="<?php echo $dados['id']; ?>" readonly></td>
        </tr>
        <tr>
          <th><label for="username">Username</label></th>
          <td><input type="text" id="username" name="username" value="<?php echo $dados['username']; ?>"></td>
        </tr>
        <tr>
          <th><label for="senha">Senha</label></th>
          <td><input type="text" id="senha" name="senha" value="<?php echo $dados['senha']; ?>"></td>
        </tr>
        <tr>
          <th><label for="email">Email</label></th>
          <td><input type="text" id="email" name="email" value="<?php echo $dados['email']; ?>"></td>
        </tr>
        <tr>
          <th><label for="telefone">Telefone</label></th>
          <td><input type="text" id="telefone" name="telefone" value="<?php echo $dados['telefone']; ?>"></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center;">
            <input type="submit" value="SALVAR">
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>
