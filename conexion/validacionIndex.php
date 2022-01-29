<?php
if ( !isset( $_SESSION ) )
 {
    session_start();
}
if ( array_key_exists( 'autentificado', $_SESSION ) ) 
 {
    if ( $_SESSION[ 'autentificado' ] == 'SI' ) 
 {
        header( 'Location: inicioSesion.php' );
        exit();
    }
}
?>