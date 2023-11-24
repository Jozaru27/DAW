<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * k) Genera el patrón para números con espacios
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 $patronExpresion = '/^[\d\s]+$/';
 $cadenaBuena = "123 456";
 $cadenaMala = "123456";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
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