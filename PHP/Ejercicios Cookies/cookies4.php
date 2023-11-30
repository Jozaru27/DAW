<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 4. Usa el formulario (Ejercicio 2 UD5) de la quincena donde se indique el día de la semana y
 * muestre la quincena guardando estos datos en una Cookie. Se deben mostrar el día y la
 * quincena actual y el día y la quincena anterior (cookie).
 * 
 */

$diaActual = isset($_GET["diaActual"]) ? $_GET["diaActual"] : null;
$quincenaActual = "";

if ($diaActual !== null && $diaActual !== "") {
    if ($diaActual <= 15){
        $quincenaActual = "primera";
    } else if ($diaActual > 15){
        $quincenaActual = "segunda";
    }
}

$cookie_name = "cookie";
$cookie_value = "Día: " . $diaActual . "<br> Quincena: " . $quincenaActual;

if (!empty($_GET)){
    setcookie($cookie_name, $cookie_value);
    echo "Datos de la cookie " . $cookie_name . ": <br>";
    echo $_COOKIE["cookie"] . "<br><br>";
}

echo "Datos actuales: <br>";
echo "El día actual es " . $diaActual . " por ende, estamos en la $quincenaActual quincena \n" ;

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
    <title>Cookies 4 - Jose Zafrilla</title>
</head>


<body>
    <h2>Cookies 4 - Jose Zafrilla</h2>

    <form action="cookies4.php" method="get">
        <label for="diaActual">Introduce el día actual:</label>
        <input type="number" id="diaActual" name="diaActual" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
   
    ?>
</body>

</html>