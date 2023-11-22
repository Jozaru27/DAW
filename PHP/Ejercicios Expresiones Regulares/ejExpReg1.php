<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * a) Genera el patrón para los teléfonos fijos de la provincia de Valencia
 * 
 */

 $patronExpresion = '^\+3496\d{6}$';
 $cadenaBuena = "";


 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "El número introducido es correcto";
 } else {
    echo "El número introducido no es correcto";
 }

?>