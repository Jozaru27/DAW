<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 9. Genera un número entre 1 y 15 y calcula su factorial. Nota: El factorial de un número es la
* multiplicación de él mismo con sus anteriores. Ejemplo 3!=3*2*1=6
*/

// Declara un número aleatorio entre 1-15 
$num = rand(1, 15); "\n";
    
// Calculadora de factorial
$factorial = 1;
for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}

echo "El factorial de $num es $factorial \n";

?>
