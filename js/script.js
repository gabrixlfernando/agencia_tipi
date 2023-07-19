// Animação Do Banner

$(".banner").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  dots: true,
});

// Animação Depoimentos

$(".deposlide").slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
});

// Carrosel Galeria

$(".galeria").slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      },
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

// Menu Mobile Responsivo

document.querySelector(".abrir-menu").onclick = function () {
  document.documentElement.classList.add("menu-ativo");
};
document.querySelector(".fechar-menu").onclick = function () {
  document.documentElement.classList.remove("menu-ativo");
};

// inicializar animação do AOS

AOS.init();

// menu fixo na tela

window.onscroll = function () {
  var top = window.scrollY || document.documentElement.scrollTop;

  if (top > 800) {
    // console.log("adicionar menu fixo");
    document.getElementById("topoFixo").classList.add("menu-fixo");
    document.getElementById("topoFixo").classList.remove("site");
  } else {
    // console.log("remover menu fixo");
    document.getElementById("topoFixo").classList.remove("menu-fixo");
    document.getElementById("topoFixo").classList.add("site");
  }
};

// enviar para whatsapp

function formWhats() {

  var form = document.getElementById('formContato');

  var nome = "*Nome: *" + document.getElementById("nome").value;
  var email = "*E-mail: *" + document.getElementById("email").value;
  var tel = document.getElementById("tel").value;
  var mens = "*Mensagem: *" + document.getElementById("mens").value;

  var agencia = "*Agêngia Tipi*";
  var assunto = "Mensagem do site!";

  var numFone = "5511944612358";
  var quebraDeLinha = "%0A";

  if (tel == "") {
    alert("O campo do celular é obrigatório")
    return;
  } else {
    var tel = "*Fone: *" + document.getElementById("tel").value;
  }

  window.open(
    "https://api.whatsapp.com/send?phone=" +
      numFone +
      "&text=" +
      assunto +
      "-" +
      agencia +
      quebraDeLinha +
      quebraDeLinha +
      nome +
      quebraDeLinha +
      email +
      quebraDeLinha +
      tel +
      quebraDeLinha +
      mens,
    "_blank"
  );

  form.reset();
}
