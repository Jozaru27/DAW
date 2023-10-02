<?php

/** 
* @author Jose Zafrilla Ruiz jozaru27@gmail.com
* 
* 11. Crea un conversor de monedas de euros a pesetas usando variables para almacenar el resultado
*/

// Pide la cantidad de pesetas para pasar a euros
// Muestra por pantalla la cantidad real de la conversión, y luego con un redondeo de máximo 2 decimales

$pesetas = readline ("¿Cuántas pesetas quieres pasar a euros?: ");
$eurosRedondeo = round($pesetas/166.386, 2); 
echo $pesetas. " son " . $pesetas/166.386 . " que redondeado es " . $eurosRedondeo . "\n";

?>