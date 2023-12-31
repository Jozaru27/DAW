<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * El PDF está mal. El 8 es el de cálculos, el 9 es el de la Zona horaria.
 * 8. Usa el formulario del ejercicio 8 de Cookies con selección de cálculo de media, mediana y
 * moda de modo que uses la sesión para mostrar los números, la media, mediana y/o moda
 * seleccionadas actualmente y además muestre los números, la media, mediana y moda de la
 * selección anterior
 * 
 */
session_start();

if (!isset($_SESSION['resultados'])) {
    $_SESSION['resultados'] = [];
}

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

    $_SESSION['numeros'] = $numeros;
    $resultados = [];

    if ($calcularMedia || $calcularModa || $calcularMediana) {
        if ($calcularMedia) {
            $media = calcularMedia($numeros);
            $resultados[] = 'Media: ' . $media;
        }

        if ($calcularModa) {
            $moda = calcularModa($numeros);
            $resultados[] = 'Moda: ' . implode(', ', $moda);
        }

        if ($calcularMediana) {
            $mediana = calcularMediana($numeros);
            $resultados[] = 'Mediana: ' . $mediana;
        }

        // Muestra el resultado actual
        echo "Resultado actual: <br>";
        foreach ($resultados as $resultado) {
            echo $resultado . '<br>';
        }

        // Guarda el resultado actual en la sesión
        $_SESSION['resultados'][] = $resultados;
    }
}

// Muestra los datos anteriores
if (!empty($_SESSION['resultados'])) {
    echo "Datos anteriores: <br>";
    foreach ($_SESSION['resultados'] as $resultados) {
        if (is_array($resultados)) {
            echo implode('<br>', $resultados) . '<br>';
        } else {
            echo $resultados . '<br>';
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
    <title>Sesiones 8 - Jose Zafrilla</title>
</head>


<body>
    <h2>Sesiones 8 - Jose Zafrilla</h2>

    
    <form action="sesiones8.php" method="get">
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