<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 9. Usa el formulario (Ejercicio 21 UD5) de zona horaria donde se indique la zona horaria y
 * muestre la hora y la zona elegidas guardando estos datos en una Cookie. Se deben mostrar la
 * hora y la zona actual y la hora y la zona anterior (cookie).
 * 
 */

 $cookie_name = "cookie";
 $cookie_value = "";

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

        $cookie_value .= 'Hora Actual en ' . $zonasHorarias[$zonaHoraria] . ':<br>';
        $cookie_value .= '' . $horaActual . '<br>';
    } 
 }

if (!empty($_GET)){
    setcookie($cookie_name, $cookie_value);
    echo "Datos de la cookie " . $cookie_name . ": <br>";
    echo $_COOKIE["cookie"] . "<br><br>";
}

echo "Datos actuales: <br>";
echo "" . $cookie_value . "\n" ;

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
    <title>Cookies 9 - Jose Zafrilla</title>
</head>


<body>
    <h2>Cookies 9 - Jose Zafrilla</h2>

    <form action="cookies9.php" method="get">
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