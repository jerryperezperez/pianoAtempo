<?php
include 'validacionSesion.php';
require '../conexion/conexion.php';

$usuario = $_POST[ 'usuario' ];
$password = $_POST[ 'password' ];

$insertar = "INSERT INTO administrador(usuario, password) VALUES('$usuario', '$password')";

$validar =  mysqli_query( $conectar, "SELECT * FROM administrador WHERE usuario = '$usuario' " );

if ( mysqli_num_rows( $validar )>0 ) {
    echo "
      <script>
        alert('Ya se ha registrado este administrador');
        location.href='../dashboard/nuevoAdministrador.php';
        </script>
    ";
} else {
    $query = mysqli_query( $conectar, $insertar );
    if ( $query ) {
        echo "
      <script>
        alert('Se logró el registro del administrador exitosamente');
        location.href='../dashboard/nuevoAdministrador.php';
        </script>
    ";
    } else {
        echo "
      <script>
        alert('El registro NO se completó. Vuelva a intentarlo');
        location.href='../dashboard/nuevoAdministrador.php';
      </script>
      ";
    }

}

?>
