<?php

require "conexion/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos/estilosGenerales.css">
  <link rel="stylesheet" href="estilos/estilosHeader.css">
  <link rel="stylesheet" href="estilos/estilosFooter.css">
  <link rel="stylesheet" href="estilos/estilosIndex.css">
  <title>Inicio</title>
</head>
<body>
  <?php
include "encabezado.php";
?>

  <h1>Domina el piano con las mejores clases de Piano A Tempo</h1>

  <section class="seccionInicial">
<div>
<img src="imagenes/clasePiano.jpg" alt="">
</div>
<div>
<p>
      En Piano A Tempo tendrás la mejor formación musical impartida por profesores experimentados en la música.
    </p>
</div>

  </section >

  <section class="seccionInicial">
    <div>
    <p>Impartimos clases para cualquier nivel, tanto como a principiantes como a estudiantes con ganas de perfeccionar su técnica y conocimientos teóricos avanzados.</p>
    </div>
    <div>
    <img src="imagenes/clasePiano2.jpg" alt="">
    </div>
  </section>


  <section class="seccionSuscripcion">
    <h2>SUSCRÍBETE Y RECIBE LOS CONTENIDOS QUE SUBIMOS GRATIS PARA  TI AQUÍ</h2>
    <div id="divBotonSuscripcion">
    <a id="botonSuscripcion" >Suscribirme para recibir material</a>
    </div>
  </section>



  <div id="ventanaEmergente">
<div class="wrapper">
<div>
      <h3>Formulario de registro</h3>
    <span id="botonCerrar">&times;</span>
    </div>
    <div id="formulario">
<form action="conexion/registrarVisitante.php" method="POST">
      <input type="text" name="nombre" placeholder="Nombre" required>
      <br><br>
      <input type="email" name="email" placeholder="Correo electrónico" required>
      <br><br>
      <input type="number" name="edad" placeholder="Edad" required>
      <br><br>
      <input type="radio" value="Hombre" name="sexo" required><label for="">Hombre</label>
      <input type="radio" value="Mujer" name="sexo" required><label for="">Mujer</label>
      <input type="radio" value="ninguno" name="sexo" required ><label for="">No especificar</label>
      <br><br>
      <input type="submit" value="Recibir material">
    </form>
    </div> 
</div>
  </div>


 <section class="seccionTopicos">

      <h3>Encontrarás temas abordados con mucha exclusividad como:</h3>

  <div class="divSeccionTopicos">

    <div class="divTopico">
      <img src="imagenes/composicion.jpg" alt="">
      <h4>Composición</h4>
    </div>
    <div class="divTopico">
      <img src="imagenes/manos-piano-ocatava.jpeg" alt="">
      <h4>Teoría musical</h4>
    </div>
    <div class="divTopico">
      <img src="imagenes/teoriaPiano.png" alt="" class="fotoTopico">
      <h4>Técnica</h4>
    </div>
    <div class="divTopico">
      <img src="imagenes/improvisacion2.jpg" alt="">
      <h4>Improvisación</h4>
    </div>
  </div>
 </section>
 <div class="divEnlaceContactanos">
  <a href="contactanos.php">
  <h2>ANÍMATE A TOMAR CLASES DE PIANO EN PAINO A TEMPO Y MEJORA TUS HABILIDADES Y CONOCIMIENTOS MUSICALES</h2>
  </a>
 </div>


  <?php
include "piePagina.php";
?>
<script src="scripts/popup.js"></script>

</body>
</html>