<?php 
function comprobar ($n,$ap1,$u,$p,$e,$ap2,$t,$db){
	//$error=false;
	$array = array();
	
	//usuario
	$sql="SELECT usuario from admin where usuario='$u'";
	$result=mysqli_query($db,$sql);
	if ($result) {
		$row=mysqli_fetch_assoc($result);
		$array = $row['usuario'];
		/*if ((count($row['usuario']))>=1){
			$error=true;
		}*/
	}
	
	//email
	$sql="SELECT email from cliente where email='$e'";
	$result=mysqli_query($db,$sql);
	if ($result) {
		$row=mysqli_fetch_assoc($result);
		$array = $row['email'];
		/*if ((count($row['email']))>=1){
			$error=true;
		}*/
	}
	
	//telefono
	if ($t!=0){
		$sql="SELECT telefono from cliente where telefono='$t'";
		$result=mysqli_query($db,$sql);
		if ($result) {
			$row=mysqli_fetch_assoc($result);
			$array = $row['telefono'];
			/*if ((count($row['telefono']))>=1){
				$error=true;
			}*/
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
			//$pag = "entra.php";
			/*echo "<script>
				alert('Se ha creado con exito su perfil'); 
				window.location='entra.php';
			</script>";*/
			
			header('Refresh: 3; URL=./entra.php');
			//echo "<script>alert('Se ha creado con exito su perfil');</script>";
			?><script>$.confirm({
				boxWidth: '30%',
				useBootstrap: false,
				theme: 'light',
				icon: 'fa fa-paw',
				title: 'Usuario registrado!',
				content: 'Se ha creado con éxito tu registro.'
			});
			</script><?php
			/*echo '<script language="JavaScript">
			alert("Se ha creado con exito su perfil");
			function redireccionar() {
				setTimeout("location.href='.$pag.'", 5000);
			}</script>';*/
			//header('Location: entra.php');
		}
	} else {
		//$pag = "registrate.php";
		/*echo "<script>
			alert('Ese usuario, email o telefono ya esta registrado'); 
			window.location='registrate.php';
		</script>";*/
		
		header('Refresh: 3; URL=./registrate.php');
		//echo "<script>alert('Ese usuario, email o telefono ya esta registrado');</script>";
		?><script>$.confirm({
			boxWidth: '30%',
			useBootstrap: false,
			theme: 'dark',
			icon: 'fa fa-paw',
			title: 'Registro no válido!',
			content: 'Ese usuario, email o teléfono ya esta registrado'
		});
		</script><?php
		/*echo '<script language="JavaScript">alert("Ese usuario, email o telefono ya esta registrado");function redireccionar(){setTimeout("location.href='.$pag.'", 5000);}</script>';*/
		//header('Location: registrate.php');
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
		//echo "<p color='red'>Your Login Name or Password is invalid<p>";
		header('Refresh: 3; URL=./entra.php');
		//echo "<script>alert('Login no válido','Tu usuario o contraseña son incorrectos','Volver');</script>";
		?><script>$.confirm({
			boxWidth: '30%',
			useBootstrap: false,
			theme: 'dark',
			icon: 'fa fa-paw',
			title: 'Login no válido!',
			content: 'Tu usuario o contraseña son incorrectos'
		});
		</script><?php
		/*echo "<script>$.confirm({
			icon: 'fa fa-spinner fa-spin',
			title: 'Working!',
			content: 'Sit back, we are processing your request!'
		});
		</script>";*/
      }
	  return $x;
	  
}
?>