<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Registro</title>
</head>
<body>

<h2>Resultado del Registro</h2>

<p>Correo Electrónico: <?php echo $_GET["email"]; ?></p>
<p>Acepta recibir publicidad: <?php echo isset($_GET["aceptaPublicidad"]) ? "Sí" : "No"; ?></p>

</body>
</html>
