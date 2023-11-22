<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 5. Diseña un programa que determine la cantidad total a pagar por una llamada telefónica de
 * acuerdo a las siguientes premisas: Toda llamada que dure menos de 3 minutos tiene un coste de
 * 10 céntimos. Cada minuto adicional a partir de los 3 primeros es un paso de contador y cuesta 5
 * céntimos.
 */

 $min = readline("Indica la duración de la llamada en minutos \n");
 
 if ($min <= 3){
    $coste = $min * 10;
    echo "El coste de la llamada de $min minutos es de $coste céntimos \n";
 } else {
    $coste = 3 * 10;
    $costeExtra = ($min - 3) * 5;
    $costeFinal = ($coste + $costeExtra);
    echo "El coste de la llamada de $min es de $costeFinal céntimos \n";
 }

?>
