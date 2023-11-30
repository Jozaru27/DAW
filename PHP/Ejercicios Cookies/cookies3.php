<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 3. Usa el formulario (Ejercicio 1 UD5) del selector de operación y las operaciones de suma, resta,
 * división y multiplicación de modo que se guarde en la Cookie las operaciones elegidas y
 * muestre el resultado de la operación indicando cuáles han sido las operaciones elegidas en la
 * ejecución actual (formulario) y las elegidas en la operación anterior a la actual (cookie).
 * 
 */

 $cookie_name = "cookie";
 $cookie_value = "";

 $num1 = isset($_GET["num1"]) ? $_GET["num1"] : null;
 $num2 = isset($_GET["num2"]) ? $_GET["num2"] : null;
 $operacion = isset($_GET["operación"]) ? $_GET["operación"] : null;

 $cookie_value.= "El valor de num1 enviado ahora es: " . $num1 . "<br>";
 $cookie_value.= "El valor de num2 enviado ahora es: " . $num2 . "<br>";
 $cookie_value.= "El valor de la operación enviado ahora es: ";
 foreach ($operacion as $operacionIndividual) {
    $cookie_value.= $operacionIndividual . ", ";
 }
 $cookie_value.= "<br>";

 $cookie_name = "cookie";
 $cookie_value = "Num1: " . $num1 . "<br> Num2: " . $num2 . "<br> Operación: ";
  if (is_array($operacion) && count($operacion) > 0) {
      foreach ($operacion as $operacionIndividual) {
          $cookie_value .= $operacionIndividual . ", ";
      }
  } else {
      $cookie_value .= "Ninguna operación seleccionada";
  }
  $cookie_value .= "<br>";


 if (is_array($operacion) && count($operacion) > 0) {
  foreach ($operacion as $operaciones) {
      switch ($operaciones) {
          case "+":
              $resultado = $num1 + $num2;
              $cookie_value.= "<b>El resultado de $num1 + $num2 es:</b> $resultado <br>";
              break;

          case "-":
              $resultado = $num1 - $num2;
              $cookie_value.= "<b>El resultado de $num1 - $num2 es:</b> $resultado <br>";
              break;

          case "/":
              $resultado = $num1 / $num2;
              $cookie_value.= "<b>El resultado de $num1 / $num2 es:</b> $resultado <br>";
              break;

          case "*":
              $resultado = $num1 * $num2;
              $cookie_value.= "<b>El resultado de $num1 * $num2 es:</b> $resultado <br>";
              break;
      }
  }
} else {
    $cookie_value.= "<br><br><i>Por favor, selecciona al menos una operación.</i>";
}

if (!empty($_GET)){
  setcookie($cookie_name, $cookie_value);
  echo "<br>Datos de la cookie " . $cookie_name . ": <br>";
  echo $_COOKIE["cookie"] . "<br>";
 }

 echo "Datos actuales: <br>";
 echo "" . $cookie_value . "\n" ;

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
    <title>Cookies 3 - Jose Zafrilla</title>
</head>


<body>
    <h2>Cookies 3 - Jose Zafrilla</h2>

    <form action="cookies3.php" method="get">
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

<?php

?>