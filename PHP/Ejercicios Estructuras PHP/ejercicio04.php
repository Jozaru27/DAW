<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 4. Elabora un programa para determinar si una hora leída en la forma horas, minutos y segundos
 * está correctamente expresada.
 */

 $tiempo = readline("Introduce una hora en formato HH:MM:SS \n");
 $horas = explode(":", $tiempo)[0];
 $minutos = explode(":", $tiempo)[1];
 $segundos = explode(":", $tiempo)[2];

 while ($segundos >= 60){
    $segundos -= 60;
    $minutos++;
 }

 while ($minutos >= 60){
    $minutos -= 60;
    $horas++;
 }

 if ($horas > 23){
    echo "Se pasa del día \n";
 } else {
    echo "Son $horas horas, $minutos minutos y $segundos segundos \n";
 }

 // Otra funcionalidad para otro programa - No sirve en este
 /*$tiempo = readline("Introduce una hora en formato HH/MM/SS \n");
 $tiempoSplit = explode("/", $tiempo);
 
 if ($tiempoSplit[0] > 24){
    echo "Por favor, introduzca como máximo 24H/60M/60S \n";
    exit;
 } elseif ($tiempoSplit[0] <= 24){
    if ($tiempoSplit[1] > 60){
        echo "Por favor, introduzca como máximo 24H/60M/60S \n";
    } elseif ($tiempoSplit[1] <= 60){
        if ($tiempoSplit[2] > 60){
            echo "Por favor, introduzca como máximo 24H/60M/60S \n";
        } elseif ($tiempoSplit[2] <= 60) {
            echo "El tiempo introducido está en el formato correcto: " . $tiempoSplit[0] . "H/" . $tiempoSplit[1] . "M/" . $tiempoSplit[2] . "S \n";
        }
    }
 }*/

?>