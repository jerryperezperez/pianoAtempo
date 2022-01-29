<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$bd = 'pianoatempo';

$conectar = mysqli_connect( $host, $user, $pass, $bd );

if ( !$conectar ) {
    echo 'NO SE PUDO CONECTAR A LA BASE';
}
?>