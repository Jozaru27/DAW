<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 6. Escribe un programa que lea tres números positivos y compruebe si son iguales. Por ejemplo:
 * Si la entrada fuese 5 5 5, la salida debería ser “hay tres números iguales a 5“.
 * Si la entrada fuese 4 6 4, la salida debería ser “hay dos números iguales a 4“.
 * Si la entrada fuese 0 1 2, la salida debería ser “no hay números iguales“
 */

$num1 = readline("Introduce un número positivo \n");
$num2 = readline("Introduce un número positivo \n");
$num3 = readline("Introduce un número positivo \n");

// El primer if comprueba que los números ingresados positivos
// Dentro del if, la primera opción comprueba que haya 3 iguales
// La segunda opción comprueba si hay dos iguales entre un número y los demás
// La tercera opción comprueba si hay dos iguales entre otro número y los demás
// Como no hace falta poner otra opción, ya que el otro número por descarte está hecho, se echo final en caso de que no coincidan

if ($num1 >= 0 && $num2 >= 0 && $num3 >= 0) {
    if ($num1 == $num2 && $num1 == $num3) {
        echo "Hay tres números iguales a $num1 \n";
    } elseif ($num1 == $num2 || $num1 == $num3) {
        echo "Hay dos números iguales a $num1 \n";
    } elseif ($num2 == $num1 || $num2 == $num3) {
        echo "Hay dos números iguales a $num2 \n";
    } else {
      echo "No hay números iguales \n";
    }
} else {
    echo "Por favor, ingresa números positivos. \n";
}

?>
