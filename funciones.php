<?php 
session_start();
function comprobar ($n,$ap1,$u,$p,$e,$ap2,$t,$db){
	$array = array();
	
	//usuario
	$sql="SELECT usuario from admin where usuario='$u'";
	$result=mysqli_query($db,$sql);
	if ($result) {
		$row=mysqli_fetch_assoc($result);
		$array = $row['usuario'];
	}
	
	//email
	$sql="SELECT email from cliente where email='$e'";
	$result=mysqli_query($db,$sql);
	if ($result) {
		$row=mysqli_fetch_assoc($result);
		$array = $row['email'];
	}
	
	//telefono
	if ($t!=0){
		$sql="SELECT telefono from cliente where telefono='$t'";
		$result=mysqli_query($db,$sql);
		if ($result) {
			$row=mysqli_fetch_assoc($result);
			$array = $row['telefono'];
		}
		
	}
	if(empty($array)){
		//Cogemos el id
		$aps=$ap1." ".$ap2;
		//Agregamos el 1
		$sql="INSERT INTO cliente (nombre,apellidos,telefono,email) VALUES('$n','$aps','$t','$e')";
		$resultt=mysqli_query($db,$sql);
		//Cogemos el id 
		$result=mysqli_query($db,"SELECT max(id) from cliente");
		$row=mysqli_fetch_assoc($result);
		$id=$row['max(id)'];
		//Agregamos el 2
		$sqll="INSERT INTO admin(usuario,password,id) VALUES ('$u','$p','$id')";
		$resulttt=mysqli_query($db,$sqll);
		if($resultt&&$resulttt){
			header('Refresh: 3; URL=./entra.php');
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'light',
				icon: 'fa fa-paw',
				title: 'Usuario registrado!',
				content: 'Se ha creado con éxito tu registro.'
			});
			</script><?php
		}
	} else {
		header('Refresh: 3; URL=./registrate.php');
		?><script>$.confirm({
			boxWidth: '30%',
			useBootstrap: false,
			theme: 'dark',
			icon: 'fa fa-paw',
			title: 'Registro no válido!',
			content: 'Ese usuario, email o teléfono ya esta registrado'
		});
		</script><?php
	}
}
function loguear($u,$p,$db){
	session_start();
      $sql = "SELECT id FROM admin WHERE usuario = '$u' and password = '$p'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  $count = mysqli_num_rows($result);
	  if($count == 1) {
		$sql2 = "SELECT nombre, apellidos, telefono, email FROM cliente WHERE id = " . $row['id'];
	  	$result2 = mysqli_query($db,$sql2);
	  	$row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
	  }
      if($count == 1) {   
         $_SESSION['user'] = $u;
		 $_SESSION['id'] = $row['id'];
		 $_SESSION['pass'] = $p;
		 $_SESSION['nombre'] = $row2['nombre'];
		 $_SESSION['apellidos'] = $row2['apellidos'];
		 $_SESSION['telefono'] = $row2['telefono'];
		 $_SESSION['email'] = $row2['email'];
		 $x=true;
      }else {
		$x=false;
		header('Refresh: 3; URL=./entra.php');
		?><script>$.confirm({
			boxWidth: '30%',
			useBootstrap: false,
			theme: 'dark',
			icon: 'fa fa-paw',
			title: 'Login no válido!',
			content: 'Tu usuario o contraseña son incorrectos'
		});
		</script><?php
      }
	  return $x;  
}
function crearCita($db,$m,$servicio,$p){
	//No valido la mascota por que enteoria sale de la base de datos
	$tipo=array("cortar","limpiar","dias","horas");
	$idPropietario=$_SESSION['id'];
	$sql="SELECT idAnimal from animal where id='$idPropietario' and nombre='$m'";
	$result=mysqli_query($db,$sql);
	//No compruebo result por que el nombre se saca de la base de datos, es decir, que va a estar si o si
	$row=mysqli_fetch_assoc($result);
	$idAnimal=$row['idAnimal'];
	$fecha=date('Y-m-d H:i');
	if ($servicio ==! 0) {
		$cita=$tipo[$servicio-1];
		//El campo tamano lo dejo por si en algun momento lo validamos mas a fondo
		//Ahora que tenemos toda la informacion vamos a hacer la cita;
		$sq="INSERT INTO cita (idAnimal,tipo,fecha,precio) VALUES ('$idAnimal','$cita','$fecha','$p')";
		$resul=mysqli_query($db,$sq);
		//Insertar alerta de que se ha pedido su cita y volver al principio
		if ($resul == 1) {
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
}
?>