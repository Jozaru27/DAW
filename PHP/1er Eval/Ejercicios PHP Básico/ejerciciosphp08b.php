<?php

/** 
* @author Jose Zafrilla Ruiz jozaru27@gmail.com
* 
* 8. Genera un mensaje de modo que si el día actual es menor o igual que 15 muestre “primera
* quincena” mostrando “segunda quincena” en otro caso. 
* día
*/

// Similar al ejercicio anterior
// Pide un número por pantalla para guardarlo en una variable

$diaActual = readline();

// Dependiendo del número introducido, si es mayor o menor que 15, mostrará un texto u otro

if ($diaActual <= 15){
    echo "El día actual es " . $diaActual . " por ende, estamos en la primera quincena \n" ;
} else if ($diaActual > 15){
    echo "El día actual es " . $diaActual . " por ende, estamos en la segunda quincena \n";
}



?>