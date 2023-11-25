<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 *
 * 21. Realiza un programa donde el usuario seleccione una zona horaria de un máximo de 20 y le muestre la hora actual de dicha zona horaria
 *
 */

 // Lista de zonas horarias disponibles (sacadas de la documentación de php para saber la compatibilidad)
$zonasHorarias = array(
    'America/New_York' => 'Eastern Time (US & Canada)',
    'America/Chicago' => 'Central Time (US & Canada)',
    'America/Denver' => 'Mountain Time (US & Canada)',
    'America/Los_Angeles' => 'Pacific Time (US & Canada)',
    'Europe/London' => 'London',
    'Europe/Paris' => 'Paris',
    'Europe/Berlin' => 'Berlin',
    'Asia/Tokyo' => 'Tokyo',
    'Asia/Hong_Kong' => 'Hong Kong',
    'Asia/Dubai' => 'Dubai',
    'Australia/Sydney' => 'Sydney',
    'Pacific/Auckland' => 'Auckland'
);

 // Obtiene la zona horaria seleccionada por el usuario. Luego, verifica que esa zona existe en el array y se establece como zona horaria predeterminada. Luego, se obtiene la hora actual y muestra la hora actual en la zona horaria seleccionada.
 if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $zonaHoraria = isset($_GET['zona_horaria']) ? $_GET['zona_horaria'] : '';

    if (array_key_exists($zonaHoraria, $zonasHorarias)) {
        date_default_timezone_set($zonaHoraria);
        $horaActual = date('H:i:s');

        echo '<h3>Hora Actual en ' . $zonasHorarias[$zonaHoraria] . ':</h3>';
        echo '<p>' . $horaActual . '</p>';
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
    <title>Form 21 - Jose Zafrilla</title>
</head>

<body>
    <h2>Form 21 - Jose Zafrilla</h2>

    <form action="ejForm21.php" method="get">
        <label for="zona_horaria">Seleccione una Zona Horaria:</label>
        <select name="zona_horaria" id="zona_horaria" required>
            <!-- Carga las zonas horarias con un foreach, en vez de declararlas directamente en las opciones -->
            <?php
            foreach ($zonasHorarias as $key => $nombreZona) {
                echo '<option value="' . $key . '">' . $nombreZona . '</option>';
            }
            ?>
        </select>
        <br>

        <input type="submit" value="Obtener Hora Actual">
    </form>

</body>
</html>