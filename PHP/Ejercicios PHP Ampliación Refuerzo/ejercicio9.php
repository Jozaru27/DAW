<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 9. Crear una matriz de tamaño 5x5 y rellenarla de la siguiente forma: la posición M[n,m] debe
 * contener n+m. Después se debe mostrar su contenido.
*/

// Creamos un array
$matriz = array();

// Usamos un bucle for para recorrer las filas, y otro anidado para recorrer las columnas
for ($fila = 0; $fila < 5; $fila++) {
    for ($columna = 0; $columna < 5; $columna++) {
        // Accedemos a la posición de la matriz bidimensional y le asignamos el valor igual a la suma de la fila y columna
        // Por ejemplo: fila 2 columna 3 (M[2,3]), es 2+3 = 5
        $matriz[$fila][$columna] = $fila + $columna;
    }
}

// Muestra el contenido de la matriz
// Con otro for anidado, recorremos todas las posiciones de filas y columnas
echo "Matriz 5x5: \n";
for ($fila = 0; $fila < 5; $fila++) {
    for ($columna = 0; $columna < 5; $columna++) {
        echo $matriz[$fila][$columna] . " ";
    }
    echo "\n";
}
?>