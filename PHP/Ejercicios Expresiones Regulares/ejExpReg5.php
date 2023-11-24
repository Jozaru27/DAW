<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * e) Genera el patrón para fecha en formato dd/mm/aaaa o bien dd-mm-aaaa
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 $patronExpresion = '/^(0[1-9]|[1-2][0-9]|3[0-1])\/(0[1-9]|1[0-2])\/(\d{4})$/';
 $cadenaBuena = "27/11/2001";
 $cadenaMala = "32/13/123";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "La fecha introducida es correcta \n";
 } else {
    echo "La fecha introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "La fecha introducida es correcta \n";
 } else {
   echo "La fecha introducida no es correcta \n";
 }

?>