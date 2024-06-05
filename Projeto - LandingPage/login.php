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
    <link rel="stylesheet" href="login.css" />
    <style>
      .error-message {
      color: red;
      margin-top: 10px;
      font-weight: bold;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <a href="index.php"><img id="logo_dnc" src="./assets/logo-dnc.svg" alt="logo da DNC" /></a>
      <div class="row">
        <h1>Login</h1>
        <?php
            session_start();

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST["username"];
                $senha = $_POST["senha"];

                $conexao = new mysqli(
                    "127.0.0.1", // servidor hospedagem
                    "root",      // usuário
                    "" ,          // senha
                    "cadastro"     // Nome do banco
                );

                $sql = "
                    SELECT * FROM login
                    WHERE username = '$username'
                    AND senha = '$senha'
                ";

                $resultado = $conexao->query($sql);
                $tabela = $resultado->fetch_assoc();

                if ($tabela == null) {
                    $login_error = "Usuário e/ou senha inválidos";
                } else {
                    $_SESSION['username'] = $tabela['username'];
                    header("location: acesso_usuario.php");
                    exit();
                }
            }
            ?>
        <form method="post" action="">
        <?php
                if (isset($login_error)) {
                    echo "<p class = 'error-message'>$login_error</p>";
                }
                ?>
          <label class="form-label">Usuário</label>
          <input class="form-control" type="text" name="username" placeholder = 'Username'/>
          <label class="form-label">Senha</label>
          <input class="form-control" type="password" name="senha" placeholder = 'Senha' />
          <input class="btn btn-warning" type="submit" value="Entrar" />
          <div class="link-container">
            <a id="cadastrar" href="login_cadastro.php">Cadastre-se</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
