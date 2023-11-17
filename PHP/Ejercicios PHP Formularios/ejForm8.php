<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 8. Ejercicio 7. Calcula, dada la fecha y hora actual y la fecha y hora deseada, cuántas horas y minutos quedan
 * para dicho momento
 * 
 * 
 */

// Obtiene la fecha y la hora actual y lo guarda en una variable
$fechaActual = new DateTime();

// Obtiene la fecha y hora deseada del form y lo guarda en una variable
$fechaDeseadaString = isset($_GET["fechaDeseada"]) ? $_GET["fechaDeseada"] : "";

// Crea un objeto DateTime con la fecha y hora deseada
$fechaDeseada = new DateTime($fechaDeseadaString);

// Calcula la diferencia en horas minutos y segundos
$diferencia = $fechaActual->diff($fechaDeseada);

// Obtiene la diferencia y las guarda en variables
$horasRestantes = $diferencia->h;
$minutosRestantes = $diferencia->i;
$segundosRestantes = $diferencia->s;

// Muestra la fecha y hora actual, la deseada y la diferencia por pantalla
echo "La fecha y hora actual es " . $fechaActual->format('Y-m-d H:i:s') . " y la deseada es " . $fechaDeseada->format('Y-m-d H:i:s') . "\n";
echo "Faltan $horasRestantes horas, $minutosRestantes minutos y $segundosRestantes segundos para la fecha y hora deseada \n";

 ?>

 <!-- HTML -->
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />

    <!-- Nombre del Autor -->
    <meta name="author" content="Jose Zafrilla Ruiz" />
    <link rel="author" href="https://github.com/Jozaru27">

    <!-- Título de Página -->
    <title>Form 8 - Jose Zafrilla</title>
</head>


<body>
    <h2>Form 8 - Jose Zafrilla</h2>

    <form action="ejForm8.php" method="get">
 
    <label for="fechaDeseada">Indica la fecha y hora deseada (YYYY-MM-DD HH:MM:SS):</label>
    <input type="text" id="fechaDeseada" name="fechaDeseada" required>
    <input type="submit" value="Calcular Diferencia">

    </form> 
</body>
</html>