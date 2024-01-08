<?php
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 2. Crea un formulario de identificación de usuario de modo que el usuario introduzca su nombre,
 * apellido, asignatura y grupo. Además debe seleccionar si es menor o mayor de edad y si tiene
 * un cargo o no. Genera una página para cada perfil de la tabla en la que se muestre un saludo de bienvenida
 * indicando los datos del usuario (nombre y apellidos) y mostrando la asignatura y grupo elegidos.
 * Además deberá poder cerrar la sesión y volver a la página del formulario. Utiliza las sesiones
 * para poder realizar este ejercicio.
 * 
 */

// Iniciamos la Sesión
session_start(); 

// Comprobamos que se envíe el formulario (Control de errores, para evitar Warnings antes de enviar el formulario)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recoge los datos del formulario, guardándolos en una sesión.
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['apellido'] = $_POST['apellido'];
    $_SESSION['asignatura'] = $_POST['asignatura'];
    $_SESSION['grupo'] = $_POST['grupo'];
    $_SESSION['edad'] = $_POST['edad'];
    $_SESSION['cargo'] = $_POST['cargo'];

    // Recoge los datos del formulario guardándolos en una variable.
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $asignatura = $_POST["asignatura"];
    $grupo = $_POST["grupo"];
    $edad = $_POST["edad"];
    $cargo = $_POST["cargo"];

    // Cuando se envía el formulario, comprueba una combinación para elegir dónde redirige el formulario:
    // Si es menor y sin cargo, le enviará al de estudiante.
    // Si es menor y con cargo, le enviará al de delegado.
    // Si es adulto y sin cargo, le enviará al de profesor.
    // Si es adulto y con cargo, le enviará al de director.
    if (isset($_POST["Enviar"])){
        if($edad === "no" && $cargo === "no"){
            header("Location: estudiante.php");
        } else if ($edad === "no" && $cargo === "si"){
            header("Location: delegado.php");
        } else if ($edad === "si" && $cargo === "no"){
            header("Location: profesor.php");
        } else if($edad === "si" && $cargo === "si"){
            header("Location: director.php");
        }
    }
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
    <title>Roles 2 Form - Jose Zafrilla</title>
</head>

<body>
    <h2>Roles 2 Form - Jose Zafrilla</h2>
    <hr>

    <form action="roles2.php" method="post">
        <h2>Introduzca por favor los siguientes datos:</h2>

        <label for="nombre"> Nombre: </label><br>
        <input type="text" name="nombre" id="nombre"><br><br>

        <label for="apellido"> Apellido: </label><br>
        <input type="text" name="apellido" id="apellido"><br><br>

        <label for="asignatura"> Asignatura: </label><br>
        <input type="text" name="asignatura" id="asignatura"><br><br>

        <label for="grupo"> Grupo: </label><br>
        <input type="text" name="grupo" id="grupo"><br><br>

        <label for="edad"> ¿Es usted mayor de 18 años? </label><br><br>
        <input type="radio" name="edad" value="no"> No.
        <input type="radio" name="edad" value="si"> Sí. <br><br>

        <label for="cargo"> ¿Tiene usted asignado un cargo? </label><br><br>
        <input type="radio" name="cargo" value="no"> No.
        <input type="radio" name="cargo" value="si"> Sí. <br><br>

        <button type="submit" name="Enviar" value="Enviar"> Enviar Formulario </button>
    </form>
</body>

</html>