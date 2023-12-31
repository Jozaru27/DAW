<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * El PDF está mal. El 8 es el de cálculos, el 9 es el de la Zona horaria.
 * 9 Usa el formulario del ejercicio 9 de Cookies con selección de zona horaria para mostrar la hora
 * y zona elegidas de modo que uses la sesión para mostrar la zona horaria y hora actuales y
 * además muestre la zona horaria y hora de la selección anterior.
 * 
 */
session_start();

// Variables para la zona horaria actual y anterior
$zonaHorariaActual = '';
$zonaHorariaAntigua = '';

// Si se envía el Form en POST, almacena la zona horaria.
// Si está vacía te indica que la rellenes, si no (linea 27).
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $zonaHoraria = $_POST["zona_horaria"];

    if (empty($zonaHoraria)) {
        echo "<p>Por favor, selecciona una zona horaria.</p>";
    } else {
        // Configura la zona horaria seleccionada
        date_default_timezone_set($zonaHoraria);

        // Gurada la hora acutal en la sesión
        $horaActual = date("H:i:s");
        $_SESSION['horaActual'] = $horaActual;

        // Almacena la zona horaria actual
        $zonaHorariaActual = $zonaHoraria;

        // Muestra por pantalla la zona horaria actual
        echo "<p>La hora actual en la zona horaria $zonaHoraria es: $horaActual</p>";
    }

    // Si hay una selección anterior, la mostramos y almacenamos la zona horaria anterior
    if (!empty($_SESSION['zonaHorariaAntigua']) && !empty($_SESSION['horaActualAntigua'])) {
        // Muestra por pantalla la zona horaria anterior
        echo "El dato introducido anteriormente es: ", $_SESSION['zonaHorariaAntigua'] . "-" . $_SESSION['horaActualAntigua'];
        $zonaHorariaAntigua = $_SESSION['zonaHorariaAntigua'];
    }

    // Guardamos la selección actual en la sesión
    $_SESSION['zonaHorariaAntigua'] = $zonaHoraria;
    $_SESSION['horaActualAntigua'] = $horaActual;
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
    <title>Sesiones 9 - Jose Zafrilla</title>
</head>


<body>
    <h2>Sesiones 9 - Jose Zafrilla</h2>

    
    <form action="sesiones9.php" method="POST">
    <label for="zona_horaria">Selecciona una zona horaria:</label>
        <select name="zona_horaria" required>
            <?php
            // Para generar la lista de zonas horarias
            $zonasHorarias = DateTimeZone::listIdentifiers();
            foreach ($zonasHorarias as $zona) {
                $selected = ($zona == $_SESSION['zonaHorariaAntigua']) ? 'selected' : '';
                echo "<option value=\"$zona\" $selected>$zona</option>";
            }
            ?>
        </select><br>

        <input type="submit" value="Obtener Hora"><br><br>
    </form>

</body>
</html>