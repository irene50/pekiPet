<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php
session_start();
	include_once 'db.php';      
	include_once 'funciones.php';

	/*mail*/
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require './PHPMailer/src/Exception.php';
	require './PHPMailer/src/PHPMailer.php';
	require './PHPMailer/src/SMTP.php';

	$email_user = "pekipetguarderiacanina@gmail.com";
	$email_password = "Jilguero_8";
	$address_to = $_SESSION["email"];
	$from_name = $_SESSION["nombre"];
	/**/
	$tlf=$_POST['telefono'];
	$m=$_POST['mascota'];
	$servicio=$_POST['tipo-servicio'];
	$servicio2=$_POST['tiempo'];
	$p=$_POST['anterior'];
	$precio = $_POST['precio'];
	$fecha=$_POST['fecha'];
	$h=$_POST['hora'];
	$min=$_POST['minutos'];
	$ob=$_POST['observaciones'];
	$id=$_SESSION['id'];

	/*mail*/
	$emailCliente = new PHPMailer(true);
	$emailCliente -> CharSet = 'UTF-8';
	$emailPeki = new PHPMailer(true);
	$emailPeki -> CharSet = 'UTF-8';
	/**/

	// ---------- datos de la cuenta de Gmail -------------------------------
	$emailCliente->Username = $email_user;
	$emailCliente->Password = $email_password; 
	$emailPeki->Username = $email_user;
	$emailPeki->Password = $email_password; 
	//-----------------------------------------------------------------------

	/*host*/
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
	/**/

	//correo para nosotros desde el cliente
	$emailPeki->setFrom($address_to,$from_name);
	$emailPeki->AddAddress($emailCliente->Username); // recipients email
	/*$emailPeki->Subject = $the_subject;	*/
	$emailPeki->Subject = "Cita guarderia";

	$mensaje="Nueva cita guarderia ";
	$mensaje.= "<br>Nombre: ". $from_name;
	$mensaje.= "<br>Email: ".$_SESSION['email'];
	$mensaje.= "<br>Nombre mascota: ".$m;
	$mensaje.= "<br>Fecha: ".$fecha;
	$mensaje.= "<br>Hora: ".$h.":".$min;
	$mensaje.= "<br>Servicio: ".$servicio;
	$mensaje.= "<br>Precio estimado: ".$precio;

	$emailPeki->Body = $mensaje;

	//correo de confirmacion para el cliente
	$emailCliente->setFrom($emailCliente->Username,"PekiPet");
	$emailCliente->AddAddress($address_to); // recipients email
	$emailCliente->Subject = "Cita guardería";

	$emailCliente->Body = "<p>Nombre: $from_name</p>
						   <p>Nombre de tu mascota: $m</p>
						   <p>Fecha: $fecha</p>
						   <p>Hora: $h:$min</p>
						   <p>Servicio: $servicio</p>
						   <p>Precio estimado: $precio €</p>
						   <p>Para cualquier modificación o anulación de la cita, llámenos al telefono: xxxxxxxxx</p>
	 						<b>Gracias!</b>";
	

	
	//Insertar alerta de que se ha pedido su cita y volver al 
	if ($servicio2 ==! 0) {
		$servicio2+=2;
		if (crearCita($db,$m,$servicio2,$p,$fecha,$h,$min,$id,$precio,$tlf,$ob)) {
			header('Refresh: 3; URL=./welcome.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Cita pedida!',
				content: 'Tu cita ha sido reservada'
			});
			</script><?php
			$emailPeki->IsHTML(true);
			$emailPeki->Send();
			$emailCliente->IsHTML(true);
			$emailCliente->Send();
		} else {
			header('Refresh: 3; URL=./welcome.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Fallo al reservar',
				content: 'No hemos podido reservar la cita, inténtelo de nuevo más tarde'
			});
			</script><?php
		}
	} else {
		header('Refresh: 3; URL=./welcome.php');
		?><script>$.confirm({
			boxWidth: '30%',
			useBootstrap: false,
			theme: 'dark',
			icon: 'fa fa-paw',
			title: 'Fallo al reservar',
			content: 'No ha escogido ningun servicio'
		});
		</script><?php
	} 
?>
