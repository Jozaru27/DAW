<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 9. Crear una matriz de tamaño 5x5 y rellenarla de la siguiente forma: la posición M[n,m] debe
 * contener n+m. Después se debe mostrar su contenido.
*/

// Creamos los 3 vectores
$vector1 = array();
$vector2 = array();
$vector3 = array();

// Este bucle for lee por pantalla hasta 10 veces un número, guardándolo en el primer vector
for ($i = 0; $i < 10; $i++) {
    echo "Introduzca un número para el primer vector: \n";
    $numero = readline();
    $vector1[] = $numero;
}

// Este bucle for lee por pantalla hasta 10 veces un número, guardándolo en el segundo vector
for ($i = 0; $i < 10; $i++) {
    echo "Introduzca un número para el segundo vector: \n";
    $numero = readline();
    $vector2[] = $numero;
}

// Este bucle for va metiendo en el tercer vector, los números de las posiciones actuales ($i) del primer y el segundo vector. Lo hace 10 veces, por lo que recorre las 10 posiciones
for ($i = 0; $i < 10; $i++) {
    $vector3[] = $vector1[$i];
    $vector3[] = $vector2[$i];
}

// Muestra por pantalla, añadiendo como separador una coma y un espacio
echo "Tercer Vector: " . implode(', ', $vector3) . " \n";

?>