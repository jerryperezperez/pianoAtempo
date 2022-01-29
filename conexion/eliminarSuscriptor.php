<?php

require 'conexion.php';
require 'validacionSesion.php';
$id = $_GET[ 'id' ];
echo $id;

$eliminar = "DELETE FROM suscriptor WHERE id = '$id'";

$resultado = mysqli_query( $conectar, $eliminar );
if ( $resultado ) {
    echo
    "<script>
alert('Se eliminó al suscriptor seleccionado');
location.href='../dashboard/suscriptores.php';
</script>";

} else {
    echo"<script>
  alert('NO se pudo eliminar al suscriptor. Intente de nuevo o contacte a soporte');
  location.href='../dashboard/suscriptores.php';
  </script>";

}
?>