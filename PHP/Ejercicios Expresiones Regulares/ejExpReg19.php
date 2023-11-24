<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * s) Genera el patrón para validar una MAC separada por -
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 $patronExpresion = '/^([0-9A-Fa-f]{2}-){5}[0-9A-Fa-f]{2}$/';
 $cadenaBuena = "00-1A-2B-3C-4D-5E";
 $cadenaMala = "123-456-789-ABC";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "La MAC introducida es correcta \n";
 } else {
    echo "La MAC introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "La MAC introducida es correcta \n";
 } else {
   echo "La MAC introducida no es correcta \n";
 }

?>