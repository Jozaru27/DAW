<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Zafrilla Ruiz">
    <link rel="author" href="https://github.com/Jozaru27">
    <title>Form 13 - Resultados del Formulario</title>
</head>

<body>

    <h2>Form 13 - Resultados del Formulario</h2>

    <?php
    if (isset($_GET["enviar"])) {
        $ofertas = isset($_GET["ofertas"]) ? "<strong>SÍ</strong>" : "<strong>NO</strong>";
        $condiciones = isset($_GET["condiciones"]) ? "<strong>SÍ</strong>" : "<strong>NO</strong>";

        echo "<em>Nombre:</em> <strong>" . strtoupper($_GET["nombre"]) . "</strong><br>";
        echo "<em>Apellidos:</em> <strong>" . strtoupper($_GET["apellidos"]) . "</strong><br>";
        echo "<em>Sexo:</em> <strong>" . strtoupper($_GET["sexo"]) . "</strong><br>";
        echo "<em>Correo:</em> <strong>" . strtoupper($_GET["correo"]) . "</strong><br>";
        echo "<em>Provincia:</em> <strong>" . strtoupper($_GET["provincia"]) . "</strong><br>";
        echo "<em>Desea recibir información sobre novedades y ofertas:</em> $ofertas<br>";
        echo "<em>Declara haber leído y acepta las condiciones y normativa:</em> $condiciones<br>";
    }
    ?>

</body>
</html>