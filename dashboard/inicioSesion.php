
<?php
include "../conexion/validacionSesion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../estilos/estilosGenerales.css">
  <link rel="stylesheet" href="../estilos/estilosInicioSesion.css">
  <link rel="stylesheet" href="../estilos/estilosDashboard.css">
  <title>Inicio de sesión</title>
</head>
<body>


    <h1>¡BIENVENIDO!</h1>
    
 
  <div class="divBotonCerrarSesion">
  <a href="../conexion/salir.php" class="botonCerrarSesion">Cerrar Sesión</a>
  </div>
  <div class="seccionDivBoton">


<a href="suscriptores.php" class="enlaceBoton">Ver suscriptores</a>
 

<a href="documentos.php" class="enlaceBoton">Ver documentos</a>

<a href="nuevoAdministrador.php" class="enlaceBoton">Ver administradores</a>


  
</body>
</html>