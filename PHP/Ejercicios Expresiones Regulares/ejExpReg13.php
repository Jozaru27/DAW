<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * m) Genera el patrón para el caso anterior añadiendo los signos de puntuación: comillas simples, coma, punto, punto y coma, dos puntos y guiones
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 $patronExpresion = '/^[\s\p{L}0-9\'",;.:-]+$/u';
 $cadenaBuena = "INCREÍBLE demostración: de lo que , , ' ' se pide en el enunciado; un poco de todo... - 123";
 $cadenaMala = "Sin embargo !!! Estos carácteres no entran en el patrón@@@###~~~%%%";

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