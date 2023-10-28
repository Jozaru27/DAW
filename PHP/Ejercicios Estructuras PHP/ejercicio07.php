<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 7. Calcula, dada la fecha y hora actual y la fecha y hora deseada, cuántas horas y minutos quedan
* para dicho momento
*
* 
*/

// Obtiene la fecha y la hora actual
$fechaActual = new DateTime();

// Pide por teclado una hora en formato HH:MM:SS
$horaDeseada = readline("Por favor, introduce una hora en formato HH:MM:SS: \n");

// Separa la hora introducida en tres partes, marcado por el : y lo mete en un Datetime nuevo
list($horas, $minutos, $segundos) = explode(':', $horaDeseada);
$fechaDeseada = new DateTime($fechaActual->format('Y-m-d') . " $horas:$minutos:$segundos");

// Calcula la diferencia en horas minutos y segundos
$diferencia = $fechaActual->diff($fechaDeseada);

// Obtiene la diferencia y las guarda en variables
$horasRestantes = $diferencia->h;
$minutosRestantes = $diferencia->i;
$segundosRestantes = $diferencia->s;

// Muestra la hora actual, la deseada y la diferencia por pantalla
echo "La hora actual es " . $fechaActual->format('h:i:s') . " y la deseada es $horaDeseada \n";
echo "Faltan $horasRestantes horas, $minutosRestantes minutos y $segundosRestantes segundos para la hora deseada \n";

?>