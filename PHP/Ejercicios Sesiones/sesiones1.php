<?php
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 1. Usa el formulario del ejercicio 1 de Cookies de saludo o despedida de modo que uses la sesión
 * para mostrar el usuario y saludo actuales y además muestre el usuario y saludo anterior.
 * 
 */
session_start(); //iniciamos la sesión

if ($_POST["Enviar"] === "Enviar") {

    if (!isset($_SESSION['nombre']) && !isset($_POST['gesto'])) {
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['gesto'] = $_POST['gesto'];
    } else {
        $_SESSION['nombreAntiguo'] = $_SESSION['nombre'];
        $_SESSION['nombre'] = $_POST['nombre'];
    
        $_SESSION['gestoAntiguo'] = $_SESSION['gesto'];
        $_SESSION['gesto'] = $_POST['gesto'];
    
        echo "<br> <b> El dato antiguo es: </b> <br>";
        echo "Nombre: " . $_SESSION['nombreAntiguo'] . "<br>";
        echo "El gesto es: " . $_SESSION['gestoAntiguo'] . "<br>";
    }

    echo "<br> <b> Datos actuales: </b> <br>";
    $nombre = $_POST["nombre"];
    echo "Nombre: $nombre <br>";
    // if (isset($nombre)) {
    //     echo "Tu nombre es: $nombre <br><br>";
    // } else {
    //     echo "No has rellenado el campo de nombre <br><br>";
    // }

    $gesto = $_POST["gesto"];
    echo "El gesto es: $gesto <br>";
    // if ($gesto === "Saludo") {
    //     echo "Saludo enviado <br><br>";
    // } else {
    //     echo "Despedida enviada <br><br>";
    // }
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
    <title>Sesiones 1 - Jose Zafrilla</title>
</head>


<body>
    <h2>Sesiones 1 - Jose Zafrilla</h2>

    <form action="sesiones1.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"><br><br>

        <label for="gesto">Gesto:</label>
        <select name="gesto">
            <option value="Saludo"> Saludo </option>
            <option value="Despedida"> Despedida </option>
        </select><br><br>

        <input type="submit" name="Enviar" value="Enviar">

    </form>
</body>

</html>

<?php

?>