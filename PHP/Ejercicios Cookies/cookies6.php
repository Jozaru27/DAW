<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 6. Usa el formulario (Ejercicio 9 UD5) de la tabla de multiplicar donde se indique multiplicando y
 * multiplicador guardando estos datos en una Cookie. Se deben mostrar la tabla, el multiplicando
 * y multiplicador actual y el multiplicando y multiplicador anterior (cookie).
 * 
 */

 // Muestro también el resultado, aunque si no se quiere se puede quitar el
 // ($num * $i) de la línea 26

 $cookie_name = "cookie";
 $cookie_value = "Tabla: ";

// Guardamos el num introducido en el form en una variable
$num = isset($_GET['num']) ? $_GET["num"] : null;

// Comprobamos que no sea null (control de errores iniciales)
// Si no es null, mostramos la tabla
if ($num !== null){
    for ($i = 1; $i <= $num; $i++){
        $cookie_value .= "<br> $num X $i = " . ($num * $i) . "<br>";
    }
}

if (!empty($_GET)){
    setcookie($cookie_name, $cookie_value);
    echo "Datos de la cookie " . $cookie_name . ": <br>";
    echo $_COOKIE["cookie"] . "<br><br>";
}

echo "Datos actuales: <br>";
echo "Tabla: " . $cookie_value . "\n" ;

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
    <title>Cookies 6 - Jose Zafrilla</title>
</head>


<body>
    <h2>Cookies 6 - Jose Zafrilla</h2>

    <form action="cookies6.php" method="get">
    <label for="num">Introduce un número para la tabla de multiplicar:</label>
        <input type="number" id="num" name="num" min="1" max="10" required>
        <input type="submit" value="Generar Tabla">
    </form>

    <?php
   
    ?>
</body>

</html>