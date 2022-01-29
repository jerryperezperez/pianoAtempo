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
<title>Suscriptores</title>
</head>
<body>
<h1>Suscriptores</h1>
<div class="divBotonRegresar">
<a href = 'inicioSesion.php' class="botonRegresar">Regresar</a>
</div>

<form action = '../conexion/enviarCorreo.php' method = 'post' enctype = 'multipart/form-data' class="formularioGenerico">
<h2>Formulario de envío de correo</h2>
<input type = 'text' name = 'asunto' placeholder = 'Asunto' required>
<br>
<input type = 'text' name = 'mensaje' placeholder = 'Mensaje' required>
<br>
<input type = 'file' name = 'archivo'>
<br>
<input type = 'submit' value = 'Mandar correo'>
</form>

<br><br>

<table>

<?php

$resultado = mysqli_query( $conectar, 'SELECT * FROM suscriptor' );

while ( $row = mysqli_fetch_assoc( $resultado ) ) {
    echo "
              <tr>
                  <td >
                   <h3>$row[nombre]</h3>
                  </td>
                  <td >
                  <h3>$row[email]</h3>
                 </td>
                 <td >
                 <h3>$row[edad]</h3>
                </td>
                <td >
                   <h3>$row[sexo]</h3>
                  </td>

                  <td class='tdEliminar'>
                  <a href='javascript:eliminarSuscriptor($row[id])'>
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