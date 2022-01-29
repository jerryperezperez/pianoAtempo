<?php
session_start();

if ( $_SESSION[ 'autentificado' ] != 'SI' ) {
    header( 'Location: ../dashboard/inicioSesion.php' );
    exit();
}
?>