<?php

require '../conexion/conexion.php';
include 'phpmailer/PHPMailerAutoload.php';

$email = $_GET[ 'email' ];
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'algunCorreo@gmail.com';
$mail->Password = 'password';

$mail->setFrom( 'algunCorreo@gmail.com' );
$mail->addAddress( "$email" );

$mail->addReplyTo( 'algunCorreo@gmail.com' );

$mail->isHTML( true );

$mail->Subject = 'Registro al contenido de Piano A Tempo';
$mail->Body = '¡Desde ahora te enviaremos contenido exclusivo!';

if ( !$mail->send() ) {

    echo "
  <script>
    alert('Lo sentimos. No se pudo enviar el correo de confirmación');
    location.href='../index.php';
  </script>
";

} else {
    echo "
    <script>
      alert('Se ha enviado un correo de registro exitoso en su email');
      location.href='../index.php';
    </script>
  ";

}
?>
