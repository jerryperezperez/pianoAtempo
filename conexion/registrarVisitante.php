<?php


require '../conexion/conexion.php';

$nombre = $_POST[ 'nombre' ];
$email = $_POST[ 'email' ];
$edad = $_POST[ 'edad' ];
$sexo = $_POST[ 'sexo' ];

$insertar = "INSERT INTO suscriptor(nombre, email, edad, sexo) VALUES('$nombre', '$email', '$edad', '$sexo')";

$validar =  mysqli_query( $conectar, "SELECT * FROM suscriptor WHERE email = '$email' " );

if(mysqli_num_rows($validar)>0){
  echo "
      <script>
        alert('Ya se ha registrado este correo');
        location.href='../index.php';
        </script>
    ";
}
else{
  $query = mysqli_query( $conectar, $insertar );
  if ( $query ) {
      echo "
        <script>
          alert('Se logró el registro exitosamente');
          location.href='enviarCorreoConfirmacion.php?email=$email';
          </script>
      ";
  
  } else {
      echo "
        <script>
          alert('El registro NO se completó. Vuelva a intentarlo');
          // location.href='../index.php';
        </script>
        ";
  }
}


?>