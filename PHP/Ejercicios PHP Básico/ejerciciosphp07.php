<?php

/** 
* @author Jose Zafrilla Ruiz jozaru27@gmail.com
* 
* 7. Ordena 3 números de modo que se impriman de mayor a menor. Si son iguales debe mostrar
* una advertencia indicando que son iguales
*/

// Pide tres números por pantalla

$num1 = readline("Introduce un número: \n");
$num2 = readline("Introduce un número: \n");
$num3 = readline("Introduce un número: \n");

// Si hay algún numero igual, advierte por pantalla

if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
    echo "¡Cuidadín chavalín! Que al menos dos de los números son iguales. \n";
}

// Va comprobando que número es mayor y cuál es menor, para mostrarlos ordenados

if ($num1<$num2){
    if($num3<$num1){
        echo "El orden es $num3, $num1, $num2 \n";
    }
    else if($num2<$num3){
        echo "El orden es $num1, $num2, $num3 \n";
    }
    else {
        echo "El orden es $num1, $num3, $num2 \n";
    }
}
else {
    if ($num3<$num2){
        echo "El orden es $num3, $num2, $num1 \n";
    }
    else if ($num3<$num1){
        echo "El orden es $num2, $num3, $num1 \n";
    }
    else { 
        echo "El orden es $num2, $num1, $num3 \n";
    }
} 
?>