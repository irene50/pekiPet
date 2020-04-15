<?php
include_once 'header.php';
?>

<section class="section pb-5">

  <div class="row">

    <!--Grid column-->
    <div class=" col-lg-5 mb-4 formuEntra">

      <!--Form with header-->
      <form name="primero" action="./cambiarMascota.php" method = "post">
      <div class="card formu">

        <div class="card-body ">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3 align="center"><i class="fa fa-paw"></i> Mascotas: <i class="fa fa-paw"></i></h3>
          </div>
          <br>

          <!--Body-->
          <div class="md-form">
            <label for="form-nombre">Nombre </label>
            <input type="text" name="nombre" id="form-nombre" class="form-control">
          </div>
          <div class="md-form">
            <label for="form-especie">Especie </label>
            <input type="text" name="especie" id="form-especie" class="form-control">
          </div>
          <div class="md-form">
            <label for="form-tamano">Tamaño </label>
            <select name="tamano" id="form-tamano" class="form-control">
                <option value="0">Pequeño</option>
                <option value="1">Mediano</option>
                <option value="2">Grande</option>
            </select>
          </div>
          <div class="text-center mt-4">
         <input type="submit" name="agregar" class="btn btn-light-blue" style="background-color: aquamarine;" value="Agregar mascota"/>
          </div>
            <!--Aqui hay que cargar las mascotas de la BBDD-->
          <div class="md-form">
            <label for="form-mascota">Mascota </label>
            <input type="text" name="mascota" id="form-mascota" class="form-control">
          </div>
          <div class="text-center mt-4">
          <input type="submit" name="quitar" class="btn btn-light-blue" style="background-color: red;" value="Quitar mascota"/>
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