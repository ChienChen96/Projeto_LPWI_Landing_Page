<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['username'])) {
    header("Location: acesso_administrador_login.php");
    exit();
}

// Conexão com o banco de dados
$con = new mysqli("127.0.0.1", "root", "", "cadastro");

// Verifique a conexão
if ($con->connect_error) {
    die("Falha na conexão: " . $con->connect_error);
}

// Consulta inicial para buscar todos os usuários
$sql = "SELECT * FROM login";
$rs = $con->query($sql);

// Verifique se a consulta foi bem-sucedida
if (!$rs) {
    die("Erro na consulta: " . $con->error);
}

// Consulta de busca quando o parâmetro 'localizar' é passado via GET
if (isset($_GET["localizar"])) {
    $stmt = $con->prepare("SELECT * FROM login WHERE username LIKE ?");
    if ($stmt) {
        $search = '%' . $_GET["localizar"] . '%';
        $stmt->bind_param('s', $search);
        $stmt->execute();
        $rs = $stmt->get_result();
    } else {
        die("Erro na preparação da consulta: " . $con->error);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consulta Usuários</title>
  <link rel="stylesheet" href="acesso_administrador_buscar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    body {
  background-image: url(./assets/plano-de-fundo.svg);
}

.cabecalho {
  background-color: #a5a4a4;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  padding: 20px;
  position: relative;
}

.logo {
  margin-left: 20px;
}

.logo_dnc {
  padding-left: 80px;
}

.cabecalho__menu-amburguer {
  width: 30px;
  height: 30px;
  background-image: url(./assets/icone_menu.svg);
  background-repeat: no-repeat;
  background-position: center;
  display: inline-block;
  cursor: pointer;
}

.lista-menu {
  display: none;
  position: absolute;
  top: 102px;
  left: 0;
  background-color: #a5a4a4;
  border: 1px solid #ccc;
  list-style: none;
  padding: 5px 10px;
  width: 200px;
}

.lista-menu .lista_menu_item {
  margin-bottom: 5px;
}

.lista-menu .lista_menu_item a {
  text-decoration: none;
  color: #ffffff;
  display: flex;
  align-items: center;
  text-transform: uppercase;
  font-weight: bold;
}

.lista-menu .lista_menu_item a img {
  margin-right: 10px;
}

.lista-menu_link_sair {
  margin-top: 15px;
}

.container_botao {
  display: none;
}

.container_botao:checked ~ .lista-menu {
  display: block;
}

.centered-container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  min-height: 100vh;
  color: #fff;
}

.form-container,
.table-container {
  width: 100%;
  max-width: 600px;
  margin-bottom: 20px;
}

.table-container table {
  width: 100%;
  border: 1px solid #fff;
  border-collapse: collapse;
  color: #fff;
}

.table-container th,
.table-container td,
.table-container thead {
  border: 1px solid #fff;
  padding: 8px;
  text-align: center;
}

.table-container th {
  background-color: #ffff;
  color: #020617;
}

.form-container {
  margin-top: 30px;
}

.table tbody tr:hover {
  color: #d4d4d4; /* Cor do texto ao passar o mouse */
}

.table {
  cursor: pointer;
}


  </style>
</head>
<body>

  <header class="cabecalho">
    <div class="icon">
      <input type="checkbox" id="menu" class="container_botao" />
      <label for="menu">
        <span class="cabecalho__menu-amburguer container_imagem"></span>
      </label>
      <ul class="lista-menu">
        <li class="lista_menu_item">
          <a href="acesso_administrador_logout.php" class="lista-menu_link_sair">
            <img id="icone_logout" src="./assets/Login.svg" alt="Ícone Logout" />Sair
          </a>
        </li>
      </ul>
    </div>
    <div class="logo">
      <img class="logo_dnc" src="./assets/logo-dnc.svg" alt="Logo da DNC" />
    </div>
  </header>

  <div class="container centered-container">
    <div class="form-container">
      <form method="GET" action="acesso_administrador_buscar.php" class="input-group mb-3">
        <input type="text" class="form-control" name="localizar" placeholder="Digite até 3 letras para procurar">
        <input type="submit" class="btn btn-primary" value="BUSCAR">
      </form>
    </div>

    <div class="table-container">
      <h2 class="text-center">Lista de usuários</h2>
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th>ID</th>
            <th>Usuário</th>
            <th>Opções</th>
          </tr>
        </thead>
        <tbody>
          <?php
            // Reinicia o ponteiro do resultado para a primeira linha
            $rs->data_seek(0);

            // Renderiza a tabela de usuários
            while ($linha = $rs->fetch_assoc()) {
              echo "<tr>
                <td>{$linha['id']}</td>
                <td>{$linha['username']}</td>
                <td>
                  <a href='acesso_administrador_alterar.php?id={$linha['id']}' class='btn btn-success'>✏️</a>
                  <a href='acesso_administrador_excluir.php?id={$linha['id']}' class='btn btn-danger'>🗑️</a>
                </td>
              </tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
