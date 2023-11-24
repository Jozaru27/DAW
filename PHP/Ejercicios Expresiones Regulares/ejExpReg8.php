<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * h) Genera el patrón para una cadena que contenga aprobado tanto en mayúsculas como en minúsculas
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 $patronExpresion = '/.*aprobado.*/i';
 $cadenaBuena = "Adrián está ApRoBaDo, ¿sabes?";
 $cadenaMala = "Adrián está aproobado";

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