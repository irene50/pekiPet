<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php
	include_once 'db.php';      
	include_once 'funciones.php';
	$m=$_POST['mascota'];
	$servicio=$_POST['tiempo'];
	$p=$_POST['precio'];
	crearCita($db,$m,$servicio,$p);
	//Añadir alert
	//header('Refresh: 3; URL=./prueba3.php');
	
?>