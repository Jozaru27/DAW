<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * Estructura Barcos
 * Almacenar en un array asociativo los barcos y sus datos
 * Recorrer el array para mostrar la información
 * 
 * 
 */

// Array asociativo para los barcos, indicando su tamaño, celda inicial y orientación
$barcos = array(
    "b1" => array("tamaño" => 4, "fila" => 1, "columna" => 1, "orientacion" => "horizontal"),
    "b2-1" => array("tamaño" => 3, "fila" => 6, "columna" => 1, "orientacion" => "vertical"),
    "b2-2" => array("tamaño" => 3, "fila" => 3, "columna" => 4, "orientacion" => "vertical"),
    "b3-1" => array("tamaño" => 2, "fila" => 0, "columna" => 6, "orientacion" => "horizontal"),
    "b3-2" => array("tamaño" => 2, "fila" => 2, "columna" => 3, "orientacion" => "vertical"),
    "b3-3" => array("tamaño" => 2, "fila" => 8, "columna" => 2, "orientacion" => "vertical"),
    "b4-1" => array("tamaño" => 1, "fila" => 5, "columna" => 5, "orientacion" => "vertical"),
    "b4-2" => array("tamaño" => 1, "fila" => 6, "columna" => 7, "orientacion" => "vertical"),
    "b4-3" => array("tamaño" => 1, "fila" => 7, "columna" => 3, "orientacion" => "vertical"),
    "b4-4" => array("tamaño" => 1, "fila" => 8, "columna" => 5, "orientacion" => "vertical")
);

print $barcos["b1"]["tamaño"];

// foreach ($barcos as $item => $value){
//     echo $item . ": " . $value;
// }

?>