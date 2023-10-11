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

$fechaActual = date("h:i:s") . "\n";
$fechaDeseada = date(readline("Por favor, introduce una hora en formato HH:MM:SS \n"));

echo " La hora actual es $fechaActual y la deseada $fechaDeseada";
//Calcular la diferencia
//Añadir la fecha
?>

/////// WTFF

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

// Obtener la fecha y hora actual
$fechaActual = new DateTime();

// Solicitar al usuario una hora en formato HH:MM:SS
$horaDeseada = readline("Por favor, introduce una hora en formato HH:MM:SS: ");

// Separar la hora introducida por el usuario en horas, minutos y segundos
list($horas, $minutos, $segundos) = explode(':', $horaDeseada);

// Crear un objeto DateTime con la hora deseada
$fechaDeseada = new DateTime($fechaActual->format('Y-m-d') . " $horas:$minutos:$segundos");

// Calcular la diferencia en horas y minutos
$interval = $fechaActual->diff($fechaDeseada);

// Obtener la diferencia en horas y minutos
$horasRestantes = $interval->h;
$minutosRestantes = $interval->i;

// Mostrar la diferencia
echo "La hora actual es " . $fechaActual->format('h:i:s') . " y la deseada es $horaDeseada.\n";
echo "Faltan $horasRestantes horas y $minutosRestantes minutos para la hora deseada.\n";
?>
