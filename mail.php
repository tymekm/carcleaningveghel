<?php
  require 'vendor/autoload.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;
  include 'credentials.php';

  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $telnum = $_REQUEST['telnum'];
  $message = $_REQUEST['message'];


  $mail = new PHPMailer();
  $mail->setLanguage("nl");

  $mail->IsSMTP(true);
  $mail->Host = "smtp.strato.com";
  $mail->Port = 587;
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "tls";
  $mail->Username = $user;
  $mail->Password = $pass;
  $mail->WordWrap = 50;
  $mail->IsHTML(true);

  $mail->From = $user;
  $mail->addAddress("tymek.m@hotmail.com");
  $mail->FromName = $name;
  $mail->Subject = "Contact form email";
  $mail->Body = 
    "<style>
      * {
        font-family: Helvetica;
      }
      #info {
        margin: 10px; 
      }
      #bericht {
        white-space: pre-line;
        margin: 10px;
      }
    </style>
      <h3>Bericht verzonden vanuit de website:</h3>
      <div id=\"info\">
        <p>Naam: {$name}</p>
        <a href=\"mailto:{$email}\">
          {$email}</a
        >
        <p>Telefoonnummer: {$telnum}</p>
        <p>Bericht:</p>
        <p id=\"Bericht\">{$message}\n{$message}</p>
      </div>
  ";
  $mail->IsHTML(true);

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Dit is geen valide E-mail adres";
    return;
  }

  if(!$mail->send()){
    echo "Je bericht is niet verzonden:\n {$mail->ErrorInfo}";
  } else {
    echo "Je bericht is verzonden, we zullen snel contact met je opnemen.";
  }
?>


