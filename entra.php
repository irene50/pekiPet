<?php
include_once 'header.php';
?>
<!--<div><h1 class="titulo" align="center">Entra</h1></div>
  Section: Contact v.1-->
<section class="section pb-5">

  <div class="row">

    <!--Grid column-->
    <div class=" col-lg-5 mb-4 formuEntra">

      <!--Form with header-->
      <form name="primero" action="loguear.php" method = "post">
      <div class="card formu">

        <div class="card-body ">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3 align="center"><i class="fa fa-paw"></i> Log in: <i class="fa fa-paw"></i></h3>
          </div>
          <br>

          <!--Body-->
          <div class="md-form">
            <label for="form-user"><i class="fa fa-user prefix grey-text"></i> Usuario </label>
            <input type="text" name="user" id="form-user" class="form-control" required>
          </div>
          <div class="md-form">
            <label for="form-password"> <i class="fa fa-key prefix grey-text"></i> Contraseña </label>
            <input type="password" name="password" id="form-password" class="form-control" required>
          </div>
          <a href="./recordar.php">
            <div id="pekipet">Olvidaste tu usuario o contraseña?</div>
          </a>
          <div class="text-center mt-4">
            <button name="entra" class="btn btn-light-blue" style="background-color: aquamarine;">Entra</button>
          </div>
          <div class="text-center mt-4">
            <p>Aún no estás registrado? A que esperas?</p>
            <a href="./registrate.php"><button name="regis" class="btn btn-light-blue" style="background-color: red;">Regístrate</button></a>
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