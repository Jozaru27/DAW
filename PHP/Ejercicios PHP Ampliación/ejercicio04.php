<?php
/**
 * @author Jose Zafrilla Ruiz jozaru27@gmail.com
 * 
 * 4. Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las
 * horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora
 * 41, se pagan a 16 euros la hora
*/

$horasTrabajadas = readline("Ficha las horas totales que has trabajado: ");

if ($horasTrabajadas <= 0){
    echo "Ponte a currar";
    exit();
}

if ($horasTrabajadas <= 40){
    echo "Las horas trabajadas han sido $horasTrabajadas, por ende, el salario semanal es de " . $horasTrabajadas*12 . "€ \n";
} else {
    $salario = 40*12;
    $horasExtra = $horasTrabajadas-40;
    $valorHorasExtra = $horasExtra*16; 
    echo "Las horas extra han sido $horasExtra con valor de " . $valorHorasExtra . "€, por lo que sumado a las 40 primeras horas con valor de " . $salario . "€, saldría a " . $salario + $valorHorasExtra . "€ \n";
} 



?>