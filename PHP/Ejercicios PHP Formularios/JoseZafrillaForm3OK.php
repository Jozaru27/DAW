<!-- HTML -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Zafrilla Ruiz">
    <link rel="author" href="https://github.com/Jozaru27">
    <title>Form 15 - Resultados del Formulario</title>
</head>

<body>

    <h2>Form 15 - Resultados del Formulario</h2>

    <?php
    if (isset($_POST["enviar"])) {
        $ofertas = isset($_POST["ofertas"]) ? "<strong>SÍ</strong>" : "<strong>NO</strong>";
        $condiciones = isset($_POST["condiciones"]) ? "<strong>SÍ</strong>" : "<strong>NO</strong>";

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
        echo "<em>Comentario:</em> <strong>" . strtoupper($_POST["comentario"]) . "</strong><br>";
        echo "<em>Desea recibir información sobre novedades y ofertas:</em> $ofertas<br>";
        echo "<em>Declara haber leído y acepta las condiciones y normativa:</em> $condiciones<br>";
    }
    ?>

</body>

</html>
