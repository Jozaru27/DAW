<?php 

// Iniciamos la Sesión
session_start();

// Calcula, con la información del array del php inicial, los distintos datos de salarios.
$salarioMaximo = max($_SESSION["array"]);
$salarioMinimo = min($_SESSION["array"]);
$salarioMedio = array_sum($_SESSION["array"]) / count($_SESSION["array"]);

// Muestra la información por pantala. El Usuario, Perfil/Rol, Nivel de Acceso, y los Datos.
echo "<h3> Información de la Sesión </h3>";
echo "<b>Usuario actual:</b> " . $_SESSION["usuario"] . "<br>";
echo "<b>Perfil acutal:</b> " .$_SESSION["rol"] . "<br>";
echo "<b>Acceso a datos de cáclculo:</b> <i>Todos.</i> Máximo, Mínimo y Medio. <br>";

echo "<hr>";

echo "<h3> Información Calculada </h3>";
echo "<b>Salario Máximo:</b> ". $salarioMaximo ."€<br>";
echo "<b>Salario Mínimo:</b> ". $salarioMinimo ."€<br>";
echo "<b>Salario Medio:</b> ". $salarioMedio ."€<br>";

// Cuando se envía el formulario, reenvía al principal (funciona a modo de volver atrás).
if (isset($_POST["cerrar"])){
    session_unset();
    header("Location: tokens1.php");
}

echo "<br><hr><br>";

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
    <title>Gerente - Jose Zafrilla</title>
</head>


<body>
    <br><br>
    <h2>Gerente - Jose Zafrilla</h2>
    <hr>

    <form action="tokens1.php" method="post">
        <input type="submit" value="Cerrar Sesión" name="cerrar">
        <input type="submit" value="Cambiar SID" name="cambiarSID" <?php $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24))?>> <br><br>
    </form>
</body>

</html>