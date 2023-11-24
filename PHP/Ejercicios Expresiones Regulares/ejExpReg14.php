<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * n) Genera el patrón para validar una dirección de email
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */
 /* La cadena se constituye de: [cualquier letra, dígito, guión bajo y/o puntos] + @ + [cualquier letra, dígito y guión bajo] + . + [Mínimo 2 carácteres alfabéticos] */
 /* El arroba y el punto están fuera de los corchetes para obligar a que estén */

 $patronExpresion = '/^[\w\.0-9]+@[\w]+\.[\w]{2,}$/u';
 $cadenaBuena = "javier.pintor@ieslasenia.com";
 $cadenaMala = "j.pintor-outlook.com";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "La dirección introducida es correcta \n";
 } else {
    echo "La dirección introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "La dirección introducida es correcta \n";
 } else {
   echo "La dirección introducida no es correcta \n";
 }

?>