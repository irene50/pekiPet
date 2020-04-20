<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php
session_start();
include_once 'funciones.php';
include_once 'db.php';
$id=$_SESSION['id'];
    if (isset($_POST['quitar'])) {
		$nombre=$_POST['mascota'];
		if(deleteAnimal($db,$id,$nombre)){
			header('Refresh: 3; URL=./welcome.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Mascota borrada',
				content: 'Hemos borrado la información de tu mascota.'
			});
			</script><?php
		} else {
			header('Refresh: 3; URL=./welcome.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Error al borrar',
				content: 'No hemos podido dar de baja a tu mascota.'
			});
			</script><?php
		}
	} else {
		$alturas= array('pequeno','mediano','grande');
		$name=$_POST['nombre'];
		$animal=$_POST['especie'];
		$numero=$_POST['tamano'];
		$altura=$alturas[$numero];
		if (newAnimal($db,$name,$animal,$altura,$id)){
			header('Refresh: 3; URL=./welcome.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Mascota añadida',
				content: 'Se ha añadido tu mascota a la lista.'
			});
			</script><?php
		} else {
			header('Refresh: 3; URL=./welcome.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Error al añadir',
				content: 'Ha ocurrido un error al añadir tu mascota.'
			});
			</script><?php
		}
	}
?>