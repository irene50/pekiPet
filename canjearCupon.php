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
              <h3 align="center"><i class="fa fa-paw"></i> Canjear código: <i class="fa fa-paw"></i></h3>
            </div>
            <br>

            <!--Body-->
            <div class="md-form">
              <label for="form-codigo"> Código descuento</label>
              <input type="text" name='codigo' id="form-codigo" class="form-control">
            </div>
              <div id="pekipet"> <p><i class="fa fa-info-circle prefix grey-text"></i> Condiciones de uso:</p> 
              <p>Si el código introducido es válido, te mostraremos un mensaje de que se ha canjeado el código con éxito.</p>
              <p>En ese caso tendrás un descuento del 25% o 50% (dependiendo del cupón canjeado) en tu próxima reserva en nuestra guardería o peluquería. </p>
              </div>
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