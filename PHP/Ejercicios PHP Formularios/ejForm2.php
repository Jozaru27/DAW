<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 2. Ejerccicio 8: Genera un mensaje de modo que si el día seleccionado o introducido es menor o
 * igual que 15 muestre “primera quincena” mostrando “segunda quincena” en otro caso.
 * 
 * 
 */

// Guardamos en una variable el valor del día actual
$diaActual = isset($_GET["diaActual"]) ? $_GET["diaActual"] : null;

// Dependiendo del número introducido, si es mayor o menor que 15, mostrará un texto u otro
// Como valor inicial, pedirá un número (porque la variable estará en null)
// Al verificar los datos, accederá al if interior y mostrará su texto correspondiente
if ($diaActual !== null && $diaActual !== "") {
    if ($diaActual <= 15){
        echo "<b>El día actual es " . $diaActual . " por ende, estamos en la primera quincena </b>\n" ;
    } else if ($diaActual > 15){
        echo "<b>El día actual es " . $diaActual . " por ende, estamos en la segunda quincena </b>\n";
    }
} else {
    echo "<b>Por favor, introduzca un día en formato entero</b>";
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
    <title>Form 2 - Jose Zafrilla</title>
</head>

<body>
    <h2>Form 2 - Jose Zafrilla</h2>

    <form action="ejForm2.php" method="get">

        <label for="diaActual">Introduce el día actual:</label>
        <input type="number" id="diaActual" name="diaActual" required>
        <input type="submit" value="Verificar">

    </form>
</body>

</html>
