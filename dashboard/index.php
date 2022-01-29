<?php
include '../conexion/validacionIndex.php';
?>

<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'UTF-8'>
<meta http-equiv = 'X-UA-Compatible' content = 'IE=edge'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1.0'>
<link rel = 'stylesheet' href = '../estilos/estilosGenerales.css'>
<link rel="stylesheet" href="../estilos/estilosDashboard.css">
<title>Acceso</title>
</head>
<body>
<h1>Inicio</h1>
<form action = '../conexion/autenticacion.php' method = 'post' id="formularioAcceso">
<h2 class="tituloFormulario">Iniciar sesión</h2>
<input type = 'text' name = 'usuario' id = '' placeholder="usuario" required>
<br>

<input type = 'password' name = 'password' placeholder="contraseña" required>
<br>
<input type = 'submit' value = 'Acceder'>
</form>
</body>
</html>