<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * i) Genera el patrón para letras mayúsculas/minúsculas y espacios
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 $patronExpresion = '/^[a-zA-Z\s]+$/';
 $cadenaBuena = "Asombroso Primer Texto de Ejemplo";
 $cadenaMala = "EstoEsTerribleHayNúmeros123";

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