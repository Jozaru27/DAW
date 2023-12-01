<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 3. Usa el formulario del ejercicio 3 de Cookies del selector de operación de modo que uses la
 * sesión para mostrar el resultado de la operación indicando cuáles han sido los números, las
 * operaciones elegidas y el resultado en la ejecución actual y los números y las operaciones
 * elegidas en la ejecución anterior a la actual.
 * 
 */
session_start(); //iniciamos la sesión

$num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
$num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;
$operacion = isset($_POST['operación']) ? $_POST['operación'] : [];

if (is_array($operacion) && count($operacion) > 0) {
    foreach ($operacion as $operaciones) {
        switch ($operaciones) {
            case "+":
                $resultado = $num1 + $num2;
                echo "El resultado es $resultado <br>";
                break;
            case "-":
                $resultado = $num1 - $num2;
                echo "El resultado es $resultado <br>";
                break;
            case "/":
                $resultado = $num1 / $num2;
                echo "El resultado es $resultado <br>";
                break;
            case "*":
                $resultado = $num1 * $num2;
                echo "El resultado es $resultado <br>";
                break;
        }
    }
}

if ($_POST["Enviar"] === "Enviar") {

    if (!isset($_SESSION['num1']) && !isset($_POST['num2']) && !isset($_SESSION['opeación'])) {
        $_SESSION['num1'] = $_POST['num1'];
        $_SESSION['num2'] = $_POST['num2'];
        $_SESSION['operación'] = $_POST['operación'];
    } else {
        $_SESSION['num1Antiguo'] = $_SESSION['num1'];
        $_SESSION['num1'] = $_POST['num1'];

        $_SESSION['num2Antiguo'] = $_SESSION['num2'];
        $_SESSION['num2'] = $_POST['num2'];

        $_SESSION['operaciónAntiguo'] = $_SESSION['operación'];
        $_SESSION['operación'] = $_POST['operación'];

        echo "<br> <b> El dato antiguo es: </b> <br>";
        echo "Num1: " . $_SESSION['num1Antiguo'] . "<br>";
        echo "Num2: " . $_SESSION['num2Antiguo'] . "<br>";
        echo "Operación: " . implode(", ", $_SESSION['operaciónAntiguo']) . "<br>";
    }

    echo "<br> <b> Datos actuales: </b> <br>";
    $num1 = $_POST["num1"];
    echo "Num1: $num1 <br>";
    $num2 = $_POST["num2"];
    echo "Num2: $num2 <br>";
    $operación = $_POST["operación"];
    echo "Operación: " . implode(", ", $operación) . "<br>";
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
    <title>Sesiones 3 - Jose Zafrilla</title>
</head>


<body>
    <h2>Sesiones 3 - Jose Zafrilla</h2>

    <form action="sesiones3.php" method="post">
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

        <input type="submit" name="Enviar" value="Enviar">
    </form>
</body>

</html>