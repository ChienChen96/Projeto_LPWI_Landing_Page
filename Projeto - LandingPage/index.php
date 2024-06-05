<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <title>Escola DNC</title>
  </head>
  <body>
    <!--MENU SUPERIOR-->
    <div id="menusuperior">
      <a
        href="https://ed.escoladnc.com.br/formacoes-g/?utm_source=google&utm_medium=paid&utm_campaign=hr-ga-geral-266-1&utm_content=hr-ga-geral-266-1-2&utm_term=escola%20dnc&utm_term=escola%20dnc&utm_campaign=%5B266%5D%5BOP%5D%5BHR%5D%5BForma%C3%A7%C3%B5es+Geral%5D&utm_source=adwords&utm_medium=ppc&hsa_acc=1620955800&hsa_cam=21154122651&hsa_grp=163559659391&hsa_ad=696317310702&hsa_src=g&hsa_tgt=kwd-1678680141535&hsa_kw=escola%20dnc&hsa_mt=b&hsa_net=adwords&hsa_ver=3&gad_source=1&gclid=CjwKCAjw0YGyBhByEiwAQmBEWppx-ncc5VNbvTKHNr_3VsaghtK_mWNztbGz6v4O4oVdFoeAZSjEaBoCOAwQAvD_BwE"
        target="_blank"
        ><img src="assets/logo-dnc.svg" id="logo" alt="logo-dnc"
      /></a>

      <h1 id="titulo_menu-superior">
        Dê os primeiros passos da <br />
        sua carreira em Tecnologia
      </h1>
      <p id="texto_menu-superior">
        Inscreva-se no curso gratuito de Introdução à <br />
        Tecnologia da DNC School e aprenda os principais <br />
        fundamentos para construir experiências efetivas.
      </p>

      <div id="button_container">
        
        <button id="botao_login" onclick="window.location.href='login.php'"><img id="icon_login" src="./assets/Login.svg" alt="ícone de login">Login</button></a>
        <button id = "botao_cadastrar" onclick="window.location.href='login_cadastro.php'"> <img id="icon_cadastrar" src="./assets/Cadastrar.svg" alt="">Register</button>
      </div>
    </div>

    <!--MENU INFORMACIONAL-->
    <div id="menuinformacional">
      <p class="texto-informativo">
        <img
          src="assets/icone-certificado.svg"
          alt="Icone de um icone-certificado"
          class="icone"
          id="certificado"
        />Certificado de conclusão
      </p>

      <p class="texto-informativo">
        <img
          src="assets/icone-relogio.svg"
          class="icone"
          alt="Icone de um relogio"
          id="relogio"
        />4 horas de conteúdo
      </p>

      <p class="texto-informativo">
        <img
          src="assets/icone-camera.svg"
          class="icone"
          alt="Icone de uma câmera"
          id="camera"
        />Aulas online gravadas
      </p>
    </div>

    <!--SEÇÃO VIDEO-->
    <div id="secao-video">
      <iframe
        id="video"
        width="502px"
        height="283px"
        src="https://www.youtube.com/embed/ITxGkd9h4n4"
        title="DNC - A escola inovadora que forma profissionais de alta perfomance"
        frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        referrerpolicy="strict-origin-when-cross-origin"
        allowfullscreen
      ></iframe>
      <div>
        <h1 id="titulo-video">
          Aprenda com especialistas e <br />
          comece seu primeiro projeto
        </h1>
        <br /><br />
        <p id="titulo-texto">
          Conheça o processo de desenvolvimento e entenda como utilizar <br />
          os principais métodos e ferramentas da área para resolver <br />
          problemas complexos.
          <br /><br />
          Conquiste seu certificado e desenvolva um projeto prático para <br />
          aplicar seus conhecimentos.
        </p>
      </div>
    </div>

    <!--CARROSSEL-->
    <div id="carrossel">
      <h1 id="titulo-carrossel">
        Mais de 500 alunos já iniciaram seus estudos
      </h1>

      <!--Divisão Cards-->
      <div id="div-cards">
        <img
          id="Seta_Esquerda"
          onclick="RolarParaEsquerda()"
          class="seta"
          src="./assets/Seta_Esquerda.svg"
          alt="Seta Esquerda"
        />
        <img
          id="Leonardo"
          class="card"
          src="./cards/Leonardo.svg"
          alt="Comentario do Leonardo sobre o curso da DNC"
        />
        <img
          id="Samantha"
          class="card"
          src="./cards/Samantha.svg"
          alt="Comentario do Samantha sobre o curso da DNC"
        />
        <img
          id="Bruna"
          class="card"
          src="./cards/Bruna.svg"
          alt="Comentario do Bruna sobre o curso da DNC"
        />
        <img
          id="Seta_Direita"
          onclick="RolarParaDireita()"
          class="seta"
          src="./assets/Seta_Direita.svg"
          alt="Seta Direita"
        />
      </div>
    </div>

    <!--Formulário-->
    <div id="formulario">
      <h1 id="formulario-titulo">
        Comece agora mesmo e dê o próximo passo da sua carreira
      </h1>
      <form
        action="https://api.sheetmonkey.io/form/cQF8B8VA6vAwRktP91dkiS"
        method="POST"
      >
        <input type="text" placeholder="Nome" name="Name" required /><br />
        <input type="email" placeholder="E-mail" name="Email" required /><br />
        <input type="text" placeholder="Phone" name="Phone" /><br />
        <input
          type="hidden"
          name="Created"
          value="x-sheetmonkey-current-date-time"
        />
        <!--hidden significa que o usuário não vai conseguir enchergar isso só será visto pelo pessoal do suporte. -->
        <button id= "botao_formulario" type="submit">Acesse a ementa grátis</button>
      </form>
    </div>

    <!--Rodapé-->
      <footer>
        <img id ="logo_dnc_rodape" src="./assets/logo-dnc.svg" alt="logo da DNC">
        <div id="address">
          <h3 id="rodape_endereco">Endereço</h3>
          <p id = "rodape_rua">R. Justino Cobra, 61 - Vila Ema, São José dos Campos - SP, 12243-030</p>
        </div>

        <div id="contact">
            <h3>Contato</h3> 
            <p id="phone_number">(19) 99187-4342</p>
        </div>

        <div id="social_media">
            <h3 id="media">Redes sociais</h3>
            <a href="https://www.instagram.com/escoladnc/" target="_blank"><img class="icon" src="./assets/instagram-logo.svg" alt="logo da instagram"></a>
            <a href="https://www.linkedin.com/school/escoladnc/?originalSubdomain=br" target="_blank"><img class="icon" src="./assets/linkedin_logo.svg" alt="logo do linkedin"></a>
            <a href="https://www.youtube.com/@EscolaDNC" target="_blank"><img class="icon" src="./assets/youtube_logo.svg" alt="logo do youtube"></a>
        </div>
      </footer>
    <script src="index.js"></script>
  </body>
</html>
