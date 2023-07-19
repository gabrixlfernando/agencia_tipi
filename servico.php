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
      <!-- Serviços ↓ -->


      <section data-aos="fade-up" data-aos-duration="900" class="servico">


<div class="site">

  <h2>Serviço 1</h2>

  <div class="servicoo">

    <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" style="background: none;">

      
      <img src="img/imgServico1.png" alt="Imagem de Serviço" />
      <img src="img/imgServico1.png" alt="Imagem de Serviço" />
      <img src="img/imgServico1.png" alt="Imagem de Serviço" />
      
    </div>

    <div data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Voluptas beatae vitae voluptatum molestiae harum eum, tempora
        tenetur fugit quod aperiam sequi molestias repudiandae assumenda
        temporibus, distinctio deleniti? Voluptatum, sapiente debitis.
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Voluptas beatae vitae voluptatum molestiae harum eum, tempora
        tenetur fugit quod aperiam sequi molestias repudiandae assumenda
        temporibus, distinctio deleniti? Voluptatum, sapiente debitis.
        <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Voluptas beatae vitae voluptatum molestiae harum eum, tempora
        tenetur fugit quod aperiam sequi molestias repudiandae assumenda
        temporibus, distinctio deleniti? Voluptatum, sapiente debitis.
       
      </p>

      <a href="#">Orçamento</a>
    </div>


  </div>

</div>
</section>

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
