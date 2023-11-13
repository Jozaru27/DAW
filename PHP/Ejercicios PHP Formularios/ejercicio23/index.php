<?php 
/* FICHERO INDEX.PHP*/
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 23. Escribe un formulario de recogida de datos que conste de dos páginas: En la primera página
 * se solicitan los datos y se muestran errores tras validarlos. En la segunda página se muestra toda
 * la información introducida por el usuario si no hay errores errores. Los datos a recoger son datos
 * personales, nivel de estudios (desplegable), situación actual (selección múltiple: estudiando,
 * trabajando, buscando empleo, desempleado) y hobbies (marcar de varios mostrados y poner otro
 * con opción a introducir texto)
 * 
 * 
 */

//Importamos el archivo con las validaciones (requerido, y lo carga una vez).
require_once 'valida.php';

//Guarda los valores de los campos en variables, siempre y cuando se haya enviado el formulario, si no guardará NULL
$educacion = isset($_POST['educacion']) ? $_POST['educacion'] : null;
$ocupacion = isset($_POST['ocupacion']) ? $_POST['ocupacion'] : null;
$hobbiesList[] = array();

if (isset($_POST['hobby'])) {
    foreach ($_POST['hobby'] as $hobby) {
        $hobbiesList[] = $hobby;
    }
} else {
    $hobbiesList[] = $hobby;
}

$hobby = isset($_POST['hobby[]']) ? $_POST['hobby[]'] : null;
$otroshobbies = isset($_POST['otroshobbieschecked']) ? $_POST['otroshobbies'] : null;
$errores = array(); //Este array guardará los errores de validación que surjan.
$arrayURL = array(); //Este array almacenará los datos del form

$arrayURL = "?educacion=$educacion&ocupacion=$ocupacion&hobbiestList=".$hobbiesList."&otroshobbies=$otroshobbies";

//Pregunta si está llegando una petición por POST, lo que significa que el usuario envió el formulario.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!validarCampoTexto($otroshobbies)) { 
        $errores[] = 'No se ha podido validar el hobby.';
    }
    
    if (!isset($_POST['otroshobbiescheck']) && !empty($_POST['otroshobbies'])){
        $errores[] = 'Tienes que checkear la caja para poder apuntar un hobby.';
    }

    //Verifica si ha encontrado errores y de no haber redirige a la página con el mensaje de que pasó la validación.
    if (!$errores) {
        
        header("Location: validado.php" . $arrayURL);
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

        <label for="educacion">Educación</label>
        <select name="educacion">
            <option value="basica">BÁSICA</option>
            <option value="eso">ESO</option>
            <option value="fp">FP</option>
            <option value="bachiller">BACHILLER</option>
            <option value="universidad">UNIVERSIDAD</option>
        </select><br><br>

        <label for="ocupacion">Ocupación</label>
        <select name="ocupacion">
            <option value="estudiando">Estudiando</option>
            <option value="trabajando">Trabajando</option>
            <option value="buscandoempleo">Buscando Empleo</option>
            <option value="desempleado">Desempleado</option>
        </select><br><br>

        <label for="hobby">Hobby</label><br>
        <input type="checkbox" name="hobby[]" value="cine"><label for="hobby">Cine</label>
        <input type="checkbox" name="hobby[]" value="lectura"><label for="hobby">Lectura</label>
        <input type="checkbox" name="hobby[]" value="videojuegos"><label for="hobby">Videojuegos</label>
        <input type="checkbox" name="hobby[]" value="warhammer"><label for="hobby">Warhammer</label>
        <input type="checkbox" name="otroshobbiescheck" value="otros"><label for="otros">Otros</label>
        <input type="text" name="otroshobbies" placeholder="..."><br><br>
        <input type="submit" value="Enviar" >

        <!-- if con strcmp = devuelve selected if true - vector array_search -->
        <!-- primer elemento === 0 -->
    </form>
</body>

</html>