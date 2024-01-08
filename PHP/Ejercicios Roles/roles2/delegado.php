<?php

// Iniciamos la Sesión
session_start(); 

echo "Bienvenido, <b>delegado</b>, tu nombre es, ".$_SESSION["nombre"]." ".$_SESSION["apellido"].", tu asignatura es, ".$_SESSION["asignatura"].", y tu grupo es, ".$_SESSION["grupo"];

if (isset($_POST["cerrar"])){
    session_unset();
    header("Location: roles2.php");
}

?>

<!-- HTML -->
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />

    <!-- Nombre del Autor -->
    <meta name="author" content="Jose Zafrilla Ruiz" />
    <link rel="author" href="https://github.com/Jozaru27">

    <!-- Título de Página -->
    <title>Delegado - Jose Zafrilla</title>
</head>

<body>
    <h2>Delegado - Jose Zafrilla</h2>
    <hr>

    <form action="roles2.php" method="post">
        <input type="submit" value="Cerrar Sesión" name="cerrar">
    </form>
</body>

</html>