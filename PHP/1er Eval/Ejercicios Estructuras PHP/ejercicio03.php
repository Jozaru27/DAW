<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 3. Crea un programa que reciba una hora expresada en segundos transcurridos desde las 12 de la
 * noche y la convierta en horas, minutos y segundos
 */

 $segundos = readline("Introduce los segundos que consideres a convertir \n");
 echo gmdate("H:i:s \n", $segundos);

?>