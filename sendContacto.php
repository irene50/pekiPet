<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

$email_user = "pekipetguarderiacanina@gmail.com";
$email_password = "Jilguero_8";
$the_subject =  $_POST["form-Subject"];
$address_to = $_POST["email"];
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
//$emailCliente->SMTPDebug = 4; 
$emailCliente->IsSMTP(); // use SMTP
$emailCliente->SMTPAuth = true;

$emailPeki->SMTPSecure = 'ssl';
$emailPeki->Host = "smtp.gmail.com"; // GMail
$emailPeki->Port = 465;
//$emailPeki->SMTPDebug = 4; 
$emailPeki->IsSMTP(); // use SMTP
$emailPeki->SMTPAuth = true;

//correo para nosotros desde el cliente
$emailPeki->setFrom($address_to,$from_name);
$emailPeki->AddAddress($emailCliente->Username); // recipients email
$emailPeki->Subject = $the_subject;	

$mensaje="Mensaje del formulario de contacto de pekipet ";
$mensaje.= "<br>Nombre: ". $_POST['form-name'];
$mensaje.= "<br>Email: ".$_POST['email'];
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

header('Refresh: 3; URL=index.php#contacto');
?><script>$.confirm({
    boxWidth: '30%',
    useBootstrap: false,
    theme: 'dark',
    icon: 'fa fa-paw',
    title: 'Email enviado',
    content: 'Ha sido enviado su comentario a nuestro correo, le contestaremos en la mayor brevedad posible.'
});
</script><?php


?>
