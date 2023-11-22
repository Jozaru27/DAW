<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 12. Crea un programa para leer las notas de los alumnos de una clase, y que informe del número de
* alumnos cuya nota sea mayor de la media de la clase.
*/

$numAlumnos = readline("Introduce el número de alumnos: ");
$notas = array();

// Bucle para meter las notas en un array por cada alumno
for ($i = 1; $i <= $numAlumnos; $i++) {
    $nota =  readline("Introduce la nota del alumno $i: ");
    $notas[] = $nota;
}

// Calcular la media de las notas
$sumaNotas = array_sum($notas);
$media = $sumaNotas / $numAlumnos;

// Alumnos con notas por encima de la media
$alumnosExcepcionales = 0;
foreach ($notas as $nota){
    if ($nota > $media) {
        $alumnosExcepcionales++;
    }
}
echo "Con $numAlumnos alumnos \n";
echo "La media de la clase es: $media \n";
echo "El número de alumnos con una nota mayor que la media es: $alumnosExcepcionales \n";

?>
