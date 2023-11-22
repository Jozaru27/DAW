<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 1. Elabora un programa que dado un carácter determine si es
 * 1. una letra mayúscula
 * 2. una letra minúscula
 * 3. un carácter numérico
 * 4. un carácter blanco
 * 5. un carácter de puntuación
 * 6. un carácter especial
 * 
 */

$char = readline("Introduzca un carácter por favor. \n");



switch ($char){
    case ctype_upper($char): 
        echo $char . " es una letra mayúscula. \n";
        break;
    case ctype_lower($char):
        echo $char . " es una letra minúscula. \n";
        break;
    case ctype_digit($char):
        echo $char . " es  un carácter numérico. \n";
        break;
    case ctype_space($char):
        echo $char . " es un carácter blanco. \n";
        break;
    case ctype_punct($char):
        echo $char . " es un carácter de puntuación. \n";
        break;
}

if (!ctype_alnum($char)){
    echo $char . " es un carácter especial. \n";
}

?>