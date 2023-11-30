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

 $cookie_name = "cookie";
 $cookie_value = "Dia: " . $_GET["diaActual"];

$diaActual = isset($_GET["diaActual"]) ? $_GET["diaActual"] : null;

// Se calcula la quincena y se muestra
$quincenaActual = ($diaActual <= 15) ? "Primera quincena <br>" : "Segunda quincena <br>";
echo "El día actual es " . $diaActual . ", por ende, estamos en la " . $quincenaActual . "<br>\n";

if (!empty($_GET)){
    setcookie($cookie_name, $cookie_value);
    echo "Datos de la cookie " . $cookie_name . ": <br>";
    echo $_COOKIE["cookie"] . "<br";
}

// if (isset($_COOKIE[$cookie_name])) {
//     list($quincenaAnterior, $diaAnterior) = explode("-", $_COOKIE[$cookie_name]);
//     echo "Quincena anterior almacenada en la cookie: " . $quincenaAnterior;
//     echo "Día anterior almacenado en la cookie: " . $diaAnterior . "<br>";
// } else {
//     echo "No hay datos de la quincena y día anterior almacenados en la cookie<br>";
// }


// $cookie_name = "cookie";
// $cookie_value = $quincenaActual . "-" . $diaActual;
// setcookie($cookie_name, $cookie_value);

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
</body>

</html>