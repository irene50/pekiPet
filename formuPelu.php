<?php
include_once 'header.php';
?>
<script src="includes/js/citaPelu.js"></script>
<?php
    if (isset($_SESSION['id'])) {
?>
<section class="section pb-5">

  <div class="row">

    <!--Grid column-->
    <div class=" col-lg-5 mb-4 formuEntra">

      <!--Form with header-->
      <form name="primero" action="citaPelu.php" method = "post">
      <div class="card formu">

        <div class="card-body ">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3 align="center"><i class="fa fa-paw"></i> Peluquería: <i class="fa fa-paw"></i></h3>
          </div>
          <br>

          <!--Body-->
          <div class="md-form">
            <label for="form-nombre">Nombre </label>
            <input type="text" name="nombre" id="form-nombre" class="form-control" required value="<?php echo($_SESSION['nombre']) ?>">
          </div>
          <div class="md-form">
            <label for="form-apellidos">Apellidos </label>
            <input type="text" name="apellidos" id="form-apellidos" class="form-control" required value="<?php echo($_SESSION['apellidos']) ?>">
          </div>
          <div class="md-form">
            <label for="form-tfno">Teléfono </label>
            <input type="text" name="telefono" id="form-tfno" class="form-control" required value="<?php if ($_SESSION['telefono'] !== '0') echo($_SESSION['telefono']); ?>">
          </div>
          <div class="md-form">
            <label for="form-email">Email </label>
            <input type="text" name="email" id="form-email" class="form-control" required value="<?php echo($_SESSION['email']) ?>">
          </div>
          <!--Esto terminaria siendo un desplegable con las mascotas del cliente-->
          <div class="md-form">
            <label for="form-mascota">Mascota </label>
            <input type="text" name="mascota" id="form-mascota" class="form-control" required>
          </div>
          <div class="md-form">
            <label for="form-tiempo">Selecciona el servicio </label>
            <select name="tiempo" id="form-tiempo" class="form-control">
                <option value="0">Selecciona una opción</option>
                <option value="1">Lavar y cortar</option>
                <option value="2">Baño</option>
            </select>
          </div>
          <div class="md-form">
            <label for="formtiempo2"></label>
            <select name="tiempo2" id="formtiempo2" class="form-control">
                <option value="0">-</option>
            </select>
          </div>
          <div class="md-form">
            <label for="formprecio">Precio estimado en euros</label>
            <input type="text" name="precio" id="formprecio" class="form-control" value="0">
          </div>
          <div class="md-form">
            <label for="form-fecha">Fecha </label>
            <input type="text" name="fecha" id="form-fecha" class="form-control" required>
          </div>
          <div class="text-center mt-4">
          <button class="btn btn-light-blue" id="cita" style="background-color: aquamarine;">Pedir cita</button>
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
    } else {
?>

<section>
<div><h1 class="titulo" align="center">Entra o regístrate</h1></div>
    <div id="cajaGuarde">
        <div id="guarde" style="background-color: rgba(183, 235, 23, 0.18);">
            <br>
            <div>Necesitas estar conectado para pedir cita online en nuestra peluquería canina. Si ya estas registrado en nuestra página <a href="entra.php">entra</a> y podrás pedir cita online.</div>
            <br>
            <div>Si no dispones de usuario aún, no dudes en registrarte para poder reservar citas online cuando tú quieras con total comodidad, <a href="registrate.php">regístrate!</a></div>
            <br>
            <h3>Otras formas de pedir cita:</h3>
            <br>
            <div>Si no deseas registrarte, siempre puedes pedirnos una cita por teléfono: <br><h4 align="center">91 567 4589</h4> </div>
            <br>
            <div>No dudes en <a href="prueba3.php#contacto">contactar</a> con nosotros, si estás interesado/a y te resolveremos todas las dudas</div><br>
        </div>
    </div>
</section>
<?php
}
?>
<?php
include_once 'footer.php';
?>