<?php
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 2. Crea un token de formulario para el formulario del ejercicio 2 de Roles (Delegado, Estudiante,
 * Profesor y Director) de modo que se pueda asegurar la sesión de cada usuario desde la página
 * del formulario a la página personalizada de cada uno. Debes comprobar el resultado avisando
 * en caso de que el token no coincida. Puedes añadir un botón cambiar SID que generará un
 * nuevo token en la sesión y así comprobar que detecta si la SID no coincide.
 * 
 */

// Iniciamos la Sesión
session_start(); 

// Si no está el token creado, se crea y se guarda en la sesión
if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(openssl_random_pseudo_bytes(24));
}

// Comprobamos que se envíe el formulario (Control de errores, para evitar Warnings antes de enviar el formulario)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recoge los datos del formulario, guardándolos en una sesión.
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['apellido'] = $_POST['apellido'];
    $_SESSION['asignatura'] = $_POST['asignatura'];
    $_SESSION['grupo'] = $_POST['grupo'];
    $_SESSION['edad'] = $_POST['edad'];
    $_SESSION['cargo'] = $_POST['cargo'];
    $_SESSION["codToken"] = $_POST["codToken"];

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

    <form action="tokens2.php" method="post">
        <h2>Introduzca por favor los siguientes datos:</h2>

         <!-- Línea en oculto para generar el código del token a comparar -->
         <input type="hidden" name="codToken" value="<?php echo $_SESSION['token']; ?>">

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