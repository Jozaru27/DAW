<?php

/** 
* @author Jose Zafrilla Ruiz jozaru27@gmail.com
* 
* 5. Dado un número decimal, calcula el resultado de aplicar el redondeo a dicho número y muestra
* el resultado
*/

// Pide un número por pantalla y lo guarda en una variable

echo "Introduce un número por pantalla";
$decimal = readline();

// Muestra el número por pantalla además del resultado del redondeo

echo "El número decimal es $decimal, el número redondeado es " . round($decimal). "";
echo "\n"

?>