<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Registro</title>
</head>
<body>

<h2>Resultado del Registro</h2>

<?php

$email = isset($_GET["email"]) ? $_GET["email"] : 'No definido';
$aceptaPublicidad = isset($_GET["aceptaPublicidad"]) ? $_GET["aceptaPublicidad"] : 'No definido';
?>

<p>Correo Electrónico: <?php echo $email; ?></p>
<p>Acepta recibir publicidad: <?php echo $aceptaPublicidad; ?></p>

</body>
</html>
