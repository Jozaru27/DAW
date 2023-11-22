<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 18. Escribe un programa que diga cuál es la cifra que está en el centro (o las dos del centro si el
*  número de cifras es par) de un número entero introducido por teclado
*/

// Pide el número por pantalla
$num = readline("Introduce un número por pantalla \n");

// Convierte el número en una cadena de carácteres
$numStr = (string)$num; 

// Saca el tamaño de la cadena
$longitud = strlen($numStr);

// Si la cifra tiene un número par de dígitos (el resto entre 2 == 0), mostramos las dos cifras del centro,
// si es impar (el resto entre 2 =/= 0), muestra el del medio.
// Con longitud / 2 sacamos la cifra del centro, aunque si es par, sacamos una del medio a la derecha. Con length / 2 -1 sacamos también la de antes
if ($longitud % 2 == 0) {
    $centro1 = $numStr[$longitud / 2 - 1];
    $centro2 = $numStr[$longitud / 2];
    echo "Las cifras centrales son: " . $centro1 . " y " . $centro2 ."\n";
} else {
    $centro = $numStr[(int)($longitud / 2)];
    echo "La cifra central es: " . $centro ."\n";
}

?>