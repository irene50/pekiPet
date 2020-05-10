<?php
include_once 'header.php';
?>
<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
<link rel="stylesheet" href="includes/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<script src="includes/js/validaciones.js"></script>
<!--<div><h1 class="titulo" align="center">Regístrate</h1></div>
  Section: Contact v.1-->

<section class="section pb-5">

  <div class="row">

    <!--Grid column-->
    <div class=" col-lg-5 mb-4 formuEntra">

      <!--Form with header-->
      <form name="primero" action="registrar.php" method="post">
        <div class="card formu">

          <div class="card-body ">
            <!--Header-->
            <div class="form-header blue accent-1">
              <h3 align="center"><i class="fa fa-paw"></i> Registro: <i class="fa fa-paw"></i></h3>
            </div>
            <br>

            <!--Body-->
            <div class="md-form">
              <label for="form-nombre">Nombre</label>
              <input type="text" name="nombre" id="form-nombre" class="form-control" required placeholder="Campo obligatorio">
            </div>
            <div class="md-form">
              <label for="form-ape1">Primer apellido</label>
              <input type="text" name="apellido1" id="form-ape1" class="form-control" required placeholder="Campo obligatorio">
            </div>
            <div class="md-form">
              <label for="form-ape2">Segundo apellido (opcional)</label>
              <input type="text" name="apellido2" id="form-ape2" class="form-control" placeholder="">
            </div>
            <div class="md-form">
              <label for="form-usuario">Usuario</label>
              <input type="text" name="usuario" id="form-usuario" class="form-control" required placeholder="Campo obligatorio">
            </div>
            <div class="md-form">
              <label for="form-contrasena">Contraseña</label>
              <input type="password" name="contrasena" id="form-contrasena" class="form-control" required placeholder="Campo obligatorio">
            </div>
            <div class="md-form">
              <label for="form-contrasena2">Confirmar contraseña</label>
              <input type="password" name="contrasena2" id="form-contrasena2" class="form-control" required placeholder="Campo obligatorio">
            </div>
            <div class="md-form">
              <label for="form-email">Email</label>
              <input type="text" name="email" id="form-email" class="form-control" required placeholder="Campo obligatorio">
            </div>
            <div class="md-form">
              <label for="form-email2">Confirmar email</label>
              <input type="text" name="email2" id="form-email2" class="form-control" required placeholder="Campo obligatorio">
            </div>
            <div class="md-form">
              <label for="form-tfno">Teléfono (opcional)</label>
              <input type="text" name="telefono" id="form-tfno" class="form-control" placeholder="">
            </div>
            <div class="md-form">
              <label for="form-nombre_mascota">Nombre de tu mascota</label>
              <input type="text" name="nombre_mascota" id="form-nombre_mascota" class="form-control" required placeholder="Campo obligatorio">
            </div>
            <div class="md-form">
              <label for="form-especie">Especie (perro, gato, pájaro,...)</label>
              <select name="especie" id="form-especie" class="form-control" required>
                <option value="perro">Perro</option>
                <option value="gato">Gato</option>
                <option value="pajaro">Pájaro</option>
                <option value="conejo">Conejo</option>
                <option value="otros">Otros</option>
              </select>
            </div>
            <div class="md-form">
              <label for="form-tamano">Tamaño</label>
              <select name="tamano" id="form-tamano" class="form-control" required>
                <option value="pequeno">Pequeño</option>
                <option value="mediano">Mediano</option>
                <option value="grande">Grande</option>
              </select>
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