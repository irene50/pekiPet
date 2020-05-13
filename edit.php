<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php
session_start();
include_once 'funciones.php';
include_once 'db.php';
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$tlf = $_POST['telefono'];
$id = $_SESSION['id'];
if (editInfo($db, $nombre, $apellidos, $email, $tlf, $id)) {
  header('Refresh: 3; URL=./welcome.php');
?><script>
    $.confirm({
      boxWidth: '30%',
      useBootstrap: false,
      theme: 'dark',
      icon: 'fa fa-paw',
      title: 'Información cambiada',
      content: 'Informacion cambiada con exito'
    });
  </script><?php
          } else {
            header('Refresh: 3; URL=./editarPerfil.php');
            ?><script>
    $.confirm({
      boxWidth: '30%',
      useBootstrap: false,
      theme: 'dark',
      icon: 'fa fa-paw',
      title: 'Fallo al editar el perfil',
      content: 'No se ha podido cambiar la informacion'
    });
  </script><?php
          }

            ?>