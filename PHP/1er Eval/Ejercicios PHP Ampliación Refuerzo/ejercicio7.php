<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 7. Define tres arrays de 20 números enteros cada uno, con nombres “numero”, “cuadrado” y
 * “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se
 * deben almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo”
 * se deben almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el
 * contenido de los tres arrays dispuesto en tres columnas
 */

$numero = array();
$cuadrado = array();
$cubo = array();

// Este bucle for carga el array con valores aleatorios, entre 0 y 100, un máximo de 20 veces. Luego calcula y guarda tanto el cuadrado como el cubo
for ($i = 0; $i < 20; $i++) {
    $numero[$i] = rand(0, 100);
    $cuadrado[$i] = $numero[$i] ** 2; 
    $cubo[$i] = $numero[$i] ** 3;    
}

// Imprime por pantalla los datos en formato tabular utilizando printf
// El echo funciona a modo de cabecera (\t = tabular valores)
echo "Número\tCuadrado\tCubo \n";

// Bucle for que recorre las filas de datos imprimiendo los valores
// Se separa con las tabulaciones
for ($i = 0; $i < 20; $i++) {
    printf("%d\t%d\t\t%d \n", $numero[$i], $cuadrado[$i], $cubo[$i]);
}

?>
