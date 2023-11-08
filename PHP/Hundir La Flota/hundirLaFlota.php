<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * Hundir la Flota
 * 
 * 
 */

 // Inicialización de la matriz, las filas y columnas.
 $matriz = array();
 $filas = 8;
 $columnas = 8;

 // Inicialización de los barcos y las posiciones.
 $b1 = [1,1,1,1];
 $b2 = [1,1,1];
 $b3 = [1,1];
 $b4 = [1];

 // Inicialización de los contadores de barcos e intentos.
 $barcos = 10;
 $intentos = 0;


 // Crea el tablero. Una matriz de 8x8 donde todas las celdas son 0 (agua).
 for ($i = 0; $i <$filas; $i++){
    for ($j = 0; $j <$columnas; $j++){
        $matriz[$i][$j] = 0;
    }
 }


// Muestra el tablero
echo "\nTablero:\n";
for ($i = 0; $i < $filas; $i++) {
    for ($j = 0; $j < $columnas; $j++) {
        echo $matriz[$i][$j] . "\t";
    }
    echo "\n";
}

// Coloca los barcos en posición fija 
$matriz = array(
    array(1, 1, 1, 1, 0, 1, 1, 0),
    array(0, 0, 0, 0, 0, 0, 0, 1),
    array(0, 1, 0, 1, 1, 1, 0, 1),
    array(0, 1, 0, 0, 0, 0, 0, 0),
    array(0, 0, 0, 0, 1, 0, 0, 0),
    array(1, 0, 0, 0, 0, 0, 1, 0),
    array(1, 0, 1, 0, 0, 0, 0, 0),
    array(1, 0, 0, 0, 1, 0, 0, 0)
);

// Mientras queden barcos, solicitará coordenadas de disparo
while ($barcos > 0){
    echo "\nPor favor, introduzca las coordenadas para disparar al tablero [1-8]x[1-8]\n";
    $coordFil = readline("Fila:");
    $coordCol = readline("Columna:");
    $intentos++;

    // Si toca un barco con 1, lo pasa a -1, si es 0 o 2 muestra otra cosa
    if ($matriz[$coordFil][$coordCol] == 1){
        echo "Tocado! \n";
        $matriz[$coordFil][$coordCol] = -1;
        // Comprobar si tiene aún celdas con 1 alrededor para confirmar el hundido - Falta por perfilar
        //if ($matriz[$coordFil-1][$coordCol-1] !== 1 && $matriz[$coordFil-1][$coordCol] !== 1 && $matriz[$coordFil-1][$coordCol+1] !== 1 && $matriz[$coordFil][$coordCol-1] !== 1 && $matriz[$coordFil+1][$coordCol-1] !== 1 && $matriz[$coordFil+1][$coordCol+1] !== 1){
        //    echo "Y hundido! \n"; 
        //}
    } else if ($matriz[$coordFil][$coordCol] == 0){
        echo "Agua... \n";
    } else if ($matriz[$coordFil][$coordCol] == 2){
        echo "De nada servirá reducir los restos a cenizas... \n";
    }

    // Mostrar tablero en caso de que haya 1, lo pasa a 0 - Falta por perfilar
    /*echo "\nTablero:\n";
    for ($i = 0; $i < $filas; $i++) {
        for ($j = 0; $j < $columnas; $j++) {
            if ($matriz[$i][$j] == 1){
                $matriz[$i][$j] = 0;
            }
            echo $matriz[$i][$j] . "\t";
        }
        echo "\n";
    }*/

}

// Pantalla de puntuación - Se muestra cuando el número de barcos restantes es 0
if ($barcos == 0){
    echo "Fin del juego !! \n";
    echo "Puntuación: \n";
    echo "Total de Intentos ...: \t $intentos \n";

    switch ($intentos){
        case $intentos <= 20:
            $clasificación = "Master";
            break;
        case $intentos <= 30:
            $clasificación = "Expert";
            break;
        case $intentos < 50:
            $clasificación = "Casual";
            break;
        case $intentos >= 50:
            $clasificación = "Noob";
            break;
    }

    echo "Clasificación     ...: \t $clasificación \n";
}




// Ignora esto

 /*// Coloca los barcos en posición fija.
 // 1 Barco Grande
 $matriz[0][0] = $b1;
 $matriz[0][1] = $b1;
 $matriz[0][2] = $b1;
 $matriz[0][3] = $b1;
*/


 /*

 $vertical = "V";
 $horizontal = "H";

 $b1Left = 1;
 $b2Left = 2;
 $b3Left = 3;
 $b4Left = 4;

 // FUNCIONES para tablero Dinámico
 // Función para solicitar barco a añadir
 function elegirBarco(){
    echo "Indica qué barcos quieres colocar: \n";
    echo "1 - 4 Celdas \n";
    echo "2 - 3 Celdas \n";
    echo "3 - 2 Celdas \n";
    echo "4 - 1 Celda \n";
    $barcoAColocar = readline();
    
    if ($barcoAColocar = 1) {
        $barcoAColocar = $b1;
    } else if ($barcoAColocar = 2) {
        $barcoAColocar = $b2;
    } else if ($barcoAColocar = 3) {
        $barcoAColocar = $b3;
    } else if ($barcoAColocar = 4) {
        $barcoAColocar = $b4;
    }
    return $barcoAColocar;
 }

 // Función para solicitar posición del barco
 function posicionBarco(){
    echo "Indica dónde quieres colocar el barco en la axis \n";
    $celdaInicial = readline("Indica la celda inicial del barco \n");
    $direccionBarco = readline("Indica dónde quieres colocar el barco en la axis \n");
 } */


?>