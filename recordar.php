<?php
include_once 'header.php';
?>

<section class="section pb-5">

  <div class="row">

    <!--Grid column-->
    <div class=" col-lg-5 mb-4 formuEntra">

      <!--Form with header-->
      <form name="primero" action="recordarme.php" method="POST">
        <div class="card formu">

          <div class="card-body ">
            <!--Header-->
            <div class="form-header blue accent-1">
              <h3 align="center"><i class="fa fa-paw"></i> Recuperación de datos: <i class="fa fa-paw"></i></h3>
            </div>
            <br>

            <!--Body-->
            <div class="md-form">
              <label for="form-user"><i class="fa fa-at prefix grey-text"></i> Email </label>
              <input type="text" name='email' id="form-user" class="form-control">
            </div>
              <div id="pekipet">Escribe tu correo electrónico para mandarte tus datos</div>
            <div class="text-center mt-4">
              <button type="submit" class="btn btn-light-blue" style="background-color: aquamarine;" name='enviar'>Enviar</button>
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