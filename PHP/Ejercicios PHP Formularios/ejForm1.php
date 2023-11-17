<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 1. Ejercicio 4. Añadiendo selector de operación a aplicar (pueden seleccionarse mínimo una o
 * todas las operaciones): Dados dos números enteros realizar operaciones de suma, resta, división y
 * multiplicación y mostrar los resultados por pantalla concatenando la operación (expresión con
 * operandos y operador) y el resultado. Comprueba que los datos introducidos son los esperados
 * 
 * 
 */

 // Comprobación de variables para evitar el error de inicialización de array
 $num1 = isset($_GET["num1"]) ? $_GET["num1"] : null;
 $num2 = isset($_GET["num2"]) ? $_GET["num2"] : null;
 $operacion = isset($_GET["operación"]) ? $_GET["operación"] : null;

//  En vez de declararlas así, declarándolas de la manera de arriba evitamos que salgan errores al iniciar la página por primera vez
//  $num1 = $_GET["num1"];
//  $num2 = $_GET["num2"];
//  $operacion = $_GET["operación"];

// El if de afuera, comprueba que operacion sea un aray y que no está vacío
// Con esto podemos mostrar el mensaje de seleccionar operación en vez de que nos salga un erroy de inicialización al estar el array de operación vacío por defecto
if (is_array($operacion) && count($operacion) > 0) {
    foreach ($operacion as $operaciones) {
        switch ($operaciones) {
            case "+":
                $resultado = $num1 + $num2;
                echo "<b>El resultado de $num1 + $num2 es:</b> $resultado <br>";
                break;

            case "-":
                $resultado = $num1 - $num2;
                echo "<b>El resultado de $num1 - $num2 es:</b> $resultado <br>";
                break;

            case "/":
                $resultado = $num1 / $num2;
                echo "<b>El resultado de $num1 / $num2 es:</b> $resultado <br>";
                break;

            case "*":
                $resultado = $num1 * $num2;
                echo "<b>El resultado de $num1 * $num2 es:</b> $resultado <br>";
                break;
        }
    }
} else {
    echo "<i>Por favor, selecciona al menos una operación.</i>";
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
    <title>Form 1 - Jose Zafrilla</title>
</head>


<body>
    <h2>Form 1 - Jose Zafrilla</h2>

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