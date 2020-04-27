<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php
session_start();
	include_once 'db.php';      
	include_once 'funciones.php';
	$m=$_POST['mascota'];
	$servicio=$_POST['tiempo'];
	$p=$_POST['precio'];
	$fecha=$_POST['fecha'];
	$h=$_POST['hora'];
	$min=$_POST['minutos'];
	$id=$_SESSION['id'];
	
	//Insertar alerta de que se ha pedido su cita y volver al 
	if ($servicio ==! 0) {
		$servicio+=2;
		if (crearCita($db,$m,$servicio,$p,$fecha,$h,$min,$id)) {
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