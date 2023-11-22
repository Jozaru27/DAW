<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 10. Genera un número entre 1 y 20 y calcula su sumatorio. Nota: El sumatorio de un número es la
* suma de él mismo con sus anteriores. Ejemplo ∑3=3+2+1=
*/

// Declara un número aleatorio entre 1-15 
$num = rand(1, 20); "\n";
    
// Calcula el sumatorio
$sumatorio = 0;
for ($i = 1; $i <= $num; $i++) {
    $sumatorio += $i;
}

echo "El sumatorio de $num es $sumatorio\n";
?>