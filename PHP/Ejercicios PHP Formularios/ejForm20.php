<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 *
 * 20. Realiza un programa que pida una hora por teclado y que muestre luego el saludo, esto es: buenos días, buenas tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de
 * 13 a 20 y de 21 a 5 respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.
 *
 */

 // Obtenemos la hora ingresada en el formulario y validamos que se encuentre entre 0 y 23
 // Según la hora que es, mostrará una de las 3 opciones de los tramos correspondientes
 if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $hora = isset($_GET['hora']) ? $_GET['hora'] : '';

    if ($hora >= 0 && $hora <= 23) {
        $saludo = obtenerSaludo($hora);

        echo '<p>' . $saludo . '</p>';
    } 
}

// Función para obtener el saludo según la hora
function obtenerSaludo($hora)
{
    if ($hora >= 6 && $hora <= 12) {
        return 'Buenos días';
    } elseif ($hora >= 13 && $hora <= 20) {
        return 'Buenas tardes';
    } else {
        return 'Buenas noches';
    }
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
    <title>Form 20 - Jose Zafrilla</title>
</head>

<body>
    <h2>Form 20 - Jose Zafrilla</h2>

    <form action="ejForm20.php" method="get">
        <label for="hora">Ingrese una hora (0-23): </label>
        <input type="number" name="hora" id="hora" required min="0" max="23">
        <br>

        <input type="submit" value="Obtener Saludo">
    </form> 
</body>
</html>