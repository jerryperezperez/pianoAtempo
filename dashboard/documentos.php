<?php
include '../conexion/validacionSesion.php';
include '../conexion/conexion.php';
?>
<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<link rel = 'stylesheet' href = '../estilos/estilosGenerales.css'>
<link rel = 'stylesheet' href = '../estilos/estilosDocumentos.css'>
<link rel="stylesheet" href="../estilos/estilosDashboard.css">
<title>Documentos</title>
</head>
<body>
<h1>Documentos</h1>
<div class="divBotonRegresar">
<a href = 'inicioSesion.php' class="botonRegresar">Regresar</a>
</div>
<form action = '../conexion/registrarDocumento.php' method = 'post' enctype = 'multipart/form-data' class="formularioGenerico">
<h2>Formulario de inserción de documento</h2>
<input type = 'text' name = 'nombrePdf' placeholder="Nombre del documento" required>
<br>

<input type = 'file' name = 'pdf' placeholder="documento" required>
<br>
<input type = 'submit' value = 'Agregar'>
</form>

<br><br>

<table>
    

<?php

$resultado = mysqli_query( $conectar, 'SELECT * FROM documento' );

while( $row = mysqli_fetch_assoc( $resultado ) ) {
    $id = $row['id'];
    $ruta = $row['ruta'];
    echo"
              <tr>
                  <td >
                   <h3>$row[nombre]</h3>
                  </td>
                 
                  <td class='tdEliminar'>
                  <a href='javascript:eliminarDocumento($id, ".'"'."$ruta".'"'.")' >
                  <img src='../imagenes/eliminar.svg'>
                  </a>
                  </td>
              </tr>
    

          ";
}
mysqli_free_result( $resultado );
mysqli_close( $conectar );
?>

</table>

<script src="../scripts/eliminar.js"></script>
</body>
</html>