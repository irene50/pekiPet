<?php
include_once 'header.php';
?>
<div class="wrapper">

<ul id="sb-slider" class="sb-slider">
  <li>
    <a href="indexInfoGuarde.php" target="_blank"><img src="includes/imagenes/guarderia1.jpg" alt="image1"/></a>
    <div class="sb-description">
      <h3>Cuidamos a tus animales</h3>
    </div>
  </li>
  <li>
    <a href="indexInfoGuarde.php" target="_blank"><img src="includes/imagenes/2.jpg" alt="image2"/></a>
    <div class="sb-description">
      <h3>Estarán encantados!</h3>
    </div>
  </li>
  <li>
    <a href="indexInfoGuarde.php" target="_blank"><img src="includes/imagenes/3.jpg" alt="image3"/></a>
    <div class="sb-description">
      <h3>En Peki-Pet estarán en buenas manos</h3>
    </div>
  </li>
  <li>
    <a href="indexInfoGuarde.php" target="_blank"><img src="includes/imagenes/4.jpg" alt="image4"/></a>
    <div class="sb-description">
      <h3>Lucirán fabulosos!</h3>
    </div>
  </li>
</ul>

<div id="sombra" class="sombra"></div>

<div id="nav-arrows" class="nav-arrows">
  <a href="#">Next</a>
  <a href="#">Previous</a>
</div>
<!-- Opcion 1 -->
<div id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
					<span></span>
        </div>
<!-- Opcion 2 -->
<div id="nav-options" class="nav-options">
  <span id="navPlay">Play</span>
  <span id="navPause">Pause</span>
</div>
</div><!-- /wrapper -->
<!-- Flexslider viejo 
<div class="flexslider" id="slider">
  <ul class="slides">
    <li>
      <img src="includes/imagenes/guarderia2.jpeg" alt="">
      <section class="flex-caption">
        
      </section>
    </li>
    <li>
      <img src="includes/imagenes/pelu1_710x442.jpg" alt="">
      <section class="flex-caption">
        
      </section>
    </li>
    <li>
      <img src="includes/imagenes/guarderia1.jpg" alt="">
      <section class="flex-caption">
       
      </section>
    </li>
    <li>
      <img src="includes/imagenes/pelu2.jpg" alt="">
      <section class="flex-caption">
      
      </section>
    </li>
  </ul>
</div>-->
<div><h1 class="titulo" id="servicios" align="center">Servicios</h1></div>
<div class="card-deck">
  <div class="card">
    
    <div class="card-body guarde">
      <h4 class="card-title" align="center">Guardería canina</h4>
      <p class="card-text">Nuestra guardería canina no te dejará indiferente. Los peludos se lo pasan genial, realizando juegos interactivos, ejercitando la mente y cuerpo.
        Damos largos paseos por el parque, disfrutan de otros compañeros perrunos y sobretodo reciben mucho mucho amor para que no echen de menos a sus papis... <a id="masInfo" href="indexInfoGuarde.php"><i class="fa fa-info" aria-hidden="true"></i>  Más información</a></a></p>
    </div>
    <div class="card-footer">
      <small class="pie reserva"><a href="formuGuarde.php">Reserva online</a></small>
    </div>
  </div>
  <div class="card">
    
    <div class="card-body pelu">
      <h4 class="card-title" align="center">Peluquería canina</h4>
      <p class="card-text">No dejes de poner guapo a tu peludito con nosotros. ¡Te aseguramos que será la/el más coqueto del barrio!</p>
    </div>
    <div class="card-footer">
      <small class="pie cita"><a href="formuPelu.php">Cita online</a></small>
    </div>
  </div>
 
  </div>
</div>
<div><h1 class="titulo" id="tarifas" align="center">Tarifas</h1></div>
<!--TARIFAS-->
<div class="textoT" align="center"><span class="textoTarifa" >¡Nuestras tarifas son inmejorables! Consúltalas y cualquier duda o sugerencia, contáctanos</span></div>
<div class="botonT" align="center"><input type="button" id="botonTarifa" value="Consultar tarifas" ></div>
<div id="bloqueTarifas" class="container tarifas oculto" style="margin-top:30px;">
  <div class="col-md-6 precios">
    <h3 align="center">Tarifas guardería</h3>
    <div class="back">
      <div class="row">
        <div class="col-md-7">
          <h4 align="center" style="color:#ffce59">Por dia</h4>
          <ul>
            <li>Jornada Completa Mensual<span>300 €</span></li>
            <li>Media Jornada Mensual<span>200 €</span></li>
            <li>Media Jornada<span>16 €</span></li>
          </ul>
        </div>
        <div class="col-md-5">
          <h4 align="center" style="color:#ffce59">Por horas</h4>
          <ul>
            <li>1 hora<span>6 €</span></li>
            <li>2 horas<span>8 €</span></li>
            <li>3 horas<span>10 €</span></li>
            <li>4 horas<span>12 €</span></li>
            <li>5 horas<span>14 €</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-5 precios">
    <h3 align="center">Tarifas peluquería</h3>
    <div class="back">
      <div class="row">
        <div class="col-md-5">
          <h4 align="center" style="color:#ffce59">Lavar y cortar</h4>
          <ul>
            <li>Perro pequeño<span>30 €</span></li>
            <li>Perro mediano<span>35 €</span></li>
            <li>Perro grande<span>40 €</span></li>
          </ul>
        </div>
        <div class="col-md-7">
          <h4 align="center" style="color:#ffce59">Baño</h4>
          <!--<div>Incluye limpieza ótica, revisión de glándulas anales y uñas.</div>-->
          <ul>
            <li>Perro pequeño<span>15 €</span></li>
            <li>Perro mediano<span>20 €</span></li>
            <li>Perro grande<span>30 €</span></li>
            <li>Perro gigante (+50kg)<span>40 €</span></li>
          </ul>
        </div>
      </div>
      <div><h6> * Precios orientativos a especificar por la peluquera</h6></div>
    </div>
  </div>
</div>

<!--<div class="container tarifas pel">
  <div class="col-md-6 precios">
    <h3 align="center">Tarifas peluquería</h3>
    <div class="back">
      <div class="row">
        <div class="col-md-8">
          <h4 align="center" style="color:#ffce59">Por dia</h4>
          <ul>
            <li>Jornada Completa Mensual<span>300e</span></li>
            <li>Media Jornada Mensual<span>200e</span></li>
            <li>Media Jornada<span>16e</span></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h4 align="center" style="color:#ffce59">Por horas</h4>
          <ul>
            <li>1 hora<span>6e</span></li>
            <li>2 horas<span>8e</span></li>
            <li>3 horas<span>10e</span></li>
            <li>4 horas<span>12e</span></li>
            <li>5 horas<span>14e</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>-->
<!--TARIFAS-->
<div><h1 class="titulo" id="contacto" align="center">Contacto</h1></div>
  <!--Section: Contact v.1-->
<section class="section pb-5">

  <div class="row">

    <!--Grid column-->
    <div class="col-lg-5 mb-4">

      <!--Form with header-->
    <form action="sendContacto.php" method="POST" name="contacto" id ="contacto">
      <div class="card formu">

        <div class="card-body ">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3><i class="fa fa-envelope-o"></i> Escríbenos:</h3>
          </div>

          <p>Te contestaremos con la mayor brevedad posible.</p>
          <br>

          <!--Body-->
          <div class="md-form">
            <label for="form-name"><i class="fa fa-user prefix grey-text"></i> Tu nombre</label>
            <input type="text" id="form-name" name="form-name" class="form-control">
            
          </div>

          <div class="md-form">
            <label for="form-email"><i class="fa fa-envelope prefix grey-text"></i> Tu email</label>
            <input type="email" id="form-email" name="form-email" required class="form-control">
            
          </div>

          <div class="md-form">
            <label for="form-Subject"><i class="fa fa-tag prefix grey-text"></i> Asunto</label>
            <input type="text" id="form-Subject" name="form-Subject" class="form-control">
            
          </div>

          <div class="md-form">
            <label for="form-text"><i class="fa fa-pencil prefix grey-text"></i> Comentario</label>
            <textarea id="form-text" name="form-text" class="form-control md-textarea" rows="3"></textarea>
            
          </div>

          <div class="text-center mt-4">
            <input type="submit" class="btn btn-light-blue" style="background-color: cadetblue;">
          </div>

        </div>

      </div>
    </form>
      <!--Form with header-->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" >
        <iframe src="https://maps.google.com/maps?q=madrid&t=&z=13&ie=UTF8&iwloc=&output=embed"
          frameborder="0" style="border:0; height: 90%;" allowfullscreen></iframe>
      </div>

      
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4 contactIcon">
          <a class="btn-floating blue accent-1"><img src="includes/imagenes/location.png" height="38pt" width="38pt"></a>
          <p>Madrid, CP 28047</p>
          <p>España</p>
        </div>

        <div class="col-md-4 contactIcon">
          <a class="btn-floating blue accent-1"><img src="includes/imagenes/phone.png" height="38pt" width="38pt"></i></a>
          <p>+ 34 91 567 4589</p>
          <p>Lunes - Viernes, 8:00-20:00</p>
        </div>

        <div class="col-md-4 contactIcon">
          <a class="btn-floating blue accent-1"><img src="includes/imagenes/email.png" height="38pt" width="38pt"></a>
          <p><a href="mailto:pekipetguarderiacanina@gmail.com" style="color:black;">pekipetguarderiacanina@gmail.com</a></p>
        </div>
      </div>

    </div>
    <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.1-->

<?php
include_once 'footer.php';
?>