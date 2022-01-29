<?php

require 'conexion.php';

$usuario = $_POST[ 'usuario' ];
$password = $_POST[ 'password' ];

$resultado = mysqli_query( $conectar, "SELECT * FROM administrador WHERE usuario = '$usuario' AND password = '$password'" );

if ( mysqli_num_rows( $resultado ) > 0 ) {
    $row = mysqli_fetch_assoc( $resultado );
    session_start();
    $_SESSION[ 'usuario' ] = $row[ 'password' ];
    $_SESSION[ 'usuario' ] = $row[ 'password' ];
    $_SESSION[ 'autentificado' ] = 'SI';
    header( 'Location: ../dashboard/inicioSesion.php' );
} else {
    echo
    "<script>
    alert('ERROR EN EL INICIO DE SESIÓN');
    location.href='../dashboard/index.php?errorUsuario=SI';
  </script>";
}
mysqli_free_result( $resultado );
mysqli_close( $conectar );
?>