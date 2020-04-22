<?php
include_once 'header.php';
?>
<script src="includes/js/validaciones.js"></script>
<!--<div><h1 class="titulo" align="center">Regístrate</h1></div>
  Section: Contact v.1-->
<section class="section pb-5">

  <div class="row">

    <!--Grid column-->
    <div class=" col-lg-5 mb-4 formuEntra">

      <!--Form with header-->
      <form name="primero" action="registrar.php" method = "post">
      <div class="card formu">

        <div class="card-body ">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3 align="center"><i class="fa fa-paw"></i> Registro: <i class="fa fa-paw"></i></h3>
          </div>
          <br>

          <!--Body-->
          <div class="md-form">
            <label for="form-nombre">Nombre *</label>
            <input type="text" name="nombre" id="form-nombre" class="form-control" required placeholder="Campo obligatorio">
          </div>
          <div class="md-form">
            <label for="form-ape1">Primer apellido *</label>
            <input type="text" name="apellido1" id="form-ape1" class="form-control" required placeholder="Campo obligatorio">
          </div>
          <div class="md-form">
            <label for="form-ape2">Segundo apellido </label>
            <input type="text" name="apellido2" id="form-ape2" class="form-control" placeholder="">
          </div>
          <div class="md-form">
            <label for="form-usuario">Usuario *</label>
            <input type="text" name="usuario" id="form-usuario" class="form-control" required placeholder="Campo obligatorio">
          </div>
          <div class="md-form">
            <label for="form-contrasena">Contraseña *</label>
            <input type="password" name="contrasena" id="form-contrasena" class="form-control" required placeholder="Campo obligatorio">
          </div>
          <div class="md-form">
            <label for="form-email">Email *</label>
            <input type="text" name="email" id="form-email" class="form-control" required placeholder="Campo obligatorio">
          </div>
          <div class="md-form">
            <label for="form-tfno">Teléfono </label>
            <input type="text" name="telefono" id="form-tfno" class="form-control" placeholder="">
          </div>
          <div class="md-form">
              <br>
            <p align="center">* Los campos con un asterisco son obligatorios</p>
          </div>
          <div class="text-center mt-4">
          <button class="btn btn-light-blue" style="background-color: aquamarine;">Regístrate</button>
          </div>

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