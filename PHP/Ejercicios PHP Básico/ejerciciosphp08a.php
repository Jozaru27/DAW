<?php

/** 
* @author Jose Zafrilla Ruiz jozaru27@gmail.com
* 
* 8. Genera un mensaje de modo que si el día actual es menor o igual que 15 muestre “primera
* quincena” mostrando “segunda quincena” en otro caso. 
* día
*/

// Guarda el día actual en una variable

$diaActual = date('d');

// Si el día guardado en variable es menor o mayor a 15, mostrará un texto u otro

if ($diaActual <= 15){
    echo "El día actual es " . $diaActual . " por ende, estamos en la primera quincena \n" ;
} else if ($diaActual > 15){
    echo "El día actual es " . $diaActual . " por ende, estamos en la segunda quincena \n";
}



?>