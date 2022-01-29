<?php

require 'conexion.php';
require 'validacionSesion.php';
$id = $_GET[ 'id' ];
echo $id;

$eliminar = "DELETE FROM administrador WHERE id = '$id'";

$resultado = mysqli_query( $conectar, $eliminar );
if ( $resultado ) {
    echo
    "<script>
alert('Se eliminó al administrador seleccionado');
location.href='../dashboard/nuevoAdministrador.php';
</script>";

} else {
    echo"<script>
  alert('NO se pudo eliminar al administrador');
  location.href='../dashboard/nuevoAdministrador.php';
  </script>";

}
?>