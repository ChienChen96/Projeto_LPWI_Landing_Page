<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: acesso_administrador_buscar.php");
    exit();
}

// Inicializa a variável de erro
$error = "";

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém os valores de username e senha do formulário
    $username = $_POST["username"];
    $senha = $_POST["senha"];

    // Valores fixos para validação
    $valid_username = "Chen_admin";
    $valid_senha = "Chen987";

    // Verifica se o username e a senha são válidos
    if ($username === $valid_username && $senha === $valid_senha) {
        $_SESSION['username'] = $username; // Inicia a sessão
        header("Location: acesso_administrador_buscar.php");
        exit();
    } else {
        $error = "Usuário e/ou senha inválidos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="acesso_administrador_login.css" />
  </head>
  <body>
    <div class="container">
      <img id="logo_dnc" src="./assets/logo-dnc.svg" alt="logo da DNC" />
      <div class="row">
        <h1>Admin</h1>
        <form method="post" action="acesso_administrador_login.php">
        <?php
          if ($error) {
          echo "<p style='color: red;'>$error</p>";
          }
        ?>
          <label class="form-label">Usuário</label>
          <input class="form-control" type="text" name="username" placeholder='Username'/>
          <label class="form-label">Senha</label>
          <input class="form-control" type="password" name="senha" placeholder='Senha' />
          <input class="btn btn-warning" type="submit" value="Entrar" />
        </form>
      </div>
    </div>
  </body>
</html>
