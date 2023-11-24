<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * b) Genera el patrón para los códigos postales de la Comunidad Valenciana
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 $patronExpresion = '/^(03|12|46)\d{3}$/';
 $cadenaBuena = "46389";
 $cadenaMala = "32121";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "El código postal introducido es correcto \n";
 } else {
    echo "El código postal introducido no es correcto \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "El código postal introducido es correcto \n";
 } else {
   echo "El código postal introducido no es correcto \n";
 }

?>