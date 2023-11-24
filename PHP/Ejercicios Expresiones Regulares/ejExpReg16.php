<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * p) Genera el patrón para validar una contraseña con al menos un carácter en minúscula, una mayúscula, un número y al menos 6 caracteres de longitud
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */
 /* ?=.* es un "positive lookahead". Asegura que en algún lugar de la cadena haya al menos cada uno de los carácteres especificados */
 /* Se pide eso para letras en minúsculas, mayúsculas, y números. Además al final se exige que haya un mínimo de 6 de entre todos esos */

 $patronExpresion = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/';
 $cadenaBuena = "Contraseña123";
 $cadenaMala = "passw";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "La contraseña introducida es correcta \n";
 } else {
    echo "La contraseña introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "La contraseña introducida es correcta \n";
 } else {
   echo "La contraseña introducida no es correcta \n";
 }

?>