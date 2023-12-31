<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 10. Usa el formulario del ejercicio 10 de Cookies con selección de si se desea publicidad o no de
 * modo que uses la sesión para mostrar el nombre del usuario y si desea o no publicidad del
 * usuario actual y además muestre usuario y elección del anterior.
 * 
 */
session_start();

// Variables para el nombre de usuario actual y anterior, y la elección de publicidad
$nombreUsuarioActual = '';
$nombreUsuarioAntiguo = '';
$aceptaPublicidadActual = '';
$aceptaPublicidadAntiguo = '';

// Si se envía el formulario en POST, almacena el nombre de usuario y la elección de publicidad.
// Si el nombre de usuario está vacío, te indica que lo rellenes, si no (línea 29).
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombreUsuario = $_POST["email"];
    $aceptaPublicidad = isset($_POST["aceptaPublicidad"]) ? "Sí" : "No";

    if (empty($nombreUsuario)) {
        echo "<p>Por favor, introduce tu correo electrónico.</p>";
    } else {
        // Almacena el nombre de usuario actual
        $nombreUsuarioActual = $nombreUsuario;

        // Muestra por pantalla el nombre de usuario y la elección de publicidad actual
        echo "<p>El usuario actual es: $nombreUsuarioActual, y ";
        echo "ha seleccionado recibir publicidad: $aceptaPublicidad</p>";
    }

    // Si hay una selección anterior, la muestra y almacenamos el nombre de usuario y la elección de publicidad anterior
    if (!empty($_SESSION['nombreUsuarioAntiguo']) && isset($_SESSION['aceptaPublicidadAntiguo'])) {
        // Muestra por pantalla el nombre de usuario y la elección de publicidad anterior
        echo "El dato introducido anteriormente es: ", $_SESSION['nombreUsuarioAntiguo'] . "-" . $_SESSION['aceptaPublicidadAntiguo'];
        $nombreUsuarioAntiguo = $_SESSION['nombreUsuarioAntiguo'];
        $aceptaPublicidadAntiguo = $_SESSION['aceptaPublicidadAntiguo'];
    }

    // Guardamos la selección actual en la sesión
    $_SESSION['nombreUsuarioAntiguo'] = $nombreUsuario;
    $_SESSION['aceptaPublicidadAntiguo'] = $aceptaPublicidad;
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
    <title>Sesiones 10 - Jose Zafrilla</title>
</head>


<body>
    <h2>Sesiones 10 - Jose Zafrilla</h2>

    
    <form action="sesiones10.php" method="POST">
    <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="aceptaPublicidad">Aceptar recibir publicidad:</label>
        <input type="checkbox" name="aceptaPublicidad" id="aceptaPublicidad"><br><br>

        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" value="Borrar">
    </form>

</body>
</html>