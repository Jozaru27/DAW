<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 1. Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del
 * día de la semana.
 * 
 */

$dia = readline("Introduzca un número del 1 al 7: \n");

switch ($dia){
    case 1:
        $diaLetra = "Lunes";
        break;
    case 2:
        $diaLetra = "Martes";
        break;
    case 3:
        $diaLetra = "Miércoles";
        break;
    case 4:
        $diaLetra = "Jueves";
        break;
    case 5:
        $diaLetra = "Viernes";
        break;
    case 6:
        $diaLetra = "Sábado";
        break;
    case 7:
        $diaLetra = "Domingo";
        break;
}

echo "El día $dia corresponde al $diaLetra \n"

?>