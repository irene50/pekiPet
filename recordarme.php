<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php 
include_once 'db.php';
include_once 'funciones.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';
$email_user = "pekipetguarderiacanina@gmail.com";
$email_password = "Jilguero_8";
$address_to = $_POST["email"];
$m=$_POST['email'];
$password=mandarMensaje($m,$db);
/*echo $password['password']."usuario".$password['usuario'];*/
/*if (isset($_POST['enviar'])){
	if(!empty($_POST['email'])){
		$m=$_POST['email'];
		$password=mandarMensaje($m,$db);*/
		if ($password!=0){
			/*$asunto="Olvidaste la contraseña";
			$mensaje="La contraseña de tu cuenta es: ".$password;
			$header ="From: noreply@example.com" . "\r\n";
			$header.= "Reply-To: noreply@example.com" . "\r\n";
			$header.= "X-Mailer: PHP/". phpversion();
			$mail = mail($m,$asunto,$mensaje,$header);
			if ($mail){
				echo "se ha enviado correctamente";
			}else echo "error";*/

		
			/*$nombre=$_SESSION['user'];
			$nombreUsuario=$_SESSION['nombre'];
			$contraseniaUsuario=$_SESSION['pass']; */

			$emailCliente = new PHPMailer(true);

			// ---------- datos de la cuenta de Gmail -------------------------------
			$emailCliente->Username = $email_user;
			$emailCliente->Password = $email_password; 

			//-----------------------------------------------------------------------
			// $emailCliente->SMTPDebug = 1;
			$emailCliente->SMTPSecure = 'ssl';
			$emailCliente->Host = "smtp.gmail.com"; // GMail
			$emailCliente->SMTPDebug = 4; 
			$emailCliente->Port = 465;
			$emailCliente->IsSMTP(); // use SMTP
			$emailCliente->SMTPAuth = true;

			//correo de confirmacion para el cliente
			$emailCliente->setFrom($emailCliente->Username,"PekiPet");
			$emailCliente->AddAddress($address_to); // recipients email
			$emailCliente->Subject = "Recordatorio de datos de tu cuenta en PekiPet";


			$emailCliente->Body = "<p>Hola </p><p>Estos son tus datos de login:</p>
									<p>Usuario: ".$password['usuario']."</p>
									<p>Contraseña: ".$password['password']."</p><br><b>Gracias!</b>";
			$emailCliente->IsHTML(true);
			$emailCliente->Send();

			header('Refresh: 3; URL=./recordar.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Email enviado',
				content: 'Hemos mandado tus datos por correo. Revíselo por favor.'
			});
			</script><?php
		} else {
			header('Refresh: 3; URL=./recordar.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Email no encontrado',
				content: 'El email que has puesto no está registrado, por favor, inténtelo con otro.'
			});
			</script><?php
		}
	/*}*/
/*}*/

?>