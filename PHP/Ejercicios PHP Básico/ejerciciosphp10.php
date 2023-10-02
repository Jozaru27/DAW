<?php

/** 
* @author Jose Zafrilla Ruiz jozaru27@gmail.com
* 
* 10 - Generar un número aleatorio entre 1 y 5 de modo que muestre el número y su nombre en letras
* (Ejemplo: 3 – tres)
*/

// Genera un número aleatorio

$numaleatorio = rand(1,5);

// Dependiendo del número generado, muestra su valor en texto por pantalla

switch ($numaleatorio) {
    case 1:
        echo "$numaleatorio - Uno \n";
        break;
    case 2:
        echo "$numaleatorio - Dos \n";
        break;
    case 3:
        echo "$numaleatorio - Tres \n";
        break;
    case 4:
        echo "$numaleatorio - Cuatro \n";
        break;
    case 5:
        echo "$numaleatorio - Cinco \n";
        break;
}
?>