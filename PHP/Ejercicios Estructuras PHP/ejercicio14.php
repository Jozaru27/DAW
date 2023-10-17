<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 14. Escribe una función que calcule todas las potencias de un número hasta llegar al exponente
* indicado, las almacene en un vector y muestre el resultado de cada potencia indicando además
* la suma de todas las potencias incluyendo la del exponente indicado
*
*/

$A = readline("Introduce un número entero para hacer de base \n");
$B = readline("Introduce un número entero para hacer de exponente \n");

// Vector para las potencias
$potencias = array();

// Bucle que recorre hasta llegar al número exponente.
// En una variable, hace como potencia el número base más y el número $i (que se va sumando cada bucle),
// lo muestra por pantalla y luego lo guarda en el vector antes de volver a empezar.
for ($i = 1; $i <= $B; $i++) {
    $res = pow($A, $i);
    echo "$A^$i = $res \n";
    $potencias[] = $res; 
}

// Suma de todas las potencias en el vector
$suma = array_sum($potencias);

// Muestra la suma por pantalla
echo "La suma de todas las potencias es: $suma\n";

?>
