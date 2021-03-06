<?php
//PHPMailer for Group Stay
require_once('../phpmailer/class.phpmailer.php');

$to = "FSmith@paramounthotelgroup.com";
$to_label = "Village-Suites";
$email = isset($_POST['email'])?$_POST['email']:'';
$name = isset($_POST['name'])?$_POST['name']:'';
$checkin = isset($_POST['checkin'])?$_POST['checkin']:'';
$checkout = isset($_POST['checkout'])?$_POST['checkout']:'';
$num_room = isset($_POST['num_room'])?$_POST['num_room']:'';
$room_type = isset($_POST['room_type'])?$_POST['room_type']:'';

// Optional Fields
$organization = isset($_POST['organization'])?$_POST['organization']:'';
$notes = isset($_POST['notes'])?$_POST['notes']:'';

$emailErr = "";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}

$is_root_from = FALSE;
if (strpos($email, 'accessdomain.com') !== false) {
    $is_root_from = TRUE;
}

if(!$is_root_from && !empty($email) && !empty($name) && !empty($checkin) && !empty($checkout) && !empty($num_room) && !empty($room_type) && empty($emailErr)){
	$correo = new PHPMailer();
	// SetFrom
	$correo->SetFrom($email, $name);
	// Add_Reply_To
	$correo->AddReplyTo($email, $name);
	// Add_Address
	$correo->AddAddress($to, $to_label);
	$correo->AddAddress($email, $name);
	// Subject
	$correo->Subject = $_POST['name']." Has contacted us - Group Stay";
	// Email_Body
	$correo->MsgHTML("<h3>".$name."</h3> <p><b>Phone:</b> ".$_POST['phone']."</p><p> <b>Organization:</b> ".$organization."</p> <p> <b>Check In:</b> ".$checkin."</p> <p><b>Check Out:</b> ".$checkout."</p> <p><b>Room Number:</b> ".$num_room."</p> <p><b>Room Type:</b> ".$room_type."</p> <p><b>Notes:</b> ".$notes."</p>");
	//Actions
	if(!$correo->Send()) {
	  echo "Oops. Something went wrong. Please try again later. " . $correo->ErrorInfo;
	} else {
	  //echo "Mensaje enviado con exito.";
		header('Location: ../thank-you/');
	}
} else {
	echo "Oops. Something went wrong. Please try again later. " . $correo->ErrorInfo;
}
?>
