<?php
/**
 * @author Jose Zafrilla Ruiz jozaru27@gmail.com
 * 
 * 2. Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base
 * de la pirámide debe estar formada por 9 asteriscos
*/
$n = $i = 5;

while ($i--)
    echo str_repeat(' ', $i).str_repeat('* ', $n - $i)."\n";

?>