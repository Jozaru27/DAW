<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 3. Ejercicios 11 y 12 unirlos en una calculadora de euros que convierta de euros a pesetas y de
 * pesetas a euros según lo que elija el usuario (de forma excluyente) y por la cantidad que
 * introduzca. Comprueba que los datos introducidos son los esperados
 * 
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

// Mostrar resultados si están disponibles (redondeando a dos decimales)
if ($resultado !== null) {
    echo "<p><b>Resultado:</b> " . number_format($resultado, 2) . "</p>";
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
    <title>Form 3 - Jose Zafrilla</title>
</head>


<body>
    <h2>Form 3 - Jose Zafrilla</h2>

    <form action="ejForm3.php" method="get">

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