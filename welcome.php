<?php
include_once 'header.php';
?>

<section>
        <!--boton editar-->
        <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:3.5px;margin-top:3.5px;">
                Editar perfil
            </button>
            <div class="dropdown-menu" style="background-color: firebrick;">
                <a class="dropdown-item" href="#">pon lo que quieras</a>
                <a class="dropdown-item" href="#">pon lo que quieras</a>
                <a class="dropdown-item" href="#">pon lo que quieras</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Cerrar sesión</a>
            </div>
        </div>
        <!-- -->
        <div id="welcome">
            <h2>Bienvenido <?php echo ($_SESSION['user']); ?> </h2>
            <br>
            <h6 align="center">¿Para que servicio quiere pedir la cita?</h6>
            <br>
            <div id="cajaCitas">
                <div id="citaPeluqueria">
                    <div class="imgWelcome"><img src="includes/imagenes/pelu2.jpg"></div>
                    <a href="./formuPelu.php"><div class="botonWelcome"><input type="button" value="cita peluquería" id="botonPelu" style="padding:7px;"></div></a>
                </div>
                <div id="citaGuarderia">
                    <div class="imgWelcome"><img src="includes/imagenes/guarderia2(1).jpg"></div>
                    <a href="./formuGuarde.php"><div class="botonWelcome"><input type="button" value="cita guardería" id="botonGuarderia" style="padding:7px;"></div></a>
                </div>
            </div>
        </div>
</section>






<?php
include_once 'footer.php';
?>