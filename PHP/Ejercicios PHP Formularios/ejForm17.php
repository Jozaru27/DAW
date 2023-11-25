<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 *
 * 17. Escribe un programa que dadas 10 palabras en inglés muestre su traducción al castellano a su derecha en una tabla. El usuario debe seleccionar la/s palabra/s a traducir (podría seleccionarlas todas)
 *
 */

// Array de palabras en inglés y sus traducciones al español
$palabras = array(
    "database" => "base de datos",
    "algorithm" => "algoritmo",
    "programming" => "programación",
    "code" => "código",
    "server" => "servidor",
    "interface" => "interfaz",
    "debug" => "depurar",
    "IT" => "tecnología informática",
    "computer" => "ordenador",
    "network" => "red"
);

// Verificar si el formulario ha sido enviado. Obtiene las palabras seleccionadas, y muestra la tabla si se ha seleccionado como mínimo una
// La tabla muestra la original y las traducciones, iterando sobre las palabras seleccionadas
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $palabrasSeleccionadas = isset($_GET['palabras']) ? $_GET['palabras'] : array();

    if (!empty($palabrasSeleccionadas)) {
        echo '<h3>Palabras Seleccionadas y sus Traducciones</h3>';
        echo '<table border="1">';
        echo '<tr><th>Palabra en Inglés</th><th>Traducción al Español</th></tr>';

        foreach ($palabrasSeleccionadas as $palabra) {
            echo '<tr><td>' . $palabra . '</td><td>' . $palabras[$palabra] . '</td></tr>';
        }

        echo '</table>';
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
    <title>Form 17 - Jose Zafrilla</title>
</head>

<body>
    <h2>Form 17 - Jose Zafrilla</h2>

    <form action="ejForm17.php" method="get">
        <label for="palabras">Selecciona las palabras a traducir:</label>
        <select name="palabras[]" id="palabras" multiple>
            <?php
            // Mostrar opciones del select con las palabras en inglés
            foreach ($palabras as $palabra => $traduccion) {
                echo '<option value="' . $palabra . '">' . $palabra . '</option>';
            }
            ?>
        </select>
        <br>
        <input type="submit" value="Traducir">
    </form> 
</body>
</html>