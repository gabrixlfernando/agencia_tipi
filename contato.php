<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$ok = 0;


if (isset($_POST['email'])) {

  //Load Composer's autoloader
  require './mailer/Exception.php';
  require './mailer/PHPMailer.php';
  require './mailer/SMTP.php';

  //Create an instance; passing `true` enables exceptions
  $mail = new PHPMailer(true);

  try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.hostinger.com';                   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'cloudwise@smpsistema.com.br';                     //SMTP username
    $mail->Password   = 'Senac@agencia03';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Receber o e-mail
    $mail->setFrom('cloudwise@smpsistema.com.br', 'Site AGÊNCIA TIPI'); //e-mail que faz o disparo
    $mail->addAddress('biel_nando2012@hotmail.com');     //Destinatario / quem recebe o e-mail

    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Anexo
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Conteudo corpo do e=mail


    // dados do e-mail
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $mens = $_POST['mens'];

    $mail->CharSet = 'UTF-8';
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Site Agência Tipi';
    $mail->Body    = "
    
      Nome: $nome <br>
      E-mail: $email <br>
      Telefone: $tel <br>
      Mensagem: $mens 
    
    
    ";
    $mail->AltBody = "
    
    Nome: $nome <br>
    E-mail: $email <br>
    Telefone: $tel <br>
    Mensagem: $mens 

    ";

    $mail->send();
    $ok = 1;
    // echo 'Mensagem enviada com SUCESSO!';
  } catch (Exception $e) {
    $ok = 2;
    // echo "ERROOOOO... Tente mais tarde: {$mail->ErrorInfo}";
  }
}

?>



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
    <!-- Mapa -->
    <section><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.0254648900777!2d-46.434437023741005!3d-23.49559225918105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce63dda7be6fb9%3A0xa74e7d5a53104311!2sSenac%20S%C3%A3o%20Miguel%20Paulista!5e0!3m2!1spt-BR!2sbr!4v1687806620972!5m2!1spt-BR!2sbr" width="100%" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></section>

    <!-- Formulario -->
    <section class="form">
      <div class="site">
        <h2>Formulario de contato</h2>

        <form action="#" method="POST" id="formContato">
          <div>
            <input type="text" id="nome" name="nome" placeholder="Informe seu nome">
            <input type="email" name="email" id="email" required placeholder="Informe seu e-mail">
            <input type="tel" id="tel" name="tel" placeholder="Informe seu telefone">
            <h3>
              <?php

              if ($ok == 1) {
                echo $nome . ', sua MENSAGEM foi enviada com SUCESSO!';
              } elseif ($ok == 2) {
                echo $nome . ', ERRO ao enviar sua mensagem. Tente mais tarde.';
              }

              ?>
            </h3>

          </div>
          <div>
            <textarea name="mens" id="mens" cols="30" rows="10" placeholder="Informe sua mensagem"></textarea>
            <div>
              <input type="submit" value="Enviar via e-mail">
              <button onclick="event.preventDefault(); formWhats()">Enviar via Whatsapp</button>
            </div>
          </div>
        </form>

      </div>
    </section>
    <!-- Depoimentos ↓ -->
    <?php require_once('conteudo/depoimento.php'); ?>

    <!-- Blog ↓ -->
    <?php require_once('conteudo/blog.php'); ?>
  </main>
  <!-- Rodapé ↓ -->
  <?php require_once('conteudo/rodape.php'); ?>
  <!-- Fim do conteúdo da página ↑ -->

  <!-- JavaScript ↓ -->

  <!-- Biblioteca Jquery necessaria para o funcionamento 
      das animações realizada com o Slick ↓ -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

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