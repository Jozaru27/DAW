<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 15. Crea una función llamada permutaciones que reciba un vector $V y que cambie la posición de
* los elementos dicho vector haciendo permutaciones. Las permutaciones se harán entre los
* elementos $V[$N-1] y $V[0], $V[$N-2] y $V[1] , $V[$N-3] y $V[2] etc. siendo $N el tamaño
* del vector.
*
*/

// Función
function permutaciones(&$V) {
    // Obtiene el tamaño del vector
    $N = count($V);

    // Va iterando hasta la mitad del mismo
    for ($i = 0; $i < $N / 2; $i++) {
        // Guarda el valor actual en una variable temporal
        $temp = $V[$i];

        // Va intercambiando el valor actual con el que sería su "opuesto" del vector
        $V[$i] = $V[$N - 1 - $i];
        $V[$N - 1 - $i] = $temp;
    }
}

// Programa

echo "Introduce elementos para el vector. Presiona enter sin ningún valor para salir. ";
$vector = array();

// Bucle while con booleano para guardar los elementos en el vector. Al no poner nada sale del bucle
while (true) {
    $elementos = readline("Elemento:  ");
    if ($elementos === ""){
        break;
    }
    $vector[] = $elementos;
}

// Llama a la función y lo muestra por pantalla 
permutaciones($vector);
echo "Vector permutado: " . implode(', ', $vector);

?>