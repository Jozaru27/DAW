<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 10. Ejercicio 23 Dado un vector asociativo de trabajadores con su salario, crea usando funciones
 * y a criterio del usuario, el salario máximo, el salario mínimo y el salario medio. (puede elegir uno
 * de ellos, varios o todos)
 * 
 */

// Funciones

// Función para calcular el salario máximo
// Calcula el salario máximo de los salarios de los trabajadores en el array. Con column los obtiene y con max lo encuentra. Devuelve el salario máximo.
function calcularSalarioMaximo($trabajadores) {
    $salarios = array_column($trabajadores, 'salario');
    return max($salarios);
}

// Función para calcular el salario mínimo
// Calcula el salario mínimo de los salarios de los trabajadores en el array. Con column los obtiene y con min lo encuentra. Devuelve el salario mínimo.
function calcularSalarioMinimo($trabajadores) {
    $salarios = array_column($trabajadores, 'salario');
    return min($salarios);
}

// Función para calcular el salario medio
// Calcula el salario medio de los salarios de los trabajadores en el array. Con column los obtiene, luego se suman y se dividen por la cantidad de salarios. Devuelve el salario medio.
function calcularSalarioMedio($trabajadores) {
    $salarios = array_column($trabajadores, 'salario');
    return array_sum($salarios) / count($salarios);
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

// Obtiene el tipo de cálculo seleccionado
$tiposCalculo = isset($_GET['tipoCalculo']) ? $_GET['tipoCalculo'] : null;

// Muestra todos los trabajadores con sus datos
echo "Trabajadores:<br>";
foreach ($trabajadores as $trabajador) {
    echo "Nombre: " . $trabajador['nombre'] . ", Salario: " . $trabajador['salario'] . "<br>";

}

// Muestra los resultados según el tipo de cálculo
foreach ($tiposCalculo as $tipoCalculo) {
if ($tipoCalculo === 'maximo') {
    $resultado1 = calcularSalarioMaximo($trabajadores);
    echo "<br>Salario Máximo: $resultado1 <br>";
} 

if ($tipoCalculo === 'minimo') {
    $resultado2 = calcularSalarioMinimo($trabajadores);
    echo "<br>Salario Mínimo: $resultado2 <br>";
}

 if ($tipoCalculo === 'medio') {
    $resultado3 = calcularSalarioMedio($trabajadores);
    echo "<br>Salario Medio: $resultado3 <br>";
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
    <title>Form 10 - Jose Zafrilla</title>
</head>

<body>
    <h2>Form 10 - Jose Zafrilla</h2>

    <form action="ejForm10.php" method="get">
        <label for="tipoCalculo">Calculadora de salarios:</label><br>

        <select name="tipoCalculo[]" required multiple size="3">
            <option value="maximo">Salario Máximo</option>
            <option value="minimo">Salario Mínimo</option>
            <option value="medio">Salario Medio</option>
        </select><br>

        <input type="submit" value="Calcular Salarios">
    </form> 
</body>
</html>
