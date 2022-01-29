<?php
include 'validacionSesion.php';
require '../conexion/conexion.php';

$rutaTemporal = $_FILES[ 'pdf' ][ 'tmp_name' ];
$nombreOriginal = $_FILES[ 'pdf' ][ 'name' ];
$nombreMuestra = $_POST[ 'nombrePdf' ];
date_default_timezone_set( 'America/Mexico_City' );
$nombreUnico = date( 'Y-m-d-h-i-sa' ) . '-' . $nombreOriginal;
$rutaDestinoBD = 'documentos/' . $nombreUnico;
$rutaDestino = '../documentos/' . $nombreUnico;
if ( move_uploaded_file( $rutaTemporal, $rutaDestino ) ) {

    $insertar = "INSERT INTO documento(nombre, ruta) VALUES('$nombreMuestra', '$rutaDestinoBD')";

    $query = mysqli_query( $conectar, $insertar );
    if ( $query ) {
        echo "
        <script>
        alert('Se logró el registro exitosamente');
        location.href='../dashboard/documentos.php';
        </script>
      ";
    } else {
        echo "
      <script>
        alert('El registro NO se completó. Vuelva a intentarlo');
        // location.href='../dashboard/documentos.php';
      </script>
      ";
    }
}
?>
