<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 21. Escribe un programa que diga cuál es la penúltima cifra de un número entero introducido por
* teclado. Se permiten números de hasta 5 cifras. Puedes usar la función creada para el ejercicio 19
*
*/

// Pide el número por pantalla
$num = readline("Introduce un número por pantalla \n");

// Convierte el número en una cadena de carácteres
$numStr = (string)$num; 

// Comprueba que el número tenga 5 cifras
if (strlen($numStr) <= 5){
    // Guarda en una variable, el número en la penúltima posición (total length - 2 posiciones)
    $penultimaCifra = $numStr[strlen($numStr) - 2];

    // Muestra por pantalla
    echo "El penúltimo número de $num es " . $penultimaCifra ."\n";
} else {
    echo "Introduzca un número con menos de 5 cifras \n";
}


?> 