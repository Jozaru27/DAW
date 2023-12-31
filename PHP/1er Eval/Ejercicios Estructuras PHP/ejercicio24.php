<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 *
 * 24. Con los trabajadores del ejercicio anterior, calcular el salario actual y el salario aumentado un
 * porcentaje indicado por la variable
 *
 */

// Función

// Función para calcular el salario actual y aumentado
// Recibe por parámetros un array de trabajadores y un porcentaje de aumento.
function calcularSalarios($trabajadores, $porcentajeAumento) {
    $resultados = array();

    // En este bucle foreach se guardan los valores de nombre y salario en variables
    // Luego calcula el aumento aplicando el porcentaje al salario actual
    // Luego calcula el salario aumentado sumando el salario actual más el aumento calculado
    // Almacena los resultados en un array y lo devuelve
    foreach ($trabajadores as $trabajador) {
        $nombre = $trabajador['nombre'];
        $salarioActual = $trabajador['salario'];

        $aumento = $salarioActual * ($porcentajeAumento / 100);
        $salarioAumentado = $salarioActual + $aumento;

        $resultados[] = [
            'nombre' => $nombre,
            'salarioActual' => $salarioActual,
            'salarioAumentado' => $salarioAumentado,
        ];
    }
    return $resultados;
}

// Programa

// Pide la cantidad de trabajadores y lo guarda en un array
$cantidadTrabajadores = readline("¿Cuántos trabajadores deseas ingresar? ");
$trabajadores = array();

// Bucle for donde se guardan los nombres de los trabajadores y sus salarios.
// Se guardan los datos en un array asociativo.
for ($i = 0; $i < $cantidadTrabajadores; $i++) {
    $nombre = readline("Nombre del trabajador $i: ");
    $salario = floatval(readline("Salario del trabajador $i: "));
    $trabajadores[] = ['nombre' => $nombre, 'salario' => $salario];
}

// Pide el porcentaje en aumento por pantalla
$porcentajeAumento = floatval(readline("Porcentaje de aumento de salario: "));

// Llama a la función para calcular los salarios actuales y aumentados
$resultados = calcularSalarios($trabajadores, $porcentajeAumento);

// Muestra todos los resultados por pantalla
// El bucle foreach muestra el nombre, salario y salario aumentado por cada uno de los trabajadores
echo "Resultados:\n";

foreach ($resultados as $resultado) {
    echo "Nombre: " . $resultado['nombre'] . "\n";
    echo "Salario Actual: " . $resultado['salarioActual'] . "\n";
    echo "Salario Aumentado: " . $resultado['salarioAumentado'] . "\n";
}

?>
