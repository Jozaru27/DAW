<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 19. Realiza un programa que nos diga cuántos dígitos tiene un número dado
*/

// Pide el número por pantalla
$num = readline("Introduce un número por pantalla \n");

// Convierte el número en una cadena de carácteres
$numStr = (string)$num; 

// Saca el tamaño de la cadena
echo "El número $num tiene una longitud de " .strlen($numStr) ." digitos\n";

?>