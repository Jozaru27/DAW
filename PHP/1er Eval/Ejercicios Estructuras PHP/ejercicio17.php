<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 17. Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 3
* 
*/

// Se pide un número por pantalla

echo " Por favor, introduzca un número \n";
$num = readline();

// Si el resto de la operación (num entre 2) es 0, es par, si no, impar

if (($num % 2) == 0){
    echo "El número es par ";
} else {
    echo "El número es impar ";
}

// Si el resto de la operación (num entre 3) es 0, es divisible, si no, indivisible

if (($num % 3) == 0){
    echo "y divisible entre 3. \n";
} else {
    echo "e indivisible entre 3. \n";
}

?>