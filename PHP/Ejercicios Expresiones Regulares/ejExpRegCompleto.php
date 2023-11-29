<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * a) Genera el patrón para los teléfonos fijos de la provincia de Valencia
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "A)\n";

 $patronExpresion = '/^96\d{7}$/';
 $cadenaBuena = "962522525";
 $cadenaMala = "9625";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "El número introducido es correcto \n";
 } else {
    echo "El número introducido no es correcto \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "El número introducido es correcto \n";
 } else {
   echo "El número introducido no es correcto \n";
 }

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * b) Genera el patrón para los códigos postales de la Comunidad Valenciana
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "B)\n";

 $patronExpresion = '/^(03|12|46)\d{3}$/';
 $cadenaBuena = "46389";
 $cadenaMala = "32121";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "El código postal introducido es correcto \n";
 } else {
    echo "El código postal introducido no es correcto \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "El código postal introducido es correcto \n";
 } else {
   echo "El código postal introducido no es correcto \n";
 }

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * c) Genera el patrón para los teléfonos móviles
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "C)\n";

 $patronExpresion = '/^(6|7)\d{8}$/';
 $cadenaBuena = "612345678";
 $cadenaMala = "512345678";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "El número de teléfono introducido es correcto \n";
 } else {
    echo "El número de teléfono introducido no es correcto \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "El número de teléfono introducido es correcto \n";
 } else {
   echo "El número de teléfono introducido no es correcto \n";
 }

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * d) Genera el patrón para un NIF
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */
 /* Hay NIEs con '/^[XYZ]?\d{7,8}[A-Z]$/'; */

 echo "D)\n";

 $patronExpresion = '/^\d{8}[A-Z]$/';
 $cadenaBuena = "12345678Z";
 $cadenaMala = "123A";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "El NIF introducido es correcto \n";
 } else {
    echo "El NIF introducido no es correcto \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "El NIF introducido es correcto \n";
 } else {
   echo "El NIF introducido no es correcto \n";
 }

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * e) Genera el patrón para fecha en formato dd/mm/aaaa o bien dd-mm-aaaa
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "E)\n";

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

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * f) Genera el patrón para una cadena que sea aprobado (puede ser mayúsculas o minúsculas)
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */
 /* En este uso dos, para demostrar que se puede escribir tanto en mayúsculas como en minúsculas - Con la i marcamos que la cadena no sea case sensitive*/

 echo "F)\n";

 $patronExpresion = '/^aprobado$/i';
 $cadenaBuena1 = "aprobado";
 $cadenaBuena2 = "APROBADO";
 $cadenaMala = "reprobado";

 if (preg_match($patronExpresion, $cadenaBuena1) === 1){
    echo "La cadena introducida es correcta \n";
 } else {
    echo "La cadena introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaBuena2) === 1){
    echo "La cadena introducida es correcta \n";
 } else {
    echo "La cadena introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "La cadena introducida es correcta \n";
 } else {
   echo "La cadena introducida no es correcta \n";
 }

 echo "\n\n";
?>

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

 echo "G)\n";

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

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * h) Genera el patrón para una cadena que contenga aprobado tanto en mayúsculas como en minúsculas
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "H)\n";

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

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * i) Genera el patrón para letras mayúsculas/minúsculas y espacios
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "I)\n";

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

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * j) Genera el patrón para solamente números, sin espacios
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "J)\n";

 $patronExpresion = '/^\d+$/';
 $cadenaBuena = "12345";
 $cadenaMala = "Patata 123";

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

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * k) Genera el patrón para números con espacios
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "K)\n";

 $patronExpresion = '/^[\d\s]+$/';
 $cadenaBuena = "123 456";
 $cadenaMala = "123456";

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

 echo "\n\n";
?>

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

 echo "L)\n";

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

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * m) Genera el patrón para el caso anterior añadiendo los signos de puntuación: comillas simples, coma, punto, punto y coma, dos puntos y guiones
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "M)\n";

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

 echo "\n\n";
?>

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

 echo "N)\n";

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

 echo "\n\n";
?>

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

 echo "O)\n";

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

 echo "\n\n";
?>

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

 echo "P)\n";

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

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * q) Genera el patrón para validar una IPv4
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "Q)\n";

 $patronExpresion = '/^((25[0-5]|2[0-4][0-9]|[0-1]?[0-9]{1,2})\.){3}(25[0-5]|2[0-4][0-9]|[0-1]?[0-9]{1,2})$/';
 $cadenaBuena = "192.168.0.1";
 $cadenaMala = "255.255.256.0";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "La IP introducida es correcta \n";
 } else {
    echo "La IP introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "La IP introducida es correcta \n";
 } else {
   echo "La IP introducida no es correcta \n";
 }

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * r) Genera el patrón para validar una MAC separada por :
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "R)\n";

 $patronExpresion = '/^([0-9A-Fa-f]{2}:){5}[0-9A-Fa-f]{2}$/';
 $cadenaBuena = "00:1A:2B:3C:4D:5E";
 $cadenaMala = "123:456:789:ABC";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "La MAC introducida es correcta \n";
 } else {
    echo "La MAC introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "La MAC introducida es correcta \n";
 } else {
   echo "La MAC introducida no es correcta \n";
 }

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * s) Genera el patrón para validar una MAC separada por -
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "S)\n";

 $patronExpresion = '/^([0-9A-Fa-f]{2}-){5}[0-9A-Fa-f]{2}$/';
 $cadenaBuena = "00-1A-2B-3C-4D-5E";
 $cadenaMala = "123-456-789-ABC";

 if (preg_match($patronExpresion, $cadenaBuena) === 1){
    echo "La MAC introducida es correcta \n";
 } else {
    echo "La MAC introducida no es correcta \n";
 }

 if (preg_match($patronExpresion, $cadenaMala) === 1){
   echo "La MAC introducida es correcta \n";
 } else {
   echo "La MAC introducida no es correcta \n";
 }

 echo "\n\n";
?>

<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * t) Genera el patrón para validar una matrícula de vehículo española
 * 
 */

 /* Para los ejercicios, haré las comprobaciones con una cadena que funcione con el patrón proporcionado, y con otra que no */

 echo "T)\n";

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

 echo "\n\n";
?>