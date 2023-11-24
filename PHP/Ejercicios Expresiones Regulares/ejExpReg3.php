<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * c) Genera el patrón para los teléfonos móviles
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 $patronExpresion = '/^(6|7)\d{8}$/';
 $cadenaBuena = "612345678";
 $cadenaMala = "512345678";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "El número de teléfono introducido es correcto \n";
 } else {
    echo "El número de teléfono introducido no es correcto \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "El número de teléfono introducido es correcto \n";
 } else {
   echo "El número de teléfono introducido no es correcto \n";
 }

?>