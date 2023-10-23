<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 10. Crear y rellenar por teclado dos matrices de tamaño 3x3, sumarlas y mostrar su suma.
*/

// Creamos dos matrices para almacenar los valores y otra para almacenar la suma
$matriz1 = array();
$matriz2 = array();
$sumaMatrices = array();

// Rellenamos la matriz por teclado.
// Con dos bucles for anidados, recorremos las filas y las columnas.
// Por cada posición, pide el valor por teclado y lo almacena en la matriz.
echo "Rellena la primera matriz (3x3): \n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "Ingresa el valor para la posición [$i][$j]: ";
        $matriz1[$i][$j] = (int)readline();
    }
}

// Hace exactamente lo mismo que la sección anterior, pero para la segunda matriz.
echo "Rellena la segunda matriz (3x3): \n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "Ingresa el valor para la posición [$i][$j]: ";
        $matriz2[$i][$j] = (int)readline();
    }
}

// Recorre todas las posiciones de la tercera matriz.
// Suma los valores de todas las mismas posiciones de las otras dos matrices y los guarda en esta.
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $sumaMatrices[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
    }
}

// Muestra la matriz con los resultados de las sumas por pantalla
// Recorre todas las filas y columnas mostrando los valores separados por un espacio
echo "La suma de las dos matrices es: \n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $sumaMatrices[$i][$j] . " ";
    }
    echo "\n";
}

?>
