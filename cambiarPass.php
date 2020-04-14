<?php
include_once 'header.php';
?>
<script src="includes/js/nuevaContrasena.js"></script>
<section class="section pb-5">

  <div class="row">

    <!--Grid column-->
    <div class=" col-lg-5 mb-4 formuEntra">

      <!--Form with header-->
      <form name="primero" action="" method = "post">
      <div class="card formu">

        <div class="card-body ">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3 align="center"><i class="fa fa-paw"></i> Cambiar contraseña: <i class="fa fa-paw"></i></h3>
          </div>
          <br>

          <!--Body-->
          <div class="md-form">
            <label for="form-anterior">Actual contraseña </label>
            <input type="password" name="anterior" id="form-anterior" class="form-control" required>
          </div>
          <div class="md-form">
            <label for="form-nueva">Nueva contraseña </label>
            <input type="password" name="nueva" id="form-nueva" class="form-control" required>
          </div>
          <div class="md-form">
            <label for="form-nueva2">Repita la contraseña </label>
            <input type="password" name="nueva2" id="form-nueva2" class="form-control" required>
          </div>
          <div class="text-center mt-4">
            <button name="cambiar" class="btn btn-light-blue" style="background-color: aquamarine;">Cambiar contraseña</button>
          </div>
        </div>

      </div>
      </form>
      <!--Form with header-->

    </div>
    <!--Grid column-->
  </div>
  </section>
<?php
include_once 'footer.php';
?>