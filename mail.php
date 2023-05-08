<?php
require './vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$telnum = $_REQUEST['telnum'];
$message = $_REQUEST['message'];

$mail = new PHPMailer();

$mail->IsSMTP(true);
$mail->Host = "smtp.strato.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Username = "test@carcleaningveghel.nl";
$mail->Password = "Pelnia1992";
$mail->WordWrap = 50;
$mail->IsHTML(true);
//
$mail->From = $email;
$mail->FromName = $name;
$mail->AddAddress("tymek.m@hotmail.com");
$mail->Subject = "Email from website";
$mail->Body = $message;

if(!$mail->Send())
{
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>

