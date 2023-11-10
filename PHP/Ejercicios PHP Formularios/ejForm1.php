<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 1. Ejercicio 4 - añadiendo selector de operación a aplicar (pueden seleccionarse mínimo una o
 * todas las operaciones): Dados dos números enteros realizar operaciones de suma, resta, división y
 * multiplicación y mostrar los resultados por pantalla concatenando la operación (expresión con
 * operandos y operador) y el resultado. Comprueba que los datos introducidos son los esperados
 * 
 * 
 */

 $num1 = $_GET["num1"];
 $num2 = $_GET["num2"];

 $operacion = $_GET["operación"];

 foreach ($operacion as $operaciones) {
    switch ($operaciones) {
        case "+":
            $resultado = $num1 + $num2;
            echo "El resultado de $num1 + $num2 es $resultado <br>";
            break;

        case "-":
            $resultado = $num1 - $num2;
            echo "El resultado de $num1 - $num2 es $resultado <br>";
            break;

        case "/":
            $resultado = $num1 / $num2;
            echo "El resultado de $num1 / $num2 es $resultado <br>";
            break;

        case "*":
            $resultado = $num1 * $num2;
            echo "El resultado de $num1 * $num2 es $resultado <br>";
            break;
    }
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
    <title>Jose Zafrilla - Formulario Ejercicio 1</title>
</head>


<body>
    <h2>Jose Zafrilla - Formulario Ejercicio 1</h2>

    <form action="ejForm1.php" method="get">

        <label for="num1">Número 1:</label>
        <input type="number" id="num1" name="num1"><br><br>

        <label for="num2">Número 2:</label>
        <input type="number" id="num2" name="num2"><br><br>

        <label for="operación">Operación<br><br>
        <select multiple size='4' name="operación[]" id="operación">
            <option value="+"> Suma </option>
            <option value="-"> Resta </option>
            <option value="*"> Multiplicación </option>
            <option value="/"> División </option>
        </select><br><br>

        <input type="submit" value="Resolver"> 
    </form> 
</body>
</html>