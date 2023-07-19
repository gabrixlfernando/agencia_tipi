<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Agência TIPI</title>

    <!-- Reseta todas as estilizações padrões do navegador -->
    <link rel="stylesheet" href="css/reset.css" />

    <!-- itens necessarios para o funcionamento das animações Slick -->
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Página de estilização do site -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <!-- Menu -->
    <?php require_once('conteudo/topo.php'); ?>

    <!-- Conteúdo da página ↓ -->
    <main>
      <!-- Banner -->
      <?php require_once('conteudo/banner.php'); ?>
      <!-- Sobre ↓ -->
     
      <section  data-aos="fade-up" class="sobre">
        <div class="site">
            <div id="contSobre">
                <h2>
                    Sobre TIPI
                </h2>
                <p>A Agência TIPI é uma empresa de desenvolvimento web
                    que atua no mercado oferecendo soluções
                    personalizadas e inovadoras para seus clientes. Com
                    um time de profissionais altamente qualificados e
                    experientes, a Agência TIPI se destaca pela sua
                    capacidade de entender as necessidades de seus clientes e 
                    entregar projetos de alta qualidade, com prazos e custos competitivos.
                  </p>
            </div>

            <div>
                <img data-aos="zoom-in" src="img/sobre01.png" alt="">
            </div>

        </div>

        <div class="site">
            <div>
                <img data-aos="zoom-in" src="img/missao.png" alt="">
              </div>

            <div id="contSobre">
                <h2>Missão</h2>
                <p>A Agência TIPI é uma empresa de desenvolvimento web
                    que atua no mercado oferecendo soluções
                    personalizadas e inovadoras para seus clientes. Com
                    um time de profissionais altamente qualificados e
                    experientes, a Agência TIPI se destaca pela sua
                    capacidade de entender as necessidades de seus
                    clientes e entregar projetos de alta qualidade, com
                    prazos e custos competitivos.</p>
            </div>
        </div>

        <div class="site">
            <div id="contSobre">
                <h2>Visão </h2>
                <p>A Agência TIPI é uma empresa de desenvolvimento web
                    que atua no mercado oferecendo soluções
                    personalizadas e inovadoras para seus clientes. Com
                    um time de profissionais altamente qualificados e
                    experientes, a Agência TIPI se destaca pela sua
                    capacidade de entender as necessidades de seus
                    clientes e entregar projetos de alta qualidade, com
                    prazos e custos competitivos.</p>
            </div>

            <div>
                <img data-aos="zoom-in" src="img/MicrosoftTeams-image (1).png" alt="">
            </div>
        </div>

        <div class="site">
            <div>
                <img data-aos="zoom-in" src="img/valores.png" alt="">
            </div>

            <div id="contSobre">
                <h2>Valores</h2>
                <p>A Agência TIPI é uma empresa de desenvolvimento web
                    que atua no mercado oferecendo soluções
                    personalizadas e inovadoras para seus clientes. Com
                    um time de profissionais altamente qualificados e
                    experientes, a Agência TIPI se destaca pela sua
                    capacidade de entender as necessidades de seus
                    clientes e entregar projetos de alta qualidade, com
                    prazos e custos competitivos.</p> 
            </div>
        </div>
      </section>


      <!-- Serviços ↓ -->
      <?php require_once('conteudo/servico-conteudo.php'); ?>

      <!-- Galeria ↓ -->
      <?php require_once('conteudo/galeria.php'); ?>
    </main>
    <!-- Rodapé ↓ -->
    <?php require_once('conteudo/rodape.php'); ?>
    <!-- Fim do conteúdo da página ↑ -->

    <!-- JavaScript ↓ -->

    <!-- Biblioteca Jquery necessaria para o funcionamento 
      das animações realizada com o Slick ↓ -->
    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.7.0.min.js"
    ></script>

    <!-- Arquivo Slick.js inserido para o funcionamento correto 
      das animaçoes usadas no site ↓ -->
    <script type="text/javascript" src="js/slick.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Arquivo JavaScript do site onde foi realizada a execução
    do código para as animações ↓ -->

    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
<!-- Fim HTML -->
