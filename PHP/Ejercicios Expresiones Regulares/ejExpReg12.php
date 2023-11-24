<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * l) Genera el patrón para texto en blanco, números, mayúsculas/minúsculas y caracteres acentuados
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */
 /* \p{L} permite cualquier letra en cualquier idioma, pero es importante añadir la 'u' al final, lo cual aplica el patrón a una cadena Unicode (para carácteres como acentos) */

 $patronExpresion = '/^[\s\p{L}0-9]+$/u';
 $cadenaBuena = "Increíble cadena con acentos espacios mayúsculas minúsculas y números 123";
 $cadenaMala = "Sin embargo, esta no es correcta, porque tiene puntos y comas.";

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