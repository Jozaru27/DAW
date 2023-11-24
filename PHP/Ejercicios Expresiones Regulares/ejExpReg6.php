<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * f) Genera el patrón para una cadena que sea aprobado (puede ser mayúsculas o minúsculas)
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */
 /* En este uso dos, para demostrar que se puede escribir tanto en mayúsculas como en minúsculas - Con la i marcamos que la cadena no sea case sensitive*/

 $patronExpresion = '/^aprobado$/i';
 $cadenaBuena1 = "aprobado";
 $cadenaBuena2 = "APROBADO";
 $cadenaMala = "reprobado";

 if (preg_match($patronExpresion, $cadenaBuena1) === 1){
    echo "La cadena introducida es correcta \n";
 } else {
    echo "La cadena introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaBuena2) === 1){
    echo "La cadena introducida es correcta \n";
 } else {
    echo "La cadena introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "La cadena introducida es correcta \n";
 } else {
   echo "La cadena introducida no es correcta \n";
 }

?>