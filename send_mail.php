<?php
//PHPMailer for Contact us
require_once('phpmailer/class.phpmailer.php');

$to = "esteban@akendos.com";
$to_label = "Village-Suites";
$email = isset($_POST['email'])?$_POST['email']:'';
$name = isset($_POST['name'])?$_POST['name']:'';
$message = isset($_POST['message'])?$_POST['message']:'';

// Optional Fields
$phone = isset($_POST['phone'])?$_POST['phone']:'';

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}

$is_root_from = FALSE;
if (strpos($email, 'accessdomain.com') !== false) {
    $is_root_from = TRUE;
}

if(!$is_root_from && !empty($email) && !empty($name)){
	$correo = new PHPMailer();
	// SetFrom
	$correo->SetFrom($email, $name);
	// Add_Reply_To
	$correo->AddReplyTo($email, $name);
	// Add_Address
	$correo->AddAddress($to, $to_label);
	$correo->AddAddress($email, $name);
	// Subject
	$correo->Subject = $_POST['name']." Has contacted us";
	// Email_Body
	$correo->MsgHTML("<h3>".$_POST['name']."</h3> <p><b>Phone:</b> ".$_POST['phone']."</p> <p><b>Message: </b>".$_POST['message']."</p>");
	//Actions
	if(!$correo->Send()) {
	  echo "Oops. Something went wrong. Please try again later. " . $correo->ErrorInfo;
	} else {
	  //echo "Mensaje enviado con exito.";
		header('Location: ../thank-you/');
	}
}
?>
