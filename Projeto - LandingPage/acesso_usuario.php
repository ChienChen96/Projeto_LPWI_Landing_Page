<?php
session_start();

// Verifica se a sessão do usuário está ativa
if (!isset($_SESSION['username'])) {
    // Se não, redireciona para a página de login
    header("location: login.php");
    exit();
}

// Nome do usuário armazenado na sessão
$username = $_SESSION['username'];
?>



<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Área do Usuário</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="reset.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <style>
      body {
      color: #fff;
      background-color: black;
    }

.cabecalho {
  background-color: #a7a3a3;
  display: flex;
  justify-content: space-between;
  align-items: center;
  position: relative;
  padding: 10px 50px; /* Ajuste o padding conforme necessário */
}

.logo_dnc {
  margin-top: 30px;
  padding-bottom: 20px;
}

.cabecalho__menu-amburguer {
  width: 70px;
  height: 70px;
  background-image: url(./assets/ícone_usuario.svg);
  background-repeat: no-repeat;
  background-position: center;
  display: inline-block;
  margin-right: 0; /* Remove margin-right para centralizar */
  cursor: pointer;
}

.lista-menu {
  display: none;
  position: absolute;
  top: 134.55px;
  left: 0;
  background-color: #a7a3a3;
  border: 1px solid #ccc;
  list-style: none;
  padding: 5px 10px;
  width: 200px;
  margin-left:1780px;
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


.container_usuario {
  font-size: 50px;
  color: black;
}

.container_lesson {
  margin-top: 150px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.lesson {
  width: 50%;
  background-color: #333;
  margin-bottom: 20px;
  padding: 18px;
  border-radius: 8px;
  cursor: pointer;
  text-align: left;
}

.container_lesson h2 {
  background-color: aliceblue;
  color: black;
  border-radius: 5px;
  padding: 10px 15px 15px 15px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 20px;
  font-weight: bold;
  text-transform: uppercase;
}

.arrow {
  margin-left: auto;
}

.video {
  display: none;
  justify-content: center;
  align-items: center;
  margin-top: 20px;
}


    </style>
  </head>
  <body>
    <header class="cabecalho">
      <div class="logo">
        <img class="logo_dnc" src="./assets/logo-dnc.svg" alt="logo da DNC" />
      </div>
      <div class="container_usuario">
        <h1>Seja Bem-Vindo, <?php echo htmlspecialchars($username); ?>!</h1>
      </div>
      <div class="icon">
        <input type="checkbox" id="menu" class="container_botao" />
        <label for="menu">
          <span class="cabecalho__menu-amburguer container_imagem"></span>
        </label>
        <ul class="lista-menu">
          <li class="lista_menu_item">
            <a href="acesso_usuario_logout.php" class=".lista-menu_link_sair">
              <img id="icone_logout" src="./assets/Login.svg" alt="" />Sair
            </a>
          </li>
        </ul>
      </div>
    </header>
    
    <div class="container_lesson">
      <div class="lesson" onclick="toggleVideo('video1')">
        <h2>Aula 1 - Introdução <span class="arrow">▼</span></h2>
        <div class="video" id="video1">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/videoid1"
            frameborder="0"
            allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class="lesson" onclick="toggleVideo('video2')">
        <h2>Aula 2 - Lógica de Programação <span class="arrow">▼</span></h2>
        <div class="video" id="video2">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/videoid2"
            frameborder="0"
            allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class="lesson" onclick="toggleVideo('video3')">
        <h2>Aula 3 - HTML & CSS <span class="arrow">▼</span></h2>
        <div class="video" id="video3">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/videoid3"
            frameborder="0"
            allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class="lesson" onclick="toggleVideo('video4')">
        <h2>Aula 4 - JavaScript <span class="arrow">▼</span></h2>
        <div class="video" id="video4">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/videoid4"
            frameborder="0"
            allowfullscreen
          ></iframe>
        </div>
      </div>
      <div class="lesson" onclick="toggleVideo('video5')">
        <h2>Aula 5 - Projeto na Prática <span class="arrow">▼</span></h2>
        <div class="video" id="video5">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/videoid5"
            frameborder="0"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>
    <script src="acesso_usuario.js"></script>
  </body>
</html>
