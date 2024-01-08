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
    header("Location: roles1.php");
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

    <form action="roles1.php" method="post">
        <input type="submit" value="Cerrar Sesión" name="cerrar">
    </form>
</body>

</html>