<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estilos/estilosGenerales.css">
  <link rel="stylesheet" href="estilos/estilosHeader.css">
  <link rel="stylesheet" href="estilos/estilosFooter.css">
  <link rel="stylesheet" href="estilos/estilosContactanos.css">
  <title>Contáctanos</title>
</head>
<body>
<?php
  include "encabezado.php";
  ?>
  <h1 >¡Ponte en contacto con nosotros!</h1>

  <p class="textoPrincipal">Puedes solicitar más información sobre las clases de piano, así como para la solicitud de transcripción de alguna obra musical que desees.</p>


  <form action="conexion/recibirCorreo.php" method="post" id="formularioContacto">
    <h2 class="tituloFormulario">Formulario de contacto</h2>
    <input type="text" name="nombre" placeholder="Nombre*" required>
    <br><br>
    <input type="email" name="email" placeholder="Correo electrónico*" required>
    <br><br>
    <input type="text" name="asunto" placeholder="Asunto*" required>
    <br><br>
    <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Pregunta o mensaje*" required></textarea>
    <br><br>
    <input type="submit" value="Enviar" id="botonEnviarForm">
  </form>


<?php
  include "piePagina.php";
  ?>
</body>
</html>