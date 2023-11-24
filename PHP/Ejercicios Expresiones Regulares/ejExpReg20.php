<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * t) Genera el patrón para validar una matrícula de vehículo española
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 $patronExpresion = '/^[0-9]{4}\s[B-DF-HJ-NP-TV-Z]{3}$/';
 $cadenaBuena = "1234 BDZ";
 $cadenaMala = "1234 ABC";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "La matrícula introducida es correcta \n";
 } else {
    echo "La matrícula introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "La matrícula introducida es correcta \n";
 } else {
   echo "La matrícula introducida no es correcta \n";
 }

?>