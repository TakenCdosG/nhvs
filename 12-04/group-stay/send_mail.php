<?php
//PHPMailer for Group Stay
require_once('../phpmailer/class.phpmailer.php');

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
$organization = $_POST['organization'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$num_room = $_POST['num_room'];
$room_type = $_POST['room_type'];
$notes = $_POST['notes'];

$correo->Subject = $_POST['name']." Has contacted us - Group Stay";

$correo->MsgHTML("<h3>".$_POST['name']."</h3> <p><b>Phone:</b> ".$_POST['phone']."</p><p> <b>Organization:</b> ".$organization."</p> <p> <b>Check In:</b> ".$checkin."</p> <p><b>Check Out:</b> ".$checkout."</p> <p><b>Room Number:</b> ".$num_room."</p> <p><b>Room Type:</b> ".$room_type."</p> <p><b>Notes:</b> ".$notes."</p>");

//Actions
if(!$correo->Send()) {
  echo "Oops. Something went wrong. Please try again later. " . $correo->ErrorInfo;
} else {
  //echo "Mensaje enviado con exito.";
	header('Location: ../thank-you.html');
}

?>