<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * q) Genera el patrón para validar una IPv4
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 $patronExpresion = '/^((25[0-5]|2[0-4][0-9]|[0-1]?[0-9]{1,2})\.){3}(25[0-5]|2[0-4][0-9]|[0-1]?[0-9]{1,2})$/';
 $cadenaBuena = "192.168.0.1";
 $cadenaMala = "255.255.256.0";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "La IP introducida es correcta \n";
 } else {
    echo "La IP introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "La IP introducida es correcta \n";
 } else {
   echo "La IP introducida no es correcta \n";
 }

?>