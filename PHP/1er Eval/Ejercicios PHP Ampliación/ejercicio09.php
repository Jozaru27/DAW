<?php
/**
 * @author Jose Zafrilla Ruiz jozaru27@gmail.com
 * 
 * 9. Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa.
 * Se permiten números de hasta 5 cifras
*/

// Pide un entero de 5 cifras máx. por pantalla
$num = readline("Introduzca un número entero por pantalla de hasta 5 cifras. \n");

// Inicialización de un boolean
$capicua = false;

// Comprobación del máximo de cifras & entero
if ($num <= 99999 && $num >= 0){

    // Comprobaciones dependiendo de la cantidad de cifras
    // Para números de una cifra
    if($num<10){
        $capicua = true;
    }

    // Para números de dos cifras
    if (($num >= 10) && ($num < 100)) {
      if (($num / 10) == ($num % 10)) {
        $capicua = true;
      }
    }

    // Para números de tres cifras
    if (($num >= 100) && ($num < 1000)) {
      if (($num / 100) == ($num % 10)) {
        $capicua = true;
      }
    }

    // Para números de cuatro cifras
    if (($num >= 1000) && ($num < 10000)) {
      if ((($num / 1000) == ($num % 10)) && ((( $num / 100 ) % 10)== (( $num / 10) % 10))) {
        $capicua = true;
      }
    }
    
    // Para números de cinco cifras
    if ($num >= 10000) {
      if ((($num / 10000) == ($num % 10) ) && (((($num / 1000) % 10)) == (($num / 10) % 10))) {
        $capicua = true;
      }
    }
    
    if ($capicua = true) {
      echo "El número introducido es capicúa. \n";
    } else {
      echo "El número introducido no es capicúa. \n";
    }

} else {
    echo "Error: Introduzca un número entero por pantalla de hasta 5 cifras. \n";
}



?>