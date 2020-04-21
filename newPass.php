<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php 
	session_start();
	include_once 'db.php';      
	include_once 'funciones.php';
	$old=$_POST['anterior'];
	$id=$_SESSION['id'];
	if (comprobarAntigua($db,$old,$id)){
		$new=$_POST['nueva'];
		$rep=$_POST['nueva2'];
		if ($new==$rep){
			if (newPassword($db,$new,$id)){
			//Añadir alert
			header('Refresh: 3; URL=./welcome.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Cita pedida!',
				content: 'Se ha cambiado la contraseña correctamente'
			});
			</script><?php
			}else {
			header('Refresh: 3; URL=./cambiarPass.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Cita pedida!',
				content: 'La contraseña es la misma que la anterior'
			});
			</script><?php
			}
		}else{
			header('Refresh: 3; URL=./cambiarPass.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Cita pedida!',
				content: 'No coinciden la nueva contraseña y la de comprobacion'
			});
			</script><?php
		}
	}else{
		header('Refresh: 3; URL=./cambiarPass.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Cita pedida!',
				content: 'La contraseña actual no es esa'
			});
			</script><?php
		}

?>