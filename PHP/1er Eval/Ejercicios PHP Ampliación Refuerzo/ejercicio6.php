<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 6. Realiza un programa que pida 8 números enteros, los almacene en un vector junto con la
 * palabra “par” o “impar” según proceda y los muestre. Además debe indicar la cantidad de
 * números en cada caso y el porcentaje de pares e impares.
 */

$numeros = array();
$pares = 0;
$impares = 0;

for ($i=1; $i <= 8; $i++){
    $num = readline("Introduce un número entero \n");
    
    if ($num % 2 == 0){
        $pares++;
        $valor = "par";
    } else {
        $impares++;
        $valor = "impar";
    }
    $numeros[$num] = $valor;
    
    foreach ($numeros as $key => $value) {
        echo "$key => $value \n";
    }

    $porcentajePares = ($pares/count($numeros)*100);
    $porcentajeImpares = ($impares/count($numeros)*100);

    echo "Hay un $porcentajePares% de números pares \n";
    echo "Hay un $porcentajeImpares% de números impares \n";
}

?>