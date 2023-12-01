<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 2. Usa el formulario del ejercicio 2 de Cookies con selección de color, idioma y ciudad de modo
 * que uses la sesión para mostrar el nombre del usuario, color, idioma y ciudad actuales y además
 * muestre el nombre del usuario, color, idioma y ciudad anterior.
 * 
 */
session_start(); //iniciamos la sesión

if ($_POST["Enviar"] === "Enviar") {

    if (!isset($_SESSION['nombre']) && !isset($_POST['idioma']) && !isset($_SESSION['color']) && !isset($_POST['ciudad'])) {
        $_SESSION['nombre'] = $_POST['nombre'];
        $_SESSION['idioma'] = $_POST['idioma'];
        $_SESSION['color'] = $_POST['color'];
        $_SESSION['ciudad'] = $_POST['ciudad'];
    } else {
        $_SESSION['nombreAntiguo'] = $_SESSION['nombre'];
        $_SESSION['nombre'] = $_POST['nombre'];

        $_SESSION['idiomaAntiguo'] = $_SESSION['idioma'];
        $_SESSION['idioma'] = $_POST['idioma'];

        $_SESSION['colorAntiguo'] = $_SESSION['color'];
        $_SESSION['color'] = $_POST['color'];

        $_SESSION['ciudadAntigua'] = $_SESSION['ciudad'];
        $_SESSION['ciudad'] = $_POST['ciudad'];

        echo "<br> <b> El dato antiguo es: </b> <br>";
        echo "Nombre: " . $_SESSION['nombreAntiguo'] . "<br>";
        echo "Idioma: " . $_SESSION['idiomaAntiguo'] . "<br>";
        echo "Color: " . $_SESSION['colorAntiguo'] . "<br>";
        echo "Ciudad: " . $_SESSION['ciudadAntiguo'] . "<br>";
    }

    echo "<br> <b> Datos actuales: </b> <br>";
    $nombre = $_POST["nombre"];
    echo "Nombre: $nombre <br>";
    $idioma = $_POST["idioma"];
    echo "Idioma: $idioma <br>";
    $color = $_POST["color"];
    echo "Color: $color <br>";
    $ciudad = $_POST["ciudad"];
    echo "Ciudad: $ciudad <br>";
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
    <title>Sesiones 2 - Jose Zafrilla</title>
</head>


<body>
    <h2>Sesiones 2 - Jose Zafrilla</h2>

    <form action="sesiones2.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"><br><br>

        <label for="idioma">Idioma:</label>
        <select name="idioma">
            <option value="Castellano"> Castellano </option>
            <option value="Valenciano"> Valenciano </option>
            <option value="Inglés"> Inglés </option>
        </select><br><br>

        <label for="color">Color:</label>
        <input type="text" name="color"><br><br>

        <label for="ciudad">Ciudad:</label>
        <select name="ciudad">
            <option value="Alicante"> Alicante </option>
            <option value="Castellón"> Castellón </option>
            <option value="Valencia"> Valencia </option>
        </select><br><br>

        <input type="submit" name="Enviar" value="Enviar">
    </form>
</body>

</html>