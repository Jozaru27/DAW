<?php

/** 
* @author Jose Zafrilla Ruiz jozaru27@gmail.com
* 
* 4. Dados dos números enteros realizar operaciones de suma, resta, división y multiplicación y
* mostrar los resultados por pantalla concatenando la operación y el resultado
*/

// Pide dos numeros por pantalla

$num1 = readline("Introduce un número entero \n");
$num2 = readline("Introduce otro número entero \n");

// Guarda los resultados de las operaciones efectuadas en variables

$suma = $num1 + $num2;
$resta = $num1 - $num2;
$division = $num1 / $num2;
$multiplicacion = $num1 * $num2;

// Muestra los números utilizados en cada operación y su resultado

echo "La suma de " . $num1 . " y " . $num2 . " es " . $suma . "\n";
echo "La resta de " . $num1 . " y " . $num2 . " es " . $resta . "\n";
echo "La divisón de " . $num1 . " y " . $num2 . " es " . $division . "\n";
echo "La multiplicación de " . $num1 . " y " . $num2 . " es " . $multiplicacion . "\n";

?>