<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 13. Escribe una función que calcule A elevado a B, siendo A y B números enteros
*
*/

// Pide dos números por pantalla
$A = readline("Introduce un número entero para hacer de base \n");
$B = readline("Introduce un número entero para hacer de exponente \n");

// Pow calcula la potencia, en base al primer número y al segundo
echo "$A^$B = " . pow($A, $B) . "\n";

?>
