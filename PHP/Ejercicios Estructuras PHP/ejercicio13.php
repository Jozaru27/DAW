<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 13. Escribe una función que calcule A elevado a B, siendo A y B números enteros
*
*/

$A = readline("Introduce un número entero para hacer de base \n");
$B = readline("Introduce un número entero para hacer de exponente \n");

echo "$A^$B = " . pow($A, $B) . "\n";

?>