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

// Array asociativo para los barcos, indicando su tamaño, celda inicial (fila y columna), y orientación
$barcos = array(
    "b1" => array("tamaño" => 4, "fila" => 1, "columna" => 1, "orientacion" => "0"),
    "b2-1" => array("tamaño" => 3, "fila" => 6, "columna" => 1, "orientacion" => "1"),
    "b2-2" => array("tamaño" => 3, "fila" => 3, "columna" => 4, "orientacion" => "1"),
    "b3-1" => array("tamaño" => 2, "fila" => 0, "columna" => 6, "orientacion" => "0"),
    "b3-2" => array("tamaño" => 2, "fila" => 2, "columna" => 3, "orientacion" => "1"),
    "b3-3" => array("tamaño" => 2, "fila" => 8, "columna" => 2, "orientacion" => "1"),
    "b4-1" => array("tamaño" => 1, "fila" => 5, "columna" => 5, "orientacion" => "1"),
    "b4-2" => array("tamaño" => 1, "fila" => 6, "columna" => 7, "orientacion" => "1"),
    "b4-3" => array("tamaño" => 1, "fila" => 7, "columna" => 3, "orientacion" => "1"),
    "b4-4" => array("tamaño" => 1, "fila" => 8, "columna" => 5, "orientacion" => "1")
);

print $barcos["b1"]["tamaño"];

 foreach ($barcos as $barco => $datos){

     echo "El barco $barco tiene como datos: \n";
     echo "Un tamaño de: " . $datos["tamaño"] . " celdas \n";
     echo "Está situado en la fila: " . $datos["fila"] . "\n";
     echo "Está situado en la columna:  " . $datos["columna"] . "\n";

     $datos["orientacion"] = ($datos["orientacion"] == 0) ? "horizontal" : "vertical";
     
     echo "Su orientación es : " . $datos["orientacion"] . "\n";
     echo "\n\n";
}


?>