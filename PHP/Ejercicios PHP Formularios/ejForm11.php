<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 *
 * 11. Ejercicio 24. Con los trabajadores del ejercicio anterior, calcular el salario actual y el salario aumentado un
 * porcentaje indicado por la variable
 *
 */

 // Funciones

// Función para calcular el salario actual y el salario aumentado
// Recibe el array de trabajadores y el porcentaje de aumento. Calcula el salario actual y el salario aumentado por cada trabajador.
// Implemento la función que usé en el ejercicio 24 al ejercicio anterior
function calcularSalarios($trabajadores, $porcentajeAumento) {
    $resultados = array();

    foreach ($trabajadores as $id => $trabajador) {
        $nombre = $trabajador['nombre'];
        $salarioActual = $trabajador['salario'];

        $aumento = $salarioActual * ($porcentajeAumento / 100);
        $salarioAumentado = $salarioActual + $aumento;

        $resultados[$id] = [
            'nombre' => $nombre,
            'salarioActual' => $salarioActual,
            'salarioAumentado' => $salarioAumentado,
        ];
    }
    return $resultados;
}

// Programa

// Crea un array de trabajadores con su salario
$trabajadores = array(
    1 => array('nombre' => 'Trabajador 1', 'salario' => 2000),
    2 => array('nombre' => 'Trabajador 2', 'salario' => 2500),
    3 => array('nombre' => 'Trabajador 3', 'salario' => 1800),
    4 => array('nombre' => 'Trabajador 4', 'salario' => 3000),
    5 => array('nombre' => 'Trabajador 5', 'salario' => 2200)
);

// Obtiene el porcentaje de aumento seleccionado
$porcentajeAumento = isset($_GET['porcentajeAumento']) ? $_GET['porcentajeAumento'] : 0;

// Muestra todos los trabajadores con sus datos
echo "Trabajadores:<br>";
foreach ($trabajadores as $trabajador) {
    echo "Nombre: " . $trabajador['nombre'] . ", Salario: " . $trabajador['salario'] . "<br>";
}

// Calcula y muestra los resultados según el tipo de cálculo
$resultados = calcularSalarios($trabajadores, $porcentajeAumento);
foreach ($resultados as $id => $resultado) {
    echo "<br>Trabajador: " . $resultado['nombre'] . "<br>";
    echo "Salario Actual: " . $resultado['salarioActual'] . "<br>";
    echo "Salario Aumentado: " . $resultado['salarioAumentado'] . "<br>";
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
    <title>Form 11 - Jose Zafrilla</title>
</head>

<body>
    <h2>Form 11 - Jose Zafrilla</h2>

    <form action="ejForm11.php" method="get">
        <label for="porcentajeAumento">Porcentaje de Aumento:</label><br>
        <input type="number" name="porcentajeAumento" required><br>

        <input type="submit" value="Calcular Salarios">
    </form> 
</body>
</html>