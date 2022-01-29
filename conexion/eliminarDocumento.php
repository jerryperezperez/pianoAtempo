<?php

require 'conexion.php';
require 'validacionSesion.php';
$id = $_GET[ 'id' ];
$ruta = $_GET[ 'ruta' ];

$eliminar = "DELETE FROM documento WHERE id = '$id'";

$resultado = mysqli_query( $conectar, $eliminar );
if ( $resultado ) {
    if ( unlink( '../'.$ruta ) ) {
        echo
        "<script>
alert('Se eliminó el documento seleccionado');
location.href='../dashboard/documentos.php';
</script>";
    } else {
        echo
        "<script>
alert('No se eliminó el documento de la carpeta. Contacte a soporte');
//location.href='../dashboard/documentos.php';
</script>";
    }

} else {
    echo"<script>
  alert('NO se pudo eliminar el documento');
  location.href='../dashboard/documentos.php';
  </script>";

}
?>