<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * a) Genera el patrón para los teléfonos fijos de la provincia de Valencia
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 $patronExpresion = '/^96\d{7}$/';
 $cadenaBuena = "962522525";
 $cadenaMala = "9625";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "El número introducido es correcto \n";
 } else {
    echo "El número introducido no es correcto \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "El número introducido es correcto \n";
 } else {
   echo "El número introducido no es correcto \n";
 }

?>