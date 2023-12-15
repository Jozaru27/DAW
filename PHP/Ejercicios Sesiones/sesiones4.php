<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 4. Usa el formulario del ejercicio 4 de Cookies con indicación de la quincena dado el día de la
 * semana de modo que uses la sesión para mostrar el día y la quincena actuales y además muestre
 * el día y la quincena anteriores
 * 
 */
session_start(); //iniciamos la sesión

// Cogemos el valor de dia actual
// Iniciamos la variable quincena en vacío
$diaActual = isset($_POST["diaActual"]) ? $_POST["diaActual"] : null;
$quincenaActual = "";

// If para saber en qué quincena estamos dependiendo del número
if (isset($_POST["diaActual"])) {
    if ($diaActual <= 15) {
        $_SESSION["quincena"] = "primera";
    } else if ($diaActual > 15) {
        $_SESSION["quincena"] = "segunda";
    }
}

// Cuando se envíen los datos
if ($_POST["Enviar"] === "Enviar") {

    // Si dia actual no está setted, se toma el valor del Post. Si está setted, di antiguo es dia actual, y se coge dia actual del post
    if (!isset($_SESSION['diaActual'])) {
        $_SESSION['diaActual'] = $_POST['diaActual'];
    } else {
        $_SESSION['diaAntiguo'] = $_SESSION['diaActual'];
        $_SESSION['diaActual'] = $_POST['diaActual'];

    // Si dia antiguo está setted, se saca la quincena según el número
    if (isset($_SESSION["diaAntiguo"])) {
        if ($_SESSION["diaAntiguo"] <= 15) {
            $_SESSION["quincenaAntiguo"] = "primera";
        } else if ($_SESSION["diaAntiguo"] > 15) {
            $_SESSION["quincenaAntiguo"] = "segunda";
        }
    }

        echo "<br> <b> El dato antiguo es: </b> <br>";
        echo "Dia Antiguo: " . $_SESSION['diaAntiguo'] . "<br>";
        echo "Quincena Antigua: " . $_SESSION["quincenaAntiguo"] . "<br>";
    }


    // Mostrar los datos actuales
    echo "<br> <b> Datos actuales: </b> <br>";
    $diaActual = $_POST["diaActual"];
    echo "Dia Actual: $diaActual <br>";
    echo "Quincena Actual:" . $_SESSION["quincena"] . "<br>";
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
    <title>Sesiones 4 - Jose Zafrilla</title>
</head>


<body>
    <h2>Sesiones 4 - Jose Zafrilla</h2>

    <form action="sesiones4.php" method="post">
        <label for="diaActual">Introduce el día actual:</label>
        <input type="number" id="diaActual" name="diaActual" required>

        <input type="submit" name="Enviar" value="Enviar">
    </form>
</body>

</html>