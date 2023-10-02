<?php

/** 
* @author Jose Zafrilla Ruiz jozaru27@gmail.com
* 
* 11. Crea un conversor de monedas de euros a pesetas usando variables para almacenar el resultado
*/

// Pide la cantidad de euros a pesetas
// Muestra por pantalla la cantidad real de la conversión, y luego con un redondeo

$euro = readline ("¿Cuántos euros quieres pasar a pesetas?: ");
$pesRedondeo = round($euro*166.386); 
echo $euro. " son " . $euro*166.386 . " que redondeado es " .$pesRedondeo . "\n";

?>