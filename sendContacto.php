<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$email_user = "pekipetguarderiacanina@gmail.com";
$email_password = "Jilguero_8";
$the_subject =  $_POST["form-Subject"];
$address_to = $_POST["form-email"];
$from_name = $_POST["form-name"];

$emailCliente = new PHPMailer(true);
$emailPeki = new PHPMailer(true);

// ---------- datos de la cuenta de Gmail -------------------------------
$emailCliente->Username = $email_user;
$emailCliente->Password = $email_password; 
$emailPeki->Username = $email_user;
$emailPeki->Password = $email_password; 
//-----------------------------------------------------------------------
// $emailCliente->SMTPDebug = 1;
$emailCliente->SMTPSecure = 'ssl';
$emailCliente->Host = "smtp.gmail.com"; // GMail
$emailCliente->Port = 465;
$emailCliente->IsSMTP(); // use SMTP
$emailCliente->SMTPAuth = true;

$emailPeki->SMTPSecure = 'ssl';
$emailPeki->Host = "smtp.gmail.com"; // GMail
$emailPeki->Port = 465;
$emailPeki->IsSMTP(); // use SMTP
$emailPeki->SMTPAuth = true;

//correo para nosotros desde el cliente
$emailPeki->setFrom($address_to,$from_name);
$emailPeki->AddAddress($emailCliente->Username); // recipients email
$emailPeki->Subject = $the_subject;	

$mensaje="Mensaje del formulario de contacto de pekipet ";
$mensaje.= "<br>Nombre: ". $_POST['form-name'];
$mensaje.= "<br>Email: ".$_POST['form-email'];
$mensaje.= "<br>Mensaje: \n".$_POST['form-text'];

$emailPeki->Body = $mensaje;

$emailPeki->IsHTML(true);
$emailPeki->Send();

//correo de confirmacion para el cliente
$emailCliente->setFrom($emailCliente->Username,"PekiPet");
$emailCliente->AddAddress($address_to); // recipients email
$emailCliente->Subject = "Hemos recibido tus comentarios";


$emailCliente->Body = "<p>Hemos recibido tus comentarios. Responderemos en la mayor brevedad posible. <b>Gracias!</b></p>";
$emailCliente->IsHTML(true);
$emailCliente->Send();

header('location:index.php#contacto');


?>