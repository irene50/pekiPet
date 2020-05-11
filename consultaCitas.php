<?php
include_once 'header.php';
include_once 'db.php';      
include_once 'funciones.php';
$id=$_SESSION['id'];
?>

<script src="includes/js/validaciones.js"></script>
<!--<div><h1 class="titulo" align="center">Regístrate</h1></div>
  Section: Contact v.1-->
<section class="section pb-5">

  <div class="row">

    <!--Grid column-->
    <div class=" col-lg-5 mb-4 formuEntra">

      <!--Form with header-->
      <form name="primero" action="" method = "post">
      <div class="card consultarTable  table-responsive" >

        <div class="card-body">
          <!--Header-->
          <div class="form-header blue accent-1 table">
            <h3 align="center"><i class="fa fa-paw"></i> Consultar citas: <i class="fa fa-paw"></i></h3>
            <?php mostrarCitas($db,$id);?>
          </div>
          <br>

          <!--Cargar de la bbdd una tabla con las citas desde hoy en adelante
          <div class="text-center mt-4">
          <button class="btn btn-light-blue" style="background-color: aquamarine;">-</button>
          </div>-->

        </div>

      </div>
      <!--Form with header-->
      </form>
    </div>
    <!--Grid column-->
  </div>
  </section>

<?php
include_once 'footer.php';
?>