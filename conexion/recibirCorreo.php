<?php
require 'conexion.php';
include 'phpmailer/PHPMailerAutoload.php';

$nombre = $_POST[ 'nombre' ];
$email = $_POST[ 'email' ];
$asunto = $_POST[ 'asunto' ];
$mensaje = $_POST[ 'mensaje' ];

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = 'algunCorreo@gmail.com';
$mail->Password = 'password';

$mail->setFrom( $email );
$mail->addAddress( 'algunCorreo@gmail.com' );
$mail->addReplyTo( $email );
$mail->isHTML( true );

$mail->Subject = $asunto.' de '. $nombre;
$mail->Body = $mensaje.'<br>'.'Email: '. $email;
if ( !$mail->send() ) {

    echo "
<script>
  alert('Lo sentimos. No se pudo enviar el correo');
  location.href='../contactanos.php';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
</script>
";
} else {
    echo "
  <script>
    alert('El correo se envió exitosamente');
    location.href='../contactanos.php';
  </script>
  ";
}

?>