<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="login_cadastro.css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <a href="index.php"><img id="logo_dnc" src="./assets/logo-dnc.svg" alt="logo da DNC" /></a>
        <h2>Cadastrar</h2>
        <form method="post" action="login_cadastro_salvar.php">
          <label class="form-label">Usuário</label>
          <input class="form-control" type="text" name="username" placeholder = 'Username' required />

          <label class="form-label">Senha</label>
          <input class="form-control" type="password" name="senha" placeholder = 'Senha' required />

          <label class="form-label">E-mail</label>
          <input class="form-control" type="email" name="email" placeholder = 'E-mail' required />

          <label class="form-label">Telefone</label>
          <input class="form-control" type="text" name="telefone" placeholder = 'Telefone (xx)99999-9999' required />

          <input class="btn" type="submit" value="Cadastrar" />
        </form>
      </div>
    </div>
  </body>
</html>
