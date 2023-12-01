<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 4. Usa el formulario del ejercicio 4 de Cookies del conversor de euros y pesetas de modo que uses
 * la sesión para mostrar la cantidad, moneda y conversión actuales y además muestre la cantidad,
 * moneda y conversión anterior.
 * 
 */
session_start(); //iniciamos la sesión

$diaActual = isset($_GET["diaActual"]) ? $_GET["diaActual"] : null;
$quincenaActual = "";

if ($diaActual !== null && $diaActual !== "") {
    if ($diaActual <= 15) {
        $quincenaActual = "primera";
    } else if ($diaActual > 15) {
        $quincenaActual = "segunda";
    }
}

if ($_POST["Enviar"] === "Enviar") {

    if (!isset($_SESSION['diaActual'])) {
        $_SESSION['diaActual'] = $_POST['diaActual'];
    } else {
        $_SESSION['diaAntiguo'] = $_SESSION['diaActual'];
        $_SESSION['diaActual'] = $_POST['diaActual'];

        echo "<br> <b> El dato antiguo es: </b> <br>";
        echo "Dia Actual: " . $_SESSION['diaActual'] . "<br>";
    }

    echo "<br> <b> Datos actuales: </b> <br>";
    $diaActual = $_POST["diaActual"];
    echo "Dia Actual: $diaActual <br>";
    echo "Quincena Actual: $quincenaActual <br>";
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

    <form action="sesiones3.php" method="post">
        <label for="diaActual">Introduce el día actual:</label>
        <input type="number" id="diaActual" name="diaActual" required>

        <input type="submit" name="Enviar" value="Enviar">
    </form>
</body>

</html>