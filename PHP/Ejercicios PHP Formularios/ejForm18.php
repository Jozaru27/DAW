<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 *
 * 18. Escribe un programa para que, a criterio del usuario, obtenga la media, la moda (número más frecuente) o la mediana (el número de en medio o el promedio de los dos centrales si son pares)
 * de los números que introduzca el usuario, Se podrán seleccionar de una a todas las opciones calculadas pero se deben mostrar todas para que el usuario las marque o desmarque
 *
 */

// FUNCIONES
// Función para calcular la media de un array de números
function calcularMedia($numeros){
    $total = count($numeros);
    $suma = array_sum($numeros);

    return $suma / $total;
}

// Función para calcular la moda de un array de números
function calcularModa($numeros){
    $frecuencias = array_count_values($numeros);
    $maxFrecuencia = max($frecuencias);

    $moda = array_keys($frecuencias, $maxFrecuencia);

    return $moda;
}

// Función para calcular la mediana de un array de números. En el if se controla el caso de que la media tenga número par o impar
function calcularMediana($numeros){
    sort($numeros);
    $total = count($numeros);

    $mitad = floor($total / 2);

    if ($total % 2 == 0) {
        // Array con dos números centrales si el total es par
        $centrales = array_slice($numeros, $mitad - 1, 2);
        return calcularMedia($centrales);
    } else {
        // Número central si el total es impar
        return $numeros[$mitad];
    }
}


// PROGRAMA
// Procesa el formulario cuando se envía, obtiene los números como cadena y convierte la cadena en un array, verifica qué opción/es de cálculo se ha escogido, y las muestra con los resultados
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $numeros_str = isset($_GET['numeros']) ? $_GET['numeros'] : '';

    $numeros = explode(',', $numeros_str);

    $calcularMedia = isset($_GET['media']);
    $calcularModa = isset($_GET['moda']);
    $calcularMediana = isset($_GET['mediana']);

    if ($calcularMedia || $calcularModa || $calcularMediana) {
        echo '<h3>Resultados:</h3>';

        if ($calcularMedia) {
            $media = calcularMedia($numeros);
            echo 'Media: ' . $media;
        }

        if ($calcularModa) {
            $moda = calcularModa($numeros);
            echo '<br> Moda: ' . implode(', ', $moda);
        }

        if ($calcularMediana) {
            $mediana = calcularMediana($numeros);
            echo '<br> Mediana: ' . $mediana;
        }
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
    <title>Form 18 - Jose Zafrilla</title>
</head>

<body>
    <h2>Form 18 - Jose Zafrilla</h2>

    <form action="ejForm18.php" method="get">
        <label for="numeros">Ingrese números (separados por comas): </label>
        <input type="text" name="numeros" id="numeros" required>
        <br>

        <label>Opciones de cálculo:</label>
        <br>
        <input type="checkbox" name="media" id="media">
        <label for="media">Calcular Media</label>

        <input type="checkbox" name="moda" id="moda">
        <label for="moda">Calcular Moda</label>

        <input type="checkbox" name="mediana" id="mediana">
        <label for="mediana">Calcular Mediana</label>

        <br>
        <input type="submit" value="Calcular">
    </form> 
</body>
</html>