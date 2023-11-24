<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * j) Genera el patrón para solamente números, sin espacios
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 $patronExpresion = '/^\d+$/';
 $cadenaBuena = "12345";
 $cadenaMala = "Patata 123";

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