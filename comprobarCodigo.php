<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<?php
    session_start();
	include_once 'db.php';      
	include_once 'funciones.php';
    $codigo = $_POST['codigo'];
    //$_SESSION['descuento'] = 0;
    if (strlen($codigo) == 14) {
        if ($_SESSION['descuento'] == 0) {
            $activo = (comprobarCodigo($db, $codigo));
            if ($activo == 1) {
                //echo(5);
                header('Refresh: 3; URL=./welcome.php');
			    ?><script>$.confirm({
                    boxWidth: '50%',
                    useBootstrap: false,
                    theme: 'dark',
                    icon: 'fa fa-paw',
                    title: 'Cupón canjeado!',
                    content: "Se ha canjeado con éxito el cupón del "+<?php echo $_SESSION['descuento']?>+" %."
                });
			    </script><?php
            } else if ($activo == 0) {
                //echo(4);
                header('Refresh: 3; URL=./welcome.php');
                ?><script>$.confirm({
                    boxWidth: '50%',
                    useBootstrap: false,
                    theme: 'dark',
                    icon: 'fa fa-paw',
                    title: 'Error cupón!',
                    content: 'El cupón ya ha sido canjeado anteriormente.'
                });
                </script><?php
            } else if ($activo == -1) {
                //echo(3);
                header('Refresh: 3; URL=./canjearCupon.php');
                ?><script>$.confirm({
                    boxWidth: '50%',
                    useBootstrap: false,
                    theme: 'dark',
                    icon: 'fa fa-paw',
                    title: 'Error cupón!',
                    content: 'El cupón introducido no existe, revise que lo haya introducido bien.'
                });
                </script><?php
            }
        } else {
            //echo(2);
            header('Refresh: 3; URL=./welcome.php');
			?><script>$.confirm({
				boxWidth: '50%',
				useBootstrap: false,
				theme: 'dark',
				icon: 'fa fa-paw',
				title: 'Error cupón!',
				content: "Ya tiene un descuento en uso del "+<?php echo $_SESSION['descuento']?>+" %."
			});
			</script><?php
        }
    } else {
        header('Refresh: 3; URL=./canjearCupon.php');
        //echo(1);
		?><script>$.confirm({
			boxWidth: '50%',
			useBootstrap: false,
			theme: 'dark',
			icon: 'fa fa-paw',
			title: 'Error cupón!',
			content: 'El formato del cupón no es correcto, revisa que estén puestos los guiones.'
		});
		</script><?php
    }
?>