<?php 
/* FICHERO INDEX.PHP*/

require_once 'valida.php'; //Importamos el archivo con las validaciones (requerido, y lo carga una vez).

//Guarda los valores de los campos en variables, siempre y cuando se haya enviado el formulario, si no guardará NULL
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
$edad = isset($_POST['edad']) ? $_POST['edad'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$errores = array(); //Este array guardará los errores de validación que surjan.

//Pregunta si está llegando una petición por POST, lo que significa que el usuario envió el formulario.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!validaRequerido($nombre)) { //Valida que el campo nombre no esté vacío.
        $errores[] = 'El campo nombre es incorrecto.';
    }
    $opciones_edad = array(
        'options' => array( //Definimos el rango de edad entre 3 a 130.
            'min_range' => 3,
            'max_range' => 130
        )
    );
    if (!validarEntero($edad, $opciones_edad)) { //Valida la edad con un rango de 3 a 130 años.
        $errores[] = 'El campo edad es incorrecto.';
    }
    if (!validaEmail($email)) { //Valida que el campo email sea correcto.
        $errores[] = 'El campo email es incorrecto.';
    }
    //Verifica si ha encontrado errores y de no haber redirige a la página con el mensaje de que pasó la validación.
    if (!$errores) {
        header('Location: validado.php');
        exit;
    }
}

?>

<!-- HTML -->

<!DOCTYPE html>
<html>

<head>
    <title> Formulario </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <?php if ($errores) : ?>
        <ul style="color: #f00;">
            <?php foreach ($errores as $error) : ?>
                <li> <?php echo $error ?> </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form method="post" action="index.php">
        <label> Nombre </label><br />
        <input type="text" name="nombre" value="<?php echo $nombre ?>" /><br />
        <label> Edad </label><br />
        <input type="text" name="edad" size="3" value="<?php echo $edad ?>" /><br />
        <label> E-mail </label><br />
        <input type="text" name="email" value="<?php echo $email ?>" /><br />
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>