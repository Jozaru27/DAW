<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 11. Aplica la sesión en el ejercicio 23 de la UD5 para poder pasar los datos en lugar de construir la
 * url para enviarlos. *He acortado un poco el ejercicio por el exceso de campos, pues me estaba agobiando un poco *

 * 
 */
session_start();

// Guardamos en distintas variables los datos
$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : null;
$apellidos = isset($_POST["apellidos"]) ? $_POST["apellidos"] : null;
$estudios = isset($_POST["estudios"]) ? $_POST["estudios"] : null;
$situacion = isset($_POST["situacion"]) ? $_POST["situacion"] : [];
$email = isset($_POST["email"]) ? $_POST["email"] : null;
$contraseña = isset($_POST["contraseña"]) ? $_POST["contraseña"] : null;
$sexo = isset($_POST["sexo"]) ? $_POST["sexo"] : null;

// Verificamos si ya hay datos en la sesión
if (
    empty($_SESSION["nombre"]) && empty($_SESSION["apellidos"]) && empty($_SESSION["estudios"])
    && empty($_SESSION["situacion"]) && empty($_SESSION["email"]) && empty($_SESSION["contraseña"]) && empty($_SESSION["sexo"])
) {
    // Si no hay datos, los asignamos directamente
    $_SESSION["nombre"] = $nombre;
    $_SESSION["apellidos"] = $apellidos;
    $_SESSION["estudios"] = $estudios;
    $_SESSION["situacion"] = $situacion;
    $_SESSION["email"] = $email;
    $_SESSION["contraseña"] = $contraseña;
    $_SESSION["sexo"] = $sexo;
} else {
    // Si hay datos, los guardamos como datos antiguos y actualizamos con los nuevos datos del formulario
    $_SESSION["nombreAntiguo"] = $_SESSION["nombre"];
    $_SESSION["apellidosAntiguos"] = $_SESSION["apellidos"];
    $_SESSION["estudiosAntiguo"] = $_SESSION["estudios"];
    $_SESSION["situacionAntigua"] = $_SESSION["situacion"];
    $_SESSION["emailAntiguo"] = $_SESSION["email"];
    $_SESSION["contraseñaAntigua"] = $_SESSION["contraseña"];
    $_SESSION["sexoAntiguo"] = $_SESSION["sexo"];

    $_SESSION["nombre"] = $nombre;
    $_SESSION["apellidos"] = $apellidos;
    $_SESSION["estudios"] = $estudios;
    $_SESSION["situacion"] = $situacion;
    $_SESSION["email"] = $email;
    $_SESSION["contraseña"] = $contraseña;
    $_SESSION["sexo"] = $sexo;

    // Redirección a la página de validación
    if (isset($_POST['enviar'])) {
        header('Location: sesiones11validar.php');
        exit;
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
    <title>Sesiones 11 - Jose Zafrilla</title>
</head>


<body>
    <h2>Sesiones 11 - Jose Zafrilla</h2>

    
    <form action="sesiones11.php" method="POST">
    <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre?>"><br><br/>

        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos" value="<?php echo $apellidos?>"><br><br/>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php echo $email?>"><br><br/>

        <label for="contraseña">Contraseña</label>
        <input type="text" name="contraseña" value="<?php echo $contraseña?>"><br/>
            
        <label for ="sexo">Sexo</label>
        <input type="radio" name="sexo" value="H" <?php if ($sexo == 'H') echo "CHECKED" ?>>Hombre
        <input type="radio" name="sexo" value="M" <?php if ($sexo == 'M') echo "CHECKED" ?>>Mujer<br><br/>

        <label for="estudios">Educación</label>
        <select name="estudios">
            <option value="Sin educacion" <?php if ($estudios=='Sin educacion') echo "SELECTED" ?>>Sin educacion</option>
            <option value="basica" <?php if ($estudios=='basica') echo "SELECTED" ?>>Básica</option>
            <option value="eso" <?php if ($estudios=='eso') echo "SELECTED" ?>>Educación Secundaria Obligatoria</option>
            <option value="fp" <?php if ($estudios=='fp') echo "SELECTED" ?>>Formación Profesional</option>
            <option value="bachiller" <?php if ($estudios=='bachiller') echo "SELECTED" ?>>Bachiller</option>
            <option value="universidad" <?php if ($estudios=='universidad') echo "SELECTED" ?>>Universidad</option>
        </select><br><br>

        <label for="situacion">Ocupación</label>
        <select name="situacion[]" multiple>
            <option value="Estudiando" <?php if (isset($_POST["ocupacion"]) && is_array($_POST["ocupacion"]) && in_array('Estudiando', $_POST["ocupacion"])) echo "SELECTED" ?>>Estudiando</option>
            <option value="Trabajando" <?php if (isset($_POST["ocupacion"]) && is_array($_POST["ocupacion"]) && in_array('Trabajando', $_POST["ocupacion"])) echo "SELECTED" ?>>Trabajando</option>
            <option value="Buscando Empleo" <?php if (isset($_POST["ocupacion"]) && is_array($_POST["ocupacion"]) && in_array('Buscando Empleo', $_POST["ocupacion"])) echo "SELECTED" ?>>Buscando Empleo</option>
            <option value="Desempleado" <?php if (isset($_POST["ocupacion"]) && is_array($_POST["ocupacion"]) && in_array('Desempleado', $_POST["ocupacion"])) echo "SELECTED" ?>>Desempleado</option>
        </select><br><br> 
        <!-- STRPOS no siempre sirve, depende del caso === HACE QUE CUANDO VALIDES/CARGUES EL FORMULARIO, TE SELECCIONE TODAS LAS OPCIONES -->
        <!-- Error - Hobbies daba error por el otros hobbies, así que lo he omitido -->
        
        <input type="reset" name="borrar" value="Limpiar datos" />
        <input type="submit" name="enviar" value="Enviar" />
    </form>

</body>
</html>