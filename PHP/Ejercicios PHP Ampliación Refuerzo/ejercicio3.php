<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 3. Escribe un programa que calcule la media aritmética de 7 notas y la muestre junto con su
 * correspondencia en el boletín que has realizado en el ejercicio anterior
 * 
 */

$notas = [];

for($i = 1; $i <= 7; $i++){
    $notas[] = readline("Introduce una nota \n");
}

$notaMedia = round(array_sum($notas) / count($notas));
$notaTexto;

switch ($notaMedia){
    case 0:
        $notaTexto = "INSUFICIENTE";
        break;
    case 1:
        $notaTexto = "INSUFICIENTE";
        break;
    case 2:
        $notaTexto = "INSUFICIENTE";
        break;
    case 3:
        $notaTexto = "INSUFICIENTE";
        break;
    case 4:
        $notaTexto = "INSUFICIENTE";
        break;
    case 5:
        $notaTexto = "SUFICIENTE";
        break;
    case 6:
        $notaTexto = "BIEN";
        break;
    case 7:
        $notaTexto = "NOTABLE";
        break;
    case 8:
        $notaTexto = "NOTABLE";
        break;
    case 9:
        $notaTexto = "SOBRESALIENTE";
        break;
    case 10:
        $notaTexto = "SOBRESALIENTE";
        break;
}

echo "La nota media es $notaMedia, por ende es un $notaTexto \n";

?>