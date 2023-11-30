<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 10. Usa el formulario (Ejercicio 22 UD5) que guarde en una Cookie la preferencia del usuario de si
 * desea o no recibir publicidad y que muestre la opción anterior y la nueva elegida en caso de que
 * la modifique.
 * 
 */
$cookie_name = "cookie";
$cookie_value = "";


 if (isset($_GET["enviar"])) {
    $email = $_GET["email"];
    $cookie_value .= $email;

    if (isset($_GET["aceptaPublicidad"])) {
        $cookie_value .= "<br>Acepta recibir publicidad";
    } else {
        $cookie_value .= "<br>No desea recibir publicidad";
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
    <title>Cookies 10 - Jose Zafrilla</title>
</head>


<body>
    <h2>Cookies 10 - Jose Zafrilla</h2>

    <form action="cookies10.php" method="get">
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="aceptaPublicidad">Aceptar recibir publicidad:</label>
        <input type="checkbox" name="aceptaPublicidad" id="aceptaPublicidad"><br><br>

        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" value="Borrar">
    </form>

</body>
</html>