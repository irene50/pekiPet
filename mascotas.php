<?php
include_once 'header.php';
include_once 'db.php';      
include_once 'funciones.php';
	if (!isset($_POST)||empty($_POST)){
		$id=$_SESSION['id'];
		$mascotas=getMascotas($db,$id);
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
            <label for="form-nombre">Nombre de tu mascota</label>
            <input type="text" name="nombre" id="form-nombre" class="form-control" required>
          </div>
          <div class="md-form">
            <label for="form-especie">Especie (perro, gato, pájaro,...)</label>
            <input type="text" name="especie" id="form-especie" class="form-control" required>
          </div>
          <div class="md-form">
            <label for="form-tamano">Tamaño </label>
            <select name="tamano" id="form-tamano" class="form-control" required>
                <option value="0">Pequeño</option>
                <option value="1">Mediano</option>
                <option value="2">Grande</option>
            </select>
          </div>
          <div class="text-center mt-4">
         <input type="submit" name="agregar" class="btn btn-light-blue" style="background-color: aquamarine;" value="Agregar mascota"/>
          </div>
            <!--Aqui hay que cargar las mascotas de la BBDD-->
            </form>
            <form name="segundo" action="./cambiarMascota.php" method = "post">
          <div class="md-form">
            <label for="form-mascota">Nombre de tu mascota </label>
            <select name="mascota" id="form-mascota" class="form-control" required>
				<?php foreach ($mascotas as $mascota) : ?>
					<?php echo '<option>'. $mascota['nombre'] . '</option>'; ?>
				<?php endforEach; ?>
			</select>
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
  }
include_once 'footer.php';
?>
