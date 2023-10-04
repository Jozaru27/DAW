<?php
/**
 * @author Jose Zafrilla Ruiz jozaru27@gmail.com
 * 
 * 7. Escribe un programa que diga cuál es la última cifra de un número entero introducido por
 * teclado
*/

// Pide número por pantalla
$num = readline("Introduzca un número entero: ");

// Método con substring - Accede al último número
echo "El último número introducido es " . substr($num, -1) . "\n ";

// Método sacando unidades - Saca la última unidad del número
echo "EL último número introducido es " . $num%10 . "\n"

?>