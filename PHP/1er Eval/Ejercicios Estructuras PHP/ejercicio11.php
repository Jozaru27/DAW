<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 11. Diseña un programa para imprimir los números impares menores que N
*/

// Pedir el valor de N
$N = readline("Introduce un número por favor \n");

echo "Números impares menores que $N:\n";

// Bucle: Mientras que la I inicializada en 1 sea menor que $N
// Si el resto de la división ente 2 no es 0 lo printea por pantalla
// la cadena vacía es para que haya separación
for ($i = 1; $i < $N; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
} echo "\n"

?>