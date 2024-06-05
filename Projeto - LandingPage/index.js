var setDireita = window.document.getElementById("Seta_Direita");
var Leonardo = window.document.getElementById("Leonardo");
var Samantha = window.document.getElementById("Samantha");
var Bruna = window.document.getElementById("Bruna");
var setEsquerda = window.document.getElementById("Seta_Esquerda");

function RolarParaDireita() {
  Leonardo.style = "display:none";
  Bruna.style = "display:flex";
  setDireita.style = "display:none";
  setEsquerda.style = "display:flex";
}

function RolarParaEsquerda() {
  Leonardo.style = "display:flex";
  Bruna.style = "display:none";
  setDireita.style = "display:flex";
  setEsquerda.style = "display:none";
}
