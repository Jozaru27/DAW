<!-- HTML -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Zafrilla Ruiz">
    <link rel="author" href="https://github.com/Jozaru27">
    <title>Form 16 - Resultados del Formulario</title>
</head>

<body>

    <h2>Form 16 - Resultados del Formulario</h2>

    <?php
    if (isset($_POST["enviar"])) {
        $horarios = $_POST["horarios"];
        $horarioSelect = implode(" / ", $horarios);

        $conocidos = $_POST["conocido"];
        $conocidoSelect = implode(" / ", $conocidos);

        echo "<em>Nombre:</em> <strong>" . strtoupper($_POST["nombre"]) . "</strong><br>";
        echo "<em>Apellidos:</em> <strong>" . strtoupper($_POST["apellidos"]) . "</strong><br>";
        echo "<em>Correo:</em> <strong>" . strtoupper($_POST["correo"]) . "</strong><br>";
        echo "<em>Nombre de Usuario:</em> <strong>" . strtoupper($_POST["usuario"]) . "</strong><br>";
        echo "<em>Password:</em> <strong>" . strtoupper($_POST["contraseña"]) . "</strong><br>";
        echo "<em>Sexo:</em> <strong>" . strtoupper($_POST["sexo"]) . "</strong><br>";
        echo "<em>Provincia:</em> <strong>" . strtoupper($_POST["provincia"]) . "</strong><br>";
        echo "<em>Horario de Contacto:</em> <strong>" . $horarioSelect . "</strong><br>";
        echo "<em>¿Cómo nos ha conocido?:</em> <strong>" . strtoupper($conocidoSelect) . "</strong><br>";
        echo "<em>Tipo de Incidencia:</em> <strong>" . strtoupper($_POST["tipo_incidencia"]) . "</strong><br>";
        echo "<em>Descripción de la incidencia:</em> <strong>" . strtoupper($_POST["comentario"]) . "</strong><br>";
    }
    ?>

</body>

</html>
