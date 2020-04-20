<?php
session_start();
include_once 'funciones.php';
include_once 'db.php';
$id=$_SESSION['id'];
    if (isset($_POST['quitar'])) {
        $nombre=$_POST['mascota'];
		if(deleteAnimal($db,$id,$nombre)){
			//header();
		}else {//alert algo ha salido mal
			echo "F";}
    } else {
		$alturas= array('pequeno','mediano','grande');
		$name=$_POST['nombre'];
		$animal=$_POST['especie'];
		$numero=$_POST['tamano'];
		$altura=$alturas[$numero];
        if (newAnimal($db,$name,$animal,$altura,$id)){
			//header();
		}else {//alert algo ha salido mal
		echo "FF";}
    }
?>
