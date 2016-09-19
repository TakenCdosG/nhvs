<?php
//PHPMailer for Contact us
require_once('phpmailer/class.phpmailer.php');

$correo = new PHPMailer(); 

//SetFrom
$correo->SetFrom($_POST['email'], $_POST['name']);

//AddReplyTo
$correo->AddReplyTo($_POST['email'],$_POST['name']);

//AddAddress
$correo->AddAddress("jonathan.caiaffa@akendos.com","Village-Suites");
$correo->AddAddress("maicol.lopez@akendos.com","Village-Suites");
$correo->AddAddress("melanie@thinkcreativegroup.com","Village-Suites");

$correo->AddAddress($_POST['email'],$_POST['name']);

//Subject
$correo->Subject = $_POST['name']." Has contacted us";

$correo->MsgHTML("<h3>".$_POST['name']."</h3> <p><b>Phone:</b> ".$_POST['phone']."</p> <p><b>Message: </b>".$_POST['message']."</p>");

//Actions
if(!$correo->Send()) {
  echo "Oops. Something went wrong. Please try again later. " . $correo->ErrorInfo;
} else {
  //echo "Mensaje enviado con exito.";
	header('Location: thank-you.html');
}

?>