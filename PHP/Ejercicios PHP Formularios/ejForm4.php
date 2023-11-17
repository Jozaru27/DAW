<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 4. Ejercicio 4. Escribe un programa que calcule el salario semanal de un trabajador teniendo en
 * cuenta que las horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A
 * partir de la hora 41, se pagan a 16 euros la hora.
 * 
 * 
 */



// Inicializao la variable de horas trabajadas
$horasTrabajadas = isset($_GET["horasTrabajadas"]) ? $_GET["horasTrabajadas"] : null;

// Con un simple if, verifico que el número introducido siempre sea positivo, para no permitir cálculos en negativo
if ( $horasTrabajadas > 0) {

    // Calcula el salario según las reglas especificadas
    // Las primeras cuarenta horas a 12, las extra a 16
    if ($horasTrabajadas <= 40) {
        $salario = $horasTrabajadas * 12;
        echo "<b>Las horas trabajadas han sido $horasTrabajadas, por ende, el salario semanal es de $salario €</b>";
    } else {
        $salarioOrdinario = 40 * 12;
        $horasExtra = $horasTrabajadas - 40;
        $valorHorasExtra = $horasExtra * 16; 
        $salarioTotal = $salarioOrdinario + $valorHorasExtra;
        echo "<b>Las horas extra han sido $horasExtra con un valor de $valorHorasExtra €. Sumado a las 40 primeras horas con valor de $salarioOrdinario €, el salario total es de $salarioTotal €</b>";
    }

} else {
    echo "Por favor, introduzca un número de horas válido en positivo.";
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
    <title>Form 4 - Jose Zafrilla</title>
</head>


<body>
    <h2>Form 4 - Jose Zafrilla</h2>

    <form action="ejForm4.php" method="get">

        <label for="horasTrabajadas">Horas Trabajadas:</label>
        <input type="number" id="horasTrabajadas" name="horasTrabajadas" required>
        <input type="submit" value="Calcular">
 
    </form> 
</body>
</html>