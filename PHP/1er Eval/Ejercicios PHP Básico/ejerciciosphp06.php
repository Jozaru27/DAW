<?php

/** 
* @author Jose Zafrilla Ruiz jozaru27@gmail.com
* 
* 6. Calcula la media de varios números (mínimo 5) y redondea el resultado. Muestra los números
* introducidos y el resultado
*/

// Pide cinco numeros por pantalla

$num1 = readline("Introduce un número: \n");
$num2 = readline("Introduce un número: \n");
$num3 = readline("Introduce un número: \n");
$num4 = readline("Introduce un número: \n");
$num5 = readline("Introduce un número: \n");

// Guarda el resultado de la suma de los números
// Los muestra por pantalla, además de la media de los mismos

$operacion = $num1 + $num2 + $num3 + $num4 + $num5;
echo "Siendo los números introducidos: $num1, $num2, $num3, $num4 y $num5, la media de ellos es " . $media = $operacion/5 . "\n";

?>