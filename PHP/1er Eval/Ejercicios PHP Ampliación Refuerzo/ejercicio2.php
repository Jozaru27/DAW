<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 2. Escribe un programa que dada una nota (entera) indique su correspondencia en el boletín
 * (Ejemplo 5 sería SUFICIENTE)
 * 
 */

$nota = readline("Introduzca una nota del 0 al 10: \n");

switch ($nota){
    case 0:
    case 1:
    case 2:
    case 3:
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
    case 8:
        $notaTexto = "NOTABLE";
        break;
    case 9:
    case 10:
        $notaTexto = "SOBRESALIENTE";
        break;
    default: 
        echo "Esa nota no existe ";
        $notaTexto = "ERROR";
        break;
}

echo "La nota $nota es $notaTexto \n";

?>