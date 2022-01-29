<?php

require 'conexion/conexion.php';
?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<link rel = 'stylesheet' href = 'estilos/estilosGenerales.css'>
<link rel = 'stylesheet' href = 'estilos/estilosHeader.css'>
<link rel = 'stylesheet' href = 'estilos/estilosFooter.css'>
<link rel = 'stylesheet' href = 'estilos/estilosPartituras.css'>
<title>Partituras</title>
</head>
<body>
<?php
include 'encabezado.php';
?>
<h1 >En Piano A Tempo también ofrecemos la mejor transcripción de obras.</h1>

<p class="textoPrincipal">El estudio de obras musicales y canciones son una motivación para cualquier estudiante, por lo que dejamos libre al público en general las siguientes partituras.</p>

<section class = 'seccionPdf'>
<?php

$resultado = mysqli_query( $conectar, 'SELECT * FROM documento' );

while( $row = mysqli_fetch_assoc( $resultado ) ) {
    echo
    "
  <div class='divContenedorPdf'>
  <div>
  <div>
  <img src='imagenes/foto.png'>
  </div>

  <div>

  <a href='$row[ruta]' target='_blank'>
  <h3 class='nombrePdf'>$row[nombre]</h3>
  </a>
  
  </div>
  </div>
  </div>
  ";
}
mysqli_free_result( $resultado );
mysqli_close( $conectar );
?>

</section>
<?php
include 'piePagina.php';
?>
</body>
</html>