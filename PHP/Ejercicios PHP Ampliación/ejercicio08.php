<?php
/**
 * @author Jose Zafrilla Ruiz jozaru27@gmail.com
 * 
 * 8. Escribe un programa que diga cuál es la primera cifra de un número entero introducido por
 * teclado. Se permiten números de hasta 5 cifras.
*/

// Pide número por pantalla
$num = readline("Introduzca un número entero: ");

// Si el número introducido está entre 0 y 99999, indica que es entero y con máximo 5 cifras, por ende procede a mostrar el primer número introducido
if ($num <= 99999 && $num >= 0){
    echo "El primer número introducido es " . substr($num, -0,1) . "\n ";
} else {
    echo "Máximo 5 cifras enteros \n";
}

?>