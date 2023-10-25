<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 11. Crear y rellenar una tabla de tamaño 10x10, mostrar la suma de cada fila y de cada columna
 */


// Crear una matriz
$matriz = array();

// El bucle for tiene otro bucle for anidado. Ambos recorren 10 posiciones, filas y columnas
// Crea la matriz de 10x10 y la rellena con números aleatorios ente 1 y 100
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}
 
// Muestra el contenido de la matriz, filas y columnas, cada una de las posiciones
echo "Matriz 10x10: \n";
for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 10; $j++) {
        echo $matriz[$i][$j] . "\t";
    }
    echo "\n";
}

// Calcula y muestra la suma de cada fila. Recorre cada fila y lo suma. Lo guarda en una variable que luego muestra
echo "Suma de cada fila: \n";
for ($i = 0; $i < 10; $i++) {
    $filaSuma = array_sum($matriz[$i]);
    echo "Fila $i: $filaSuma \n";
}

// Calcula y muestra la suma de cada columna. Recorre cada columna y lo suma. Lo guarda en una variable que luego muestra
echo "Suma de cada columna: \n";
for ($j = 0; $j < 10; $j++) {
    $columnaSuma = 0;
    for ($i = 0; $i < 10; $i++) {
        $columnaSuma += $matriz[$i][$j];
    }
    echo "Columna $j: $columnaSuma \n";
}

?>