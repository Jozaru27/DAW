<?php
/**
 * @author Jose Zafrilla Ruiz jozaru27@gmail.com
 * 
 * 4. Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las
 * horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora
 * 41, se pagan a 16 euros la hora
*/

// Pide las horas trabajadas por pantalla

$horasTrabajadas = readline("Ficha las horas totales que has trabajado: "); 

// Si son menos o igual a 0, muestra una advertencia y cierra el programa

if ($horasTrabajadas <= 0){
    echo "Ponte a currar";
    exit();
}

// Si las horas trabajadas son menores o igual a cuarenta, muestra por pantalla las horas y el resultado de sumarlas por 12
// Si son mayores a 40, separa las horas iguales a 40 de las extra, multiplicando las primeras por 12 y las segundas por 16
// luego, lo muestra por pantalla con toda la información, tanto las horas trabajadas como los salarios combinados

if ($horasTrabajadas <= 40){
    echo "Las horas trabajadas han sido $horasTrabajadas, por ende, el salario semanal es de " . $horasTrabajadas*12 . "€ \n";
} else {
    $salario = 40*12;
    $horasExtra = $horasTrabajadas-40;
    $valorHorasExtra = $horasExtra*16; 
    echo "Las horas extra han sido $horasExtra con valor de " . $valorHorasExtra . "€, por lo que sumado a las 40 primeras horas con valor de " . $salario . "€, saldría a " . $salario + $valorHorasExtra . "€ \n";
} 



?>