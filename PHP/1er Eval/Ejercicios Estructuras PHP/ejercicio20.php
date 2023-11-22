<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 20. Elabora un programa que lea un número entero y escriba el número resultante de invertir el
* orden de sus cifras Puedes usar la función creada para el ejercicio 19
*
*/

// Pide el número por pantalla
$num = readline("Introduce un número por pantalla \n");

// Convierte el número en una cadena de carácteres
$numStr = (string)$num; 

// Invierte la cadena y la muestra por pantalla
echo "El número $num tiene invertido es " . strrev($numStr) ."\n";

?>