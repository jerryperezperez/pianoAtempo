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
<title>Administradores</title>
</head>
<body>
<h1>Administradores</h1>
<div class="divBotonRegresar">
<a href = 'inicioSesion.php' class="botonRegresar">Regresar</a>
</div>

<form action = '../conexion/registrarAdministrador.php' method = 'post' class="formularioGenerico">
<h2>Creación de cuenta de administrador</h2>
<input type = 'text' name = 'usuario' placeholder="Usuario" required>
<br>

<input type = 'password' name = 'password' placeholder="Contraseña" required>
<br>
<input type = 'submit' value = 'Registrar'>
</form>

<br><br>

<table>

<?php

$resultado = mysqli_query( $conectar, 'SELECT * FROM administrador' );

while( $row = mysqli_fetch_assoc( $resultado ) ) {
    echo"
              <tr>
                  <td >
                   <h3>$row[usuario]</h3>
                  </td>
                  <td >
                  <h3>$row[password]</h3>
                 </td>
                 
                  <td class='tdEliminar'>
                  <a href='javascript:eliminarAdministrador($row[id])'>
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