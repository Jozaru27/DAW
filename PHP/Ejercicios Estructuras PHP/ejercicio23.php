<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 *
 * 23. Dado un vector asociativo de trabajadores con su salario creado solicitando al usuario el nombre
 * y salario de cada trabajador, crea usando funciones el salario máximo, el salario mínimo y el
 * salario medio.
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

// Pide la cantidad de trabajadores y lo guarda en un array
$cantidadTrabajadores = readline("¿Cuántos trabajadores deseas ingresar? ");
$trabajadores = array();

// Bucle for donde se guardan los nombres de los trabajadores y sus salarios.
// Se guardan los datos en un array asociativo.
// Floatval se utiliza para convertir una cadena/variable a un número decimal.
for ($i = 0; $i < $cantidadTrabajadores; $i++) {
    $nombre = readline("Nombre del trabajador $i: ");
    $salario = floatval(readline("Salario del trabajador $i: "));
    $trabajadores[] = ['nombre' => $nombre, 'salario' => $salario];
}

// Calcular el salario máximo, mínimo y medio
$salarioMaximo = calcularSalarioMaximo($trabajadores);
$salarioMinimo = calcularSalarioMinimo($trabajadores);
$salarioMedio = calcularSalarioMedio($trabajadores);

// Mostrar resultados
echo "Salario Máximo: $salarioMaximo\n";
echo "Salario Mínimo: $salarioMinimo\n";
echo "Salario Medio: $salarioMedio\n";

?>
