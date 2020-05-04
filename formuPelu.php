<?php
include_once 'header.php';
include_once 'db.php';      
include_once 'funciones.php';
?>
<script src="includes/js/citaPelu.js"></script>
<?php
    if (isset($_SESSION['id'])) {
      if (!isset($_POST)||empty($_POST)){
        $id=$_SESSION['id'];
        $mascotas=getMascotas($db,$id);
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
            <label for="form-tfno">Teléfono </label>
            <input type="text" name="telefono" id="form-tfno" class="form-control" required value="<?php if ($_SESSION['telefono'] !== '0') echo($_SESSION['telefono']); ?>">
          </div>
          <!--Esto terminaria siendo un desplegable con las mascotas del cliente-->
          <div class="md-form">
            <label for="form-mascota">Mascota </label>
            <select name="mascota" id="form-mascota" class="form-control" required>
				<?php foreach ($mascotas as $mascota) : ?>
					<?php echo '<option>'. $mascota['nombre'] . '</option>'; ?>
				<?php endforEach; ?>
			</select>
          </div>
          <div class="md-form">
            <label for="form-tiempo">Selecciona el servicio </label>
            <select name="tiempo" id="form-tiempo" class="form-control">
                <option value="0">Selecciona una opción</option>
                <option value="1">Lavar y cortar</option>
                <option value="2">Baño</option>
            </select>
            <input type="hidden" name="tipo-servicio" id="tipo-servicio" value = ""/>
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
            <label for="form-fecha">Fecha cita </label>
            <input type="text" name="fecha" id="form-fecha" class="form-control" required>
          </div>
          <div class="md-form">
            <label for="form-hora">Hora entrada </label>
            <div class="row">
              <div class="col-6">
                <select name="hora" id="hora" class="form-control">
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                </select>
              </div>
              <div class="col-6">
                <select name="minutos" id="minutos" class="form-control">
                  <option value="00">00</option>
                  <option value="30">30</option>
                </select>
              </div>
            </div>
          </div>
          <div class="md-form">
            <label for="observaciones">Observaciones </label>
            <textarea type="text" name="observaciones" id="observaciones" class="form-control"></textarea>
          </div>
          <input type="hidden" name="descuento" id="descuento" class="form-control" value="<?php echo ($_SESSION['descuento']); ?>">
          <input type="hidden" name="anterior" id="anterior" class="form-control" value="0">
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
    }
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
            <div>No dudes en <a href="index.php#contacto">contactar</a> con nosotros, si estás interesado/a y te resolveremos todas las dudas</div><br>
        </div>
    </div>
</section>
<?php
}
?>
<?php
include_once 'footer.php';
?>

<!-- calendario -->
<script type="text/javascript">
    $(document).ready(function() { 
		  $( "#form-tiempo" ).on( "change", function(){
        var tipoServicio=$('#form-tiempo option:selected').html();
        $('#tipo-servicio').val(tipoServicio);
      }); 
  	}); 

			$(function() { 
				$("#form-fecha").datepicker({minDate: 1, beforeShowDay: $.datepicker.noWeekends});
			});
</script>
