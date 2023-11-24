<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * g) Genera el patrón para una cadena que contenga aprobado en minúsculas
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */
 /* Ya que pide una cadena que contenga, con los asteriscos marcamos que puede estar metido entre más texto */

 $patronExpresion = '/.*aprobado.*/';
 $cadenaBuena = "He aprobado todo";
 $cadenaMala = "HE APROBADO TODO";

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