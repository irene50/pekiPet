<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$email_user = "pekipetguarderiacanina@gmail.com";
$email_password = "Jilguero_8";
$new_contrasenia =  $_POST["nueva2"];
$address_to = $_POST["correoCliente"];

$emailCliente = new PHPMailer(true);

// ---------- datos de la cuenta de Gmail -------------------------------
$emailCliente->Username = $email_user;
$emailCliente->Password = $email_password; 

//-----------------------------------------------------------------------
// $emailCliente->SMTPDebug = 1;
$emailCliente->SMTPSecure = 'ssl';
$emailCliente->Host = "smtp.gmail.com"; // GMail
$emailCliente->Port = 465;
$emailCliente->IsSMTP(); // use SMTP
$emailCliente->SMTPAuth = true;

//correo de confirmacion para el cliente
$emailCliente->setFrom($emailCliente->Username,"PekiPet");
$emailCliente->AddAddress($address_to); // recipients email
$emailCliente->Subject = "Tu nueva contraseña de PekiPet";


$emailCliente->Body = "<p>Tu nueva contraseña de PekiPet es: $new_contrasenia</p><br><b>Gracias!</b>";
$emailCliente->IsHTML(true);
$emailCliente->Send();


header('location:cambiarPass.php');

?>


