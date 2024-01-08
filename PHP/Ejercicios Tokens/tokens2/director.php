<?php

// Iniciamos la Sesión
session_start(); 

// Mensaje de bienvenida con los datos
echo "<h2> Bienvenido a la Interfaz de Directores </h2>";
echo "<b>Nombre</b>: " . $_SESSION["nombre"] . "<br>";
echo "<b>Apellido</b>: " .$_SESSION["apellido"] . "<br>";
echo "<b>Asignatura</b>: " .$_SESSION["asignatura"] . "<br>";
echo "<b>Grupo:</b> " .$_SESSION["grupo"] . "<br>";
 
// Cuando se envía el formulario, reenvía al principal (funciona a modo de volver atrás).
if (isset($_POST["cerrar"])){
    session_unset();
    header("Location: roles2.php");
}

// Comprobamos que el código del token sea el mismo o no.
if (hash_equals($_SESSION['codToken'], $_SESSION['token']) === false) {
    echo "Brecha de Seguridad. El token no coincide <br>";
} else {
    echo "Seguridad Funcional. Token funcional <br>";
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
    <title>Director - Jose Zafrilla</title>
</head>

<body>
    <h2>Director - Jose Zafrilla</h2>
    <hr>

    <form action="roles2.php" method="post">
        <input type="submit" value="Cerrar Sesión" name="cerrar">
        <input type="submit" value="Cambiar SID" name="cambiarSID" <?php $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24))?>> <br><br>
    </form>
</body>

</html>