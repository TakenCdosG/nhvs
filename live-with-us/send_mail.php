<?php
//PHPMailer for Live With US
require_once('../phpmailer/class.phpmailer.php');
$correo = new PHPMailer();
//SetFrom
$correo->SetFrom($_POST['email'], $_POST['name']);
//AddReplyTo
$correo->AddReplyTo($_POST['email'],$_POST['name']);
//AddAddress
$correo->AddAddress("esteban@akendos.com","Village-Suites");
$correo->AddAddress($_POST['email'],$_POST['name']);
//Subject
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$room_type = $_POST['room_type'];
$package = ""; //$package = $_POST['package'];
$notes = $_POST['notes'];
$correo->Subject = $_POST['name']." Has contacted us - Live With Us";
$correo->MsgHTML("<h3>".$_POST['name']."</h3> <p><b>Phone:</b> ".$_POST['phone']."</p><p> <b>Check In:</b> ".$checkin."</p> <p><b>Check Out:</b> ".$checkout."</p> <p><b>Room Type:</b> ".$room_type."</p> <p><b>Package:</b> ".$package."</p> <p><b>Notes:</b> ".$notes."</p>");
//Actions
if(!$correo->Send()) {
  echo "Oops. Something went wrong. Please try again later. " . $correo->ErrorInfo;
} else {
  //echo "Mensaje enviado con exito.";
	header('Location: ../thank-you/');
}

// //PHPMailer for Group Stay
// require_once('../phpmailer/class.phpmailer.php');

// $to = "esteban@akendos.com";
// $to_label = "Village-Suites";
// $email = isset($_POST['email'])?$_POST['email']:'';
// $name = isset($_POST['name'])?$_POST['name']:'';
// $checkin = isset($_POST['checkin'])?$_POST['checkin']:'';
// $checkout = isset($_POST['checkout'])?$_POST['checkout']:'';
// $room_type = isset($_POST['room_type'])?$_POST['room_type']:'';
// $package = ""; //$package = $_POST['package'];

// // Optional Fields
// $notes = isset($_POST['notes'])?$_POST['notes']:'';

// if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//   $emailErr = "Invalid email format";
// }

// $is_root_from = FALSE;
// if (strpos($email, 'accessdomain.com') !== false) {
//     $is_root_from = TRUE;
// }

// if(!$is_root_from && !empty($email) && !empty($name) && !empty($checkin) && !empty($checkout) && !empty($num_room) && !empty($room_type)){
// 	$correo = new PHPMailer();
// 	// SetFrom
// 	$correo->SetFrom($email, $name);
// 	// Add_Reply_To
// 	$correo->AddReplyTo($email, $name);
// 	// Add_Address
// 	$correo->AddAddress($to, $to_label);
// 	$correo->AddAddress($email, $name);
// 	// Subject
// 	$correo->Subject = $_POST['name']." Has contacted us - Live With Us";
// 	// Email_Body
// 	$correo->MsgHTML("<h3>".$_POST['name']."</h3> <p><b>Phone:</b> ".$_POST['phone']."</p><p> <b>Check In:</b> ".$checkin."</p> <p><b>Check Out:</b> ".$checkout."</p> <p><b>Room Type:</b> ".$room_type."</p> <p><b>Package:</b> ".$package."</p> <p><b>Notes:</b> ".$notes."</p>");
// 	//Actions
// 	if(!$correo->Send()) {
// 	  echo "Oops. Something went wrong. Please try again later. " . $correo->ErrorInfo;
// 	} else {
// 	  //echo "Mensaje enviado con exito.";
// 		header('Location: ../thank-you/');
// 	}
// }
?>
