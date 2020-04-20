<?php 
session_start();
include_once 'funciones.php';
include_once 'db.php';
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$tlf=$_POST['telefono'];
$id=$_SESSION['id'];
if(editInfo($db,$nombre,$apellidos,$email,$tlf,$id)){
	header('Refresh: 3; URL=./welcome.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Cita pedida!',
				content: 'Informacion cambiada con exito'
			});
			</script><?php
}else{
	header('Refresh: 3; URL=./editarPerfil.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Cita pedida!',
				content: 'No se ha podido cambiar la informacion'
			});
			</script><?php
}

?>