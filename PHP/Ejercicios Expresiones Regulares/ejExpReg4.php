<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * d) Genera el patrón para un NIF
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 /* Hay NIEs con '/^[XYZ]?\d{7,8}[A-Z]$/'; */

 $patronExpresion = '/^\d{8}[A-Z]$/';
 $cadenaBuena = "12345678Z";
 $cadenaMala = "123A";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "El NIF introducido es correcto \n";
 } else {
    echo "El NIF introducido no es correcto \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "El NIF introducido es correcto \n";
 } else {
   echo "El NIF introducido no es correcto \n";
 }

?>