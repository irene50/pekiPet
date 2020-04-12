<?php
include_once 'header.php';
?>

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
</div>
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
  <div class="col-md-4 precios">
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
            <input type="text" id="form-name" class="form-control">
            
          </div>

          <div class="md-form">
            <label for="form-email"><i class="fa fa-envelope prefix grey-text"></i> Tu email</label>
            <input type="text" id="form-email" class="form-control">
            
          </div>

          <div class="md-form">
            <label for="form-Subject"><i class="fa fa-tag prefix grey-text"></i> Asunto</label>
            <input type="text" id="form-Subject" class="form-control">
            
          </div>

          <div class="md-form">
            <label for="form-text"><i class="fa fa-pencil prefix grey-text"></i> Comentario</label>
            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
            
          </div>

          <div class="text-center mt-4">
            <button class="btn btn-light-blue" style="background-color: cadetblue;">Enviar</button>
          </div>

        </div>

      </div>
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
          <p>Lunes - Viernes, 8:00-22:00</p>
        </div>

        <div class="col-md-4 contactIcon">
          <a class="btn-floating blue accent-1"><img src="includes/imagenes/email.png" height="38pt" width="38pt"></a>
          <p>pekipetguarderiacanina@gmail.com</p>
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