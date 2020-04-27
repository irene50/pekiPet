<?php 
function comprobar ($n,$ap1,$u,$p,$e,$ap2,$t, $nombre_mascota, $especie, $tamano, $db){
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
        
        $sql_mascota = "INSERT INTO animal (id, nombre, especie, tamano) VALUES ('$id', '$nombre_mascota', '$especie', '$tamano')";
		$resultado = mysqli_query($db, $sql_mascota);
        
		if($resultt&&$resulttt && $resultado){
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
function crearCita($db,$m,$servicio,$p,$fecha,$h,$min,$id){
	//No valido la mascota por que enteoria sale de la base de datos
	$tipo=array("cortar","limpiar","dia","horas");
	$sql="SELECT idAnimal from animal where id='$id' and nombre='$m'";
	$result=mysqli_query($db,$sql);
	$row=mysqli_fetch_assoc($result);
	$idAnimal=$row['idAnimal'];
	
	$r=mysqli_query($db,"SELECT numero from precios where precio=$p");
	$rrow=mysqli_fetch_assoc($r);
	$idPrecio=$rrow['numero'];
	//No compruebo result por que el nombre se saca de la base de datos, es decir, que va a estar si o si
	$arrayFecha=explode('/',$fecha);
	$nFecha=$arrayFecha[2]."-".$arrayFecha[1]."-".$arrayFecha[0]." ".$h.":".$min.":00";
	$fechaFinal=date("Y-m-d H:i:s",strtotime($nFecha));
	if ($servicio<=2){
		$f_f=null;
	}else {
		if ($servicio==3){
			if ($p>=200){
				$f_f=date("Y-m-d H:i:s",strtotime($fechaFinal."+ 1 month"));
			}else{
				$f_f=strtotime('+6 hour' ,strtotime($fechaFinal));
				$f_f=date( 'Y-m-d H:i:s', $f_f);
			}
		}else{
			if ($p==6){
				$f_f=strtotime('+1 hour' ,strtotime($fechaFinal));
				$f_f=date( 'Y-m-d H:i:s', $f_f);
			}else if ($p==8){
				$f_f=strtotime('+2 hour' ,strtotime($fechaFinal));
				$f_f=date( 'Y-m-d H:i:s', $f_f);
			}else if ($p==10){
				$f_f=strtotime('+3 hour' ,strtotime($fechaFinal));
				$f_f=date( 'Y-m-d H:i:s', $f_f);
			}else if ($p==12){
				$f_f=strtotime('+4 hour' ,strtotime($fechaFinal));
				$f_f=date( 'Y-m-d H:i:s', $f_f);
			}else {
				$f_f=strtotime('+5 hour' ,strtotime($fechaFinal));
				$f_f=date( 'Y-m-d H:i:s', $f_f);
			}
		}
	}
	$cita=$tipo[$servicio-1];
	//El campo tamano lo dejo por si en algun momento lo validamos mas a fondo
	//Ahora que tenemos toda la informacion vamos a hacer la cita;
	$sq="INSERT INTO cita (idAnimal,tipoServicio,fecha,fecha_fin,precio,idPrecio) VALUES ('$idAnimal','$cita','$fechaFinal','$f_f','$p',$idPrecio)";
	$resul=mysqli_query($db,$sq);
	print_r($sq);
	//Comprobar
	if ($resul){
		$comprobar=true;
	}else $comprobar=false;
	return $comprobar;
}
//Cambiar Password
function comprobarAntigua($db,$old,$id){
	$comprobar=false;
	$result=mysqli_query($db,"SELECT password from admin where id=$id");
	$row=mysqli_fetch_assoc($result);
	if ($row['password']==$old){
		$comprobar=true;
	}
	return $comprobar;
}
function newPassword($db,$new,$id){
	$comprobar=true;
	$resul=mysqli_query($db,"SELECT password from admin where id=$id");
	$row=mysqli_fetch_assoc($resul);
	if ($row["password"]!=$new){
		$reult=mysqli_query($db,"UPDATE admin set password='$new' where id=$id");
	}else $comprobar=false;
	return $comprobar;
}
//Agregar o quitar mascota 
function deleteAnimal($db,$id,$nombre){
	$result=mysqli_query($db,"DELETE from animal where id=$id and nombre='$nombre'");
	if ($result){
		$comprobar=true;
	}else $comprobar=false;
	return $comprobar;
}

function newAnimal($db,$name,$animal,$altura,$id){
	$result=mysqli_query($db,"SELECT count(idAnimal) from animal where nombre='$name' and especie='$animal' and tamano='$altura' and id=$id");
	$row=mysqli_fetch_assoc($result);
	if ($row["count(idAnimal)"]!=0){
		//Añadir alert
		echo "Este animal ya existe";
		$comprobar=false;
	}else{
		$resul=mysqli_query($db,"INSERT INTO animal (id,nombre,especie,tamano) VALUES ('$id','$name','$animal','$altura')");
		$comprobar=true;
	} 
	return $comprobar;
}
//Editar indormacion
function editInfo($db,$nombre,$apellidos,$email,$tlf,$id){
	$result=mysqli_query($db,"UPDATE cliente SET nombre='$nombre',apellidos='$apellidos',email='$email',telefono='$tlf' where id='$id'");
	if ($result){
		 $_SESSION['nombre'] = $nombre;
		 $_SESSION['apellidos'] = $apellidos;
		 $_SESSION['telefono'] = $tlf;
		 $_SESSION['email'] = $email;
		$comprobar=true;
	}else $comprobar=false;
	return $comprobar;
}
//Desplegable de mascotas
function getMascotas($db,$id){
	$animales=array();
	$result=mysqli_query($db,"SELECT nombre from animal where id=$id");
	if($result){
		while($row = mysqli_fetch_assoc($result)){
			$animales[]=$row;
		}
		return $animales;
	}
}
//Mostrar citas
function mostrarCitas($db,$id){
	$mascotas=array();
	$animal=array();
	$servicio=array('Jornada Completa Mensual','Media Jornada Mensual','Media jornada','Horas');
	$servicios=array();
	$fechai=array();
	$fechaf=array();
	$precio=array();
	$fecha=date("Y-m-d H:i:s");
	$sql="SELECT cita.idAnimal,tipoServicio,fecha,fecha_fin,precio from cita,animal where cita.idAnimal=animal.idAnimal and id=$id and fecha>'$fecha'";
	$result=mysqli_query($db,$sql);
	if ($result){
	while($row = mysqli_fetch_assoc($result)){
			$animal[]=$row['idAnimal'];//Cambiar por el nombre antes de mostrar
			$servicios[]=$row['tipoServicio'];
			$f=date("Y-m-d H:i:s",strtotime($row['fecha']));
			$fechai[]=$f;
			$ff=date("Y-m-d H:i:s",strtotime($row['fecha_fin']));
			$fechaf[]=$ff;
			$precio[]=$row['precio'];
	}
	foreach ($animal as $mascota){
		$resul=mysqli_query($db,"SELECT nombre from animal where idAnimal=$mascota");
		while($r = mysqli_fetch_assoc($resul)){
			$mascotas[]=$r['nombre'];	
		}
	}
	//hacer la tabla
	echo "Peluqueria";//Decorrar esto
	echo "
	<table border='1'>
	<tr><td>Nombre</td> <td>Servicio</td> <td>Fecha Inicio</td> <td>Precio</td></tr>";
	foreach($mascotas as $l => $valor){
		if ($servicios[$l]=='limpiar'){$se="Baño";}else if($servicios[$l]=='cortar'){$se="Lavar y cortar";}
		if ($fechai[$l]>$fechaf[$l]){
			echo "<tr><td>".$valor."</td> <td>".$se."</td> <td>".$fechai[$l]."</td> <td>".$precio[$l].	"</td></tr>";	
		}
	}
	echo "</table>";
	//-----------------------------------------------------------------------------
	echo "Guarderia";//Decorrar esto
	echo "
	<table border='1'>
	<tr><td>Nombre</td> <td>Servicio</td> <td>Fecha Inicio</td> <td>Fecha Fin</td> <td>Precio</td></tr>";
	//var_dump($mascotas);
	foreach($mascotas as $l => $valor){
		if ($precio[$l]>=200){if($precio[$l]==300){$i=0;}else $i=1;}else if($precio[$l]==16){$i=2;}else $i=3;
		if ($fechai[$l]<$fechaf[$l]){
			echo "<tr><td>".$valor."</td> <td>".$servicio[$i]."</td> <td>".$fechai[$l]."</td> <td>".$fechaf[$l]."</td> <td>".$precio[$l].	"</td></tr>";	
		}
	}
	echo "</table>";
	}else{echo "No tienes ninguna cita";}
}

function mandarMensaje($m,$db){
	$result = mysqli_query($db,"SELECT email from cliente WHERE email='$m'");
	if ($result){
		$sql = "SELECT password, usuario FROM admin, cliente WHERE cliente.email = '$m' and cliente.id = admin.id";
		$resultt=mysqli_query($db,$sql);
		$password = mysqli_fetch_assoc($resultt);
		/*$password=$row['password'];
		$usuario=$row['usuario'];*/
	}else $password=0;
	return $password;
}
?>
