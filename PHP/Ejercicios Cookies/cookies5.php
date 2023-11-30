<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 5. Usa el formulario (Ejercicio 3 UD5) del conversor euros a pesetas y viceversa de la cantidad
 * introducida por el usuario y guardar los datos en una Cookie. Se deben mostrar la cantidad,
 * moneda y conversión actual y la cantidad, moneda y conversión anterior (cookie).
 * 
 */

// Defino esta variable para que no dé error inicial
$resultado = null;

// Obtengo los datos del formulario y los guardo en variables
$moneda = isset($_GET["moneda"]) ? $_GET["moneda"] : null;
$tipoConversion = isset($_GET["tipoConversion"]) ? $_GET["tipoConversion"] : null;

// Realizar conversiones dependiendo del tipo seleccionado
if ($tipoConversion == "euroAPesetas" && $moneda) {
    $resultado = $moneda * 166.386;
} elseif ($tipoConversion == "pesetasAEuro" && $moneda) {
    $resultado = $moneda / 166.386;
}

$cookie_name = "cookie";
$cookie_value = "Moneda: " . $moneda . "<br> Conversión: " . $tipoConversion . "<br> Resultado: " . number_format($resultado, 2);

if (!empty($_GET)){
    setcookie($cookie_name, $cookie_value);
    echo "Datos de la cookie " . $cookie_name . ": <br>";
    echo $_COOKIE["cookie"] . "<br><br>";
}

echo "Datos actuales: <br>";
echo "Moneda: " . $moneda . "<br> Conversión: " . $tipoConversion . "<br> Resultado: " . number_format($resultado, 2); "\n" ;

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
    <title>Cookies 5 - Jose Zafrilla</title>
</head>


<body>
    <h2>Cookies 5 - Jose Zafrilla</h2>

    <form action="cookies5.php" method="get">
        <label for="moneda">Moneda:</label>
        <input type="number" id="moneda" name="moneda" step>
        <input type="radio" id="euroAPesetas" name="tipoConversion" value="euroAPesetas" checked>
        <label for="euroAPesetas">Convertir a Pesetas</label>
        <input type="radio" id="pesetasAEuro" name="tipoConversion" value="pesetasAEuro">
        <label for="pesetasAEuro">Convertir a Euros</label>
        <input type="submit" value="Calcular">
    </form>

    <?php
   
    ?>
</body>

</html>