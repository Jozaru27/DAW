<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Jose Zafrilla Ruiz">
    <link rel="author" href="https://github.com/Jozaru27">
    <title>Form 14 - Resultados del Formulario</title>
</head>

<body>

    <h2>Formulario 2 - Resultados</h2>

    <?php
    if (isset($_POST["enviar"])) {
        $ofertas = isset($_POST["ofertas"]) ? "<strong>SÍ</strong>" : "<strong>NO</strong>";
        $condiciones = isset($_POST["condiciones"]) ? "<strong>SÍ</strong>" : "<strong>NO</strong>";

        echo "<em>Nombre:</em> <strong>" . strtoupper($_POST["nombre"]) . "</strong><br>";
        echo "<em>Apellidos:</em> <strong>" . strtoupper($_POST["apellidos"]) . "</strong><br>";
        echo "<em>Correo:</em> <strong>" . strtoupper($_POST["correo"]) . "</strong><br>";
        echo "<em>Nombre de Usuario:</em> <strong>" . strtoupper($_POST["usuario"]) . "</strong><br>";
        echo "<em>Password:</em> <strong>" . strtoupper($_POST["contraseña"]) . "</strong><br>";
        echo "<em>Sexo:</em> <strong>" . strtoupper($_POST["sexo"]) . "</strong><br>";
        echo "<em>Provincia:</em> <strong>" . strtoupper($_POST["provincia"]) . "</strong><br>";

        if (isset($_POST["situacion"])) {
            $situaciones = $_POST["situacion"];
            foreach ($situaciones as $situacion) {
                $situacion = strtoupper($situacion);
                echo "<em>Situación:</em> <strong>" . $situacion . "</strong><br>";
            }
        }

        echo "<em>Comentario:</em> <strong>" . strtoupper($_POST["comentario"]) . "</strong><br>";
        echo "<em>Desea recibir información sobre novedades y ofertas:</em> $ofertas<br>";
        echo "<em>Declara haber leído y acepta las condiciones y normativa:</em> $condiciones<br>";
    }
    ?>

</body>
</html>