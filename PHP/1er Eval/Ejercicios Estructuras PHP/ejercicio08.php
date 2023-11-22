<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 8. Crea la tabla de multiplicar a partir de  un número
* 
*/

$num = readline("Introduce un número para multiplicar \n");

for ($i = 0; $i <= 10; $i++){
    echo "$num X $i = " . ($num*$i) . "\n";
}

?>