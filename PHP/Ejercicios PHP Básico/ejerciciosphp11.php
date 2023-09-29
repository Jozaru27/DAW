<?php

/** 
* @author Jose Zafrilla Ruiz jozaru27@gmail.com
* 
* 11. Crea un conversor de monedas de euros a pesetas usando variables para almacenar el resultado
*/

$euro = readline ("¿Cuántos euros quieres pasar a pesetas?: ");
$pesRedondeo = round($euro*166.386); 
echo $euro. " son " . $euro*166.386 . " que redondeado es " .$pesRedondeo . "\n";

?>