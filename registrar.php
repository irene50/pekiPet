<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php
	include_once 'db.php';      
	$n=$_POST['nombre'];
	$ap1=$_POST['apellido1'];
	$u=$_POST['usuario'];
	$p=$_POST['contrasena'];
	$e=$_POST['email'];
	if(isset($_POST['apellido2'])&&!(empty($_POST['apellido2']))){$ap2=$_POST['apellido2'];}else{$ap2=null;}
	if (isset($_POST['telefono'])&&!(empty($_POST['telefono']))){$t=$_POST['telefono'];}else{$t=0;}
	include_once 'funciones.php';
	comprobar($n,$ap1,$u,$p,$e,$ap2,$t,$db);
?>