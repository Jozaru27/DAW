<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 7. Usa el formulario (Ejercicio 12 UD5) de la caja fuerte donde se indique la contraseña y muestre
 * las contraseñas ya introducidas y el número de intentos guardando estos datos en una Cookie.
 * Se deben mostrar la contraseña correcta, las contraseñas ya introducidas y el número de intentos (cookie).
 * 
 */

$combinación = 1234;
$intentos = isset($_GET['intentos']) ? (int)$_GET['intentos'] : 0;

$cookie_name = "cookie";
$cookie_value = "Combinación Correcta: $combinación <br>Intentos: $intentos <br>";

if (isset($_GET['combinacion'])) {
    $intentos++;

    $combinaciónEntrante = $_GET['combinacion'];
    $cookie_value .= "Combinación entrante: $combinaciónEntrante <br>";

    if ($combinaciónEntrante == $combinación) {
        $mensaje = "La caja fuerte se ha abierto satisfactoriamente";
        $color = "green";
    } else {
        $mensaje = "Lo siento, esa no es la combinación";
        $color = "red";
    }
}


if (!empty($_GET)){
    setcookie($cookie_name, $cookie_value);
    echo "Datos de la cookie " . $cookie_name . ": <br>";
    echo $_COOKIE["cookie"] . "<br><br>";
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
    <title>Cookies 7 - Jose Zafrilla</title>
</head>


<body>
    <h2>Cookies 7 - Jose Zafrilla</h2>

    <form action="cookies7.php" method="get">
        <label for="combinacion">Combinación:</label>
        <input type="text" id="combinacion" name="combinacion" <?php if ($intentos == 0); ?>>
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">
        <input type="submit" value="Enviar" <?php if ($intentos == 0); ?>>
    </form>

     <!-- Sección necesaria para mostrar el mensaje con el color acorde -->
     <div style="color: <?php echo $color; ?>;"><?php echo $mensaje; ?></div>
</body>

</html>