<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 4. Muestra los múltiplos de 5 entre 0 y 100 usando:
 * a) bucle for
 * b) bucle while
 * c) bucle do-while
 */

echo "\n";

 // A) Bucle for

echo "Con bucle for \n";
for ($i = 0; $i <= 100; $i){
    echo ($i . " ");
    $i+=5;
}

echo "\n\n";


 // B) Bucle while
$i = 0;

echo "Con bucle while \n";
while($i <= 100){
    echo ($i . " ");
    $i+=5;
}
echo "\n\n";


 // C) Bucle do-while
$i = 0;

echo "Con bucle do-while \n";
do {
    echo ($i . " ");
    $i+=(5);
} while ($i <= 100);
echo "\n"

?>