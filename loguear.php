<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php 
if (isset($_POST['regis'])){header("Location:registrate.php");}
include_once 'db.php';
include_once 'funciones.php';
$u = mysqli_real_escape_string($db,$_POST['user']);
$p = mysqli_real_escape_string($db,$_POST['password']); 

if (loguear($u,$p,$db)){header('Location:welcome.php');}

?>