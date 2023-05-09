<?php
  require './vendor/autoload.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

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
  $mail->Username = "test@carcleaningveghel.nl";
  $mail->Password = "Pelnia1992";
  $mail->WordWrap = 50;
  $mail->IsHTML(true);

  $mail->From = "test@carcleaningveghel.nl";
  $mail->addAddress("tymek.m@hotmail.com");
  $mail->FromName = $name;
  $mail->Subject = "Contact form email";
  $mail->Body = $message;

  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Dit is geen valide E-mail adres";
    return;
  }

  if(!$mail->send()){
    echo "Je bericht is niet verzonden:\n {$mail->ErrorInfo}";
  } else {
    echo 'Je bericht is verzonden, we zullen snel contact met je opnemen.';
  }
?>


