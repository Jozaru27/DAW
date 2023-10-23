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

function operaMatriz($matriz1, $matriz2, $operacion){

}

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "Ingresa el valor para la posición [$i][$j]: ";
        $matriz2[$i][$j] = (int)readline();
    }
}

echo "Las operaciones son: \n";
echo "sumar\t\t ->\t 's' \n";
echo "restar\t\t ->\t 'r' \n";
echo "multiplicar\t ->\t 'm' \n";
echo "dividir\t\t ->\t 'd' \n";
$operación = readline("¿Qué tipo de operación será?")



?>