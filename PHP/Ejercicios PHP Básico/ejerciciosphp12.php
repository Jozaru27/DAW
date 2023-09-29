<?php

/** 
* @author Jose Zafrilla Ruiz jozaru27@gmail.com
* 
* 11. Crea un conversor de monedas de euros a pesetas usando variables para almacenar el resultado
*/

$pesetas = readline ("¿Cuántas pesetas quieres pasar a euros?: ");
$eurosRedondeo = round($pesetas/166.386, 2); 
echo $pesetas. " son " . $pesetas/166.386 . " que redondeado es " . $eurosRedondeo . "\n";

?>