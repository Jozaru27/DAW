<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 13. Diseñar la función operaMatriz, a la que se le pasa dos matrices de enteros positivos mayores de
 * 0 y la operación que se desea realizar: sumar, restar, multiplicar o dividir (mediante un carácter:
 * 's', 'r', 'm', 'd'). La función debe imprimir las matrices originales, indicar la operación a realizar y
 * la matriz con los resultados
*/

function operaMatriz($matriz1, $matriz2, $operacion) {
    // Mostrar las matrices originales
    echo "Matriz 1:\n";
    imprimirMatriz($matriz1);
    echo "Matriz 2:\n";
    imprimirMatriz($matriz2);

    // Realizar la operación seleccionada
    $resultado = array(); // Matriz para almacenar el resultado

    for ($i = 0; $i < count($matriz1); $i++) {
        $fila = array(); // Fila de la matriz resultado
        for ($j = 0; $j < count($matriz1[0]); $j++) {
            if ($operacion == 's') { // Suma
                $fila[] = $matriz1[$i][$j] + $matriz2[$i][$j];
            } elseif ($operacion == 'r') { // Resta
                $fila[] = $matriz1[$i][$j] - $matriz2[$i][$j];
            } elseif ($operacion == 'm') { // Multiplicación
                $fila[] = $matriz1[$i][$j] * $matriz2[$i][$j];
            } elseif ($operacion == 'd') { // División (ten en cuenta manejar divisiones por cero)
                if ($matriz2[$i][$j] != 0) {
                    $fila[] = $matriz1[$i][$j] / $matriz2[$i][$j];
                } else {
                    $fila[] = "Error: División por cero";
                }
            }
        }
        $resultado[] = $fila;
    }

    // Mostrar la operación y el resultado
    echo "Operación a realizar: ";
    if ($operacion == 's') {
        echo "Suma\n";
    } elseif ($operacion == 'r') {
        echo "Resta\n";
    } elseif ($operacion == 'm') {
        echo "Multiplicación\n";
    } elseif ($operacion == 'd') {
        echo "División\n";
    }
    echo "Matriz resultado:\n";
    imprimirMatriz($resultado);
}

function imprimirMatriz($matriz) {
    foreach ($matriz as $fila) {
        foreach ($fila as $elemento) {
            echo $elemento . "\t";
        }
        echo "\n";
    }
}

// Ejemplo de uso
$matriz1 = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

$matriz2 = array(
    array(9, 8, 7),
    array(6, 5, 4),
    array(3, 2, 1)
);

$operacion = 's'; // Puedes cambiar 's' por 'r', 'm', o 'd' para probar diferentes operaciones

operaMatriz($matriz1, $matriz2, $operacion);



?>