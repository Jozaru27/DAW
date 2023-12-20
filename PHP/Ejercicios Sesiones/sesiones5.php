<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 5. Usa el formulario del ejercicio 5 de Cookies del conversor de euros y pesetas de modo que uses
 * la sesión para mostrar la cantidad, moneda y conversión actuales y además muestre la cantidad,
 * moneda y conversión anterior.
 * 
 */

 session_start();

 $moneda = isset($_GET["moneda"]) ? $_GET["moneda"] : null;
 $tipoConversion = isset($_GET["tipoConversion"]) ? $_GET["tipoConversion"] : null;
 
 $resultado = null;
 
 if ($tipoConversion == "euroAPesetas" && $moneda) {
     $resultado = $moneda * 166.386;
 } elseif ($tipoConversion == "pesetasAEuro" && $moneda) {
     $resultado = $moneda / 166.386;
 }
 
 // Almacenar datos en la sesión
 $_SESSION["moneda"] = $moneda;
 $_SESSION["tipoConversion"] = $tipoConversion;
 $_SESSION["resultado"] = $resultado;
 
 echo "Datos actuales: <br>";
 echo "Moneda: " . $_SESSION["moneda"] . "<br> Conversión: " . $_SESSION["tipoConversion"] . "<br> Resultado: " . number_format($_SESSION["resultado"], 2) . "\n";
 
 // Datos de la sesión
 echo "<br> <b> Datos anteriores de la sesión: </b> <br>";
 if (isset($_SESSION["anterior"])) {
     echo "Moneda: " . $_SESSION["anterior"]["moneda"] . "<br> Conversión: " . $_SESSION["anterior"]["tipoConversion"] . "<br> Resultado: " . number_format($_SESSION["anterior"]["resultado"], 2) . "\n";
 }
 
 // Actualiza datos de la sesión
 $_SESSION["anterior"]["moneda"] = $_SESSION["moneda"];
 $_SESSION["anterior"]["tipoConversion"] = $_SESSION["tipoConversion"];
 $_SESSION["anterior"]["resultado"] = $_SESSION["resultado"];
 
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
    <title>Sesiones 5 - Jose Zafrilla</title>
</head>


<body>
    <h2>Sesiones 5 - Jose Zafrilla</h2>


<form action="sesiones5.php" method="get">
    <label for="moneda">Moneda:</label>
    <input type="number" id="moneda" name="moneda" step>
    <input type="radio" id="euroAPesetas" name="tipoConversion" value="euroAPesetas" checked>
    <label for="euroAPesetas">Convertir a Pesetas</label>
    <input type="radio" id="pesetasAEuro" name="tipoConversion" value="pesetasAEuro">
    <label for="pesetasAEuro">Convertir a Euros</label>
    <input type="submit" value="Calcular">
</form>

</body>

</html>