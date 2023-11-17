<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 7. Ejercicio 5 Diseña un programa que determine la cantidad total a pagar por 5 llamadas
 * telefónicas de duración a introducir por el usuario de acuerdo a las siguientes premisas: Toda
 * llamada que dure menos de 3 minutos tiene un coste de 10 céntimos. Cada minuto adicional a
 * partir de los 3 primeros es un paso de contador y cuesta 5 céntimos.
 * 
 * 
 */

 // Guardamos el valor de minutos en una variable
 $min = isset($_GET["minutos"]) ? $_GET["minutos"] : null;
 
 // If que comprueba que no sea null (para evitar errores de inicio) y que haya un valor introducido
 // Dentro, se comprueban los minutos y dependiendo de estos, se calcula el valor
if ($min !== null && $min > 0) {
    if ($min <= 3){
        $coste = 30;
        echo "<b>El coste de la llamada de $min minutos es de $coste céntimos</b> \n";
    } else {
        $coste = 3 * 10;
        $costeExtra = ($min - 3) * 5;
        $costeFinal = $coste + $costeExtra;
        echo "<b>El coste de la llamada de $min minutos es de $costeFinal céntimos</b> \n";
    }
} else {
    echo "<b>Por favor, introduzca un valor positivo.</b>";
}

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
    <title>Form 7 - Jose Zafrilla</title>
</head>


<body>
    <h2>Form 7 - Jose Zafrilla</h2>

    <form action="ejForm7.php" method="get">
 
    <label for="minutos">Indica la duración de la llamada en minutos:</label>
    <input type="number" id="minutos" name="minutos" required>
    <input type="submit" value="Calcular Coste">

    </form> 
</body>
</html>