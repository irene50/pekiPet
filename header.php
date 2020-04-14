<?php session_start() ?>
<html>
<head>
    <title>Peki-Pet, guardería canina</title>
    <meta charset="utf-8">
    <!--libreria jquery-->
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <!--libreria js-->
    <script src="includes/js/verTarifas.js"></script>
    <!--reponsive bootstrap-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <!--Bootstrap librerias-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">    <script src="includes/js/jquery/jquery-3.4.1.min.js"></script> 
    <!-- librerias para JQUERY-UI -->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="includes/js/jquery/jquery.ui.datepicker-es.js"></script>
    <!--font awesome-->
    <link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
    <!---Alert-->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!--hojas estilos-->
    <link rel="stylesheet" href="includes/css/cards.css">
    <link rel="stylesheet" href="includes/css/carrousel.css">
    <link rel="stylesheet" href="includes/css/formulario_mapa.css">
    <link rel="stylesheet" href="includes/css/estilosWelcome.css">
    <link rel="stylesheet" href="includes/css/estilos_generales.css">
    <link rel="stylesheet" href="includes/css/estilosMasInfo.css">
    
    <!--carrousel libreria-->
    <script type="text/javascript" src="includes/js/jquery/jquery.flexslider.js"></script>
    <!---Estilo tarifas-->
    <style type= "text/css">
        .oculto {
        display:none;
    }
    </style>
</head>
<body>
<header>
    <img id="logo" src="includes/imagenes/logoProyecto8v2.png" alt="peki-pet"  >
</header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
      <div id="pekipet"><i class="fa fa-home fa-2x" aria-hidden="true"></i> PEKI-PET</div>
    </a>
    <a href="#" class="navbar-brand"></a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav central">
            <div class="nav-item dropdown">
                <a href="index.php#servicios" class="nav-link dropdown-toggle active " data-toggle="dropdown"><i class="fa fa-heart-o" aria-hidden="true"></i> Servicios</a>
                <div class="dropdown-menu bg-dark">
                    <a href="index.php#servicios" class="dropdown-item"><i class="fa fa-paw" aria-hidden="true"></i> Guardería canina</a>
                    <a href="index.php#servicios" class="dropdown-item"><i class="fa fa-shower" aria-hidden="true"></i> Peluquería canina</a>
                </div>
            </div>
            <a href="index.php#tarifas" class="nav-item nav-link active"><i class="fa fa-eur" aria-hidden="true"></i> Tarifas</a>
            <a href="index.php#contacto" class="nav-item nav-link active"><i class="fa fa-envelope-open-o" aria-hidden="true"></i> Contacto</a>
        </div>
        <div class="navbar-nav registro" id="registro">
            <div>
              <a class="btn btn-primary btn-icon mr-1" href="./entra.php" class="nav-item nav-link active"><i class="fa fa-sign-in" aria-hidden="true"></i> Entra</a>
            </div>
            <div>
              <a class="btn btn-success btn-icon" href="./registrate.php" class="nav-item nav-link active"><i class="fa fa-edit" aria-hidden="true"></i> Regístrate</a>
            </div>
        </div>
        <!-- Header con sesion -->
        <div class="navbar-nav zonacliente oculto" id="zonacliente">
        <a href="./welcome.php" class="nav-item nav-link active"><i class="fa fa-hand-paper-o" aria-hidden="true"></i> Hola, <?php echo ($_SESSION['user']); ?></a>
        <div></div>
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:3.5px;margin-top:3.5px;">
                Área cliente
            </button>
            <div class="dropdown-menu dropdown-menu-right" style="background-color: firebrick;">
                <a class="dropdown-item" href="./editarPerfil.php">Editar datos</a>
                <a class="dropdown-item" href="./cambiarPass.php">Cambiar contraseña</a>
                <a class="dropdown-item" href="./mascotas.php">Agregar/quitar mascota</a>
                <a class="dropdown-item" href="./welcome.php">Pedir cita</a>
                <a class="dropdown-item" href="./consultaCitas.php">Consultar citas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./cerrarsesion.php">Cerrar sesión</a>
            </div>
        <!--</div>
            <div>
              <a class="btn btn-light btn-icon mr-1" href="./welcome.php" class="nav-item nav-link active"  id="perfil"><i class="fa fa-user" aria-hidden="true"></i> Perfil</a>
            </div>
            <div>
              <a class="btn btn-danger btn-icon" href="./cerrarsesion.php" class="nav-item nav-link active" id="cerrar"><i class="fa fa-power-off" aria-hidden="true" ></i> Cerrar sesión</a>
            </div>
        </div>-->
        
    </div>
</nav>

<?php
    $haysesion = isset($_SESSION['id']);
?>
<script type="text/javascript">
if (<?php echo json_encode($haysesion); ?>){
    $('#registro').addClass("oculto");
    $("#zonacliente").removeClass("oculto");
} 
else{
    $("#zonacliente").addClass("oculto");
    $("#registro").removeClass("oculto");
}
</script>