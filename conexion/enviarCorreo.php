<?php
include 'validacionSesion.php';
require 'conexion.php';
include 'phpmailer/PHPMailerAutoload.php';

$asunto = $_POST[ 'asunto' ];
$mensaje = $_POST[ 'mensaje' ];
$archivo = $_FILES[ 'archivo' ];
$correosNoEnviados = '';
$contadorCorreosNoEnviados = 0;
$resultado = mysqli_query( $conectar, 'SELECT * FROM suscriptor' );

if ( is_uploaded_file( $_FILES[ 'archivo' ][ 'tmp_name' ] ) ) {
    $nombreArchivo = $_FILES[ 'archivo' ][ 'name' ];
    $rutaTemporal = $_FILES[ 'archivo' ][ 'tmp_name' ];
    $rutaCarpeta = '../documentos/' . $nombreArchivo;

    if ( move_uploaded_file( $rutaTemporal, $rutaCarpeta ) ) {
        while ( $row = mysqli_fetch_assoc( $resultado ) ) {

            $mail = new PHPMailer;

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Username = 'algunCorreo@gmail.com';
            $mail->Password = 'password';

            $mail->setFrom( 'algunCorreo@gmail.com' );

            $mail->addAddress( $row[ 'email' ] );
            $mail->addAttachment( $rutaCarpeta );
            $mail->addReplyTo( 'algunCorreo@gmail.com' );

            $mail->isHTML( true );

            $mail->Subject = $asunto;
            $mail->Body = $mensaje;
            if ( !$mail->send() ) {

                $contadorCorreosNoEnviados++;
                $correosNoEnviados = $correosNoEnviados."$row[email]; ";
            }

        }

    } else {
        echo "
    <script>
      alert('No se pudo cargar el archivo correctamente. Contacte al servicio de soporte');
    location.href='../dashboard/suscriptores.php';
    </script>
  ";
    }
    unlink( $rutaCarpeta );

} else {

    while ( $row = mysqli_fetch_assoc( $resultado ) ) {

        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Username = 'algunCorreo@gmail.com';
        $mail->Password = 'password';

        $mail->setFrom( 'algunCorreo@gmail.com' );
        $mail->addAddress( $row[ 'email' ] );
        $mail->addReplyTo( 'algunCorreo@gmail.com' );
        $mail->isHTML( true );

        $mail->Subject = $asunto;
        $mail->Body = $mensaje;
        if ( !$mail->send() ) {
            $contadorCorreosNoEnviados++;
            $correosNoEnviados = $correosNoEnviados."$row[email]; ";
        }
    }

}
mysqli_free_result( $resultado );
mysqli_close( $conectar );

if ( $contadorCorreosNoEnviados>0 ) {
    echo "
<script>
  alert('No se enviaron los correos a $correosNoEnviados');
location.href='../dashboard/suscriptores.php';
</script>
";
} else {
    echo "
  <script>
    alert('Se enviaron todos los correos exitosamente');
  location.href='../dashboard/suscriptores.php';
  </script>
  ";
}

?>