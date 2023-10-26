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

// Creamos la matriz. Le pasamos por parámetro dos matrices y la operación a realizar.
function operaMatriz($matriz1, $matriz2, $operacion) {
    // Muestra las matrices originales. Llama a una función creada más abajo (para no tener que repetir el código dos veces).
    echo "Matriz 1: \n";
    imprimirMatriz($matriz1);
    echo "Matriz 2: \n";
    imprimirMatriz($matriz2);

    // Creamos otra matriz para almacenar el resultado
    $resultado = array(); 

    // Bucle for anidado que realiza la operación seleccionada entre las matrices
    // El bucle for de fuera recorre las filas y el de dentro recorre las columnas. Las matrices tienen un valor predefinido más abajo de 3x3, por lo que cada uno recorre 3. Si se cambia el tamaño de la matriz esto también debe cambiarse.
    // En el bucle interno se verifica el valor de la operación, ya sea suma, resta, multiplicación o división, primero de una matriz con todas sus posiciones, y luego de otra con también todas sus posiciones.
    // Se almacena el resultado en otra matriz. Además como añadido, se evita que se pueda dividir por 0, aunque al estar definidas, en este caso no hace falta.
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            if ($operacion == 's') {
                $resultado[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
            } elseif ($operacion == 'r') {
                $resultado[$i][$j] = $matriz1[$i][$j] - $matriz2[$i][$j];
            } elseif ($operacion == 'm') {
                $resultado[$i][$j] = $matriz1[$i][$j] * $matriz2[$i][$j];
            } elseif ($operacion == 'd') {
                if ($matriz2[$i][$j] != 0) {
                    $resultado[$i][$j] = $matriz1[$i][$j] / $matriz2[$i][$j];
                } else {
                    $resultado[$i][$j] = "Error: División por cero";
                }
            }
        }
    }

    // Muestra la operación que se ha realizado, además de la matriz resultado
    echo "Operación a realizar: ";
    if ($operacion == 's') {
        echo "Suma \n";
    } elseif ($operacion == 'r') {
        echo "Resta \n";
    } elseif ($operacion == 'm') {
        echo "Multiplicación \n";
    } elseif ($operacion == 'd') {
        echo "División \n";
    }
    echo "Matriz resultado: \n";
    imprimirMatriz($resultado);
}

// La función acepta una matriz como parámetro. El primer bucle foreach recorre las filas, el anidado recorre los elementos de cada fila
// Por cada elemento de cada fila, lo muestra por pantalla. (\t y \n separan los elementos cuando salen por pantalla para que quede aseado).
function imprimirMatriz($matriz) {
    foreach ($matriz as $fila) {
        foreach ($fila as $elemento) {
            echo $elemento . "\t";
        }
        echo " \n";
    }
}

// Valores predefinidos para las matrices (Si se cambia el tamaño de las matrices tiene que cambiarse cuantas posiciones recorre el array de operaciones).
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

// Pide la operación a realizar al usuario por pantalla.
$operacion = readline("Ingrese la operación: [s] para suma, [r] para resta, [m] para multiplicación, [d] para división): ");

// Llama a la función pasándole los parámetros
operaMatriz($matriz1, $matriz2, $operacion);

?>