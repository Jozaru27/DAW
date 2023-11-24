<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * o) Genera el patrón para validar una URL sencilla (http://www.ieslasenia.org/ejercicio?16)
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */
 /* La cadena se constituye de: un encabezado o bien http o https + dos puntos y barras laterales + nombre de dominio compuesto de letras, números, puntos y/o guiones */
 /* + un punto para separar el nombre de domino de la extensión + una extensión de dominio de mínimo 2 carácteres alfabéticos + la barra diagonal que separa el dominio de la ruta */
 /* + una ruta que puede contener letras, números, barras, interrogante, el símbolo igual y ampersand + */

 $patronExpresion = '/^(http|https):\/\/[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}\/[a-zA-Z0-9\/?=&]+$/';
 $cadenaBuena = "http://www.ieslasenia.org/ejercicio?16";
 $cadenaMala = "http://www.ieslasenia.org?dominio con espacios";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "La URL introducida es correcta \n";
 } else {
    echo "La URL introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "La URL introducida es correcta \n";
 } else {
   echo "La URL introducida no es correcta \n";
 }

?>