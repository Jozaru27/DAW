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

//Iniciamos estos arrays
$errores = array(); //Este array guardará los errores de validación que surjan.
$arrayURL = array(); //Este array almacenará los datos del form

//Guarda los valores de los campos en variables, siempre y cuando se haya enviado el formulario, si no guardará NULL
if (isset($_POST['nombre'])){
    $nombre = $_POST['nombre'];
    $arrayURL['nombre'] = $nombre;
} else{
    $nombre=null;
}

if (isset($_POST['apellidos'])){
    $apellidos = $_POST['apellidos'];
    $arrayURL['apellidos'] = $apellidos;
} else{
    $apellidos = null;
}

if (isset($_POST['email'])){
    $email = $_POST['email'];
    $arrayURL['email'] = $email;
} else{
    $email = null;
}

if (isset($_POST['contraseña'])){
    $contraseña = $_POST['contraseña'];
    $arrayURL['contraseña'] = $contraseña;
} else{
    $contraseña = null;
}

if (isset($_POST['sexo'])){
    $sexo = $_POST['sexo'];
    $arrayURL['sexo'] = $sexo; //este lo tenia comment
} else{
    $sexo=null;
}

if (isset($_POST['educacion'])){
    $educacion = $_POST['educacion'];
    $arrayURL['educacion'] = $educacion;
} else{
    $educacion=null;
}

if (array_key_exists('ocupacion',$_POST)){
    $ocupacion='';
    foreach ($_POST['ocupacion'] as $actual){
        if ($ocupacion===''){
            $ocupacion=$actual;
        } else{
            $ocupacion=$ocupacion."+".$actual;
        } 
    }
    $arrayURL['ocupacion']=$ocupacion;
} else{
    $ocupacion=null;
}

if (array_key_exists('hobby',$_POST)){
    $hobby='';
    foreach ($_POST['hobby'] as $hobbie){
        if ($hobby===''){
            $hobby=$hobbie;
        } else {
            $hobby=$hobby."+".$hobbie;
        }
    }
    $arrayURL['hobby']=$hobby;
} else{
    $hobby=null;
}

if (isset($_POST['otroshobbiescheck'])){
    $otroshobbiescheck = $_POST['otroshobbiescheck'];
   //$arrayURL['otroshobbiescheck'] = $otroshobbiescheck;
} else{
    $otroshobbiescheck=null;
}

if (isset($_POST['otroshobbiestext']) && isset($_POST['otroshobbiescheck'])){
    $otroshobbiestext = $_POST['otroshobbiestext'];
    $arrayURL['otroshobbiestext'] = $otroshobbiestext;
} else{
    $otroshobbiestext=null;
}


//Pregunta si está llegando una petición por POST, lo que significa que el usuario envió el formulario.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //Valida que el campo nombre no esté vacío.
    if (!validaRequerido($nombre)) { 
        $errores[] = 'Campo nombre vacio.';
    //Valida que el campo nombre sea correcto.
    } else if (!validaAlfabeto($nombre)) { 
        $errores[] = 'Nombre introducido es incorrecto.';
    }

    //Valida que el campo nombre no esté vacío.
    if (!validaRequerido($apellidos)) { 
        $errores[] = 'Campo apellidos vacio.';
    //Comprueba que el campo nombre sea correcto.
    } else if (!validaAlfabeto($apellidos)) { 
        $errores[] = 'Apellido introducido es incorrecto.';
    }
    
    //Comprueba que el campo password no esté vacío.
    if (!validaRequerido($contraseña)) {
        $errores[] = 'No se ha introducido password.';
    //Comprueba que el campo password sea correcto.
    } else if (!validaAlfanum($contraseña)) { 
        $errores[] = 'El campo password es incorrecto.';
    //Comprueba que el campo password tenga la longuitud correcta.
    } else if (strlen($contraseña)<6) {
        $errores[] = 'El campo password contiene menos de 6 caracteres.';
    }

    //Comprueba que el campo email no esté vacío.
    if (!validaRequerido($email)) { 
        $errores[] = 'No se ha introducido email.';
    //Comprueba que el campo email sea correcto.
    } else if (!validaEmail($email)) {
        $errores[] = 'El campo email es incorrecto.';
    }

    // //Comprueba que 
    // if (!validaAlfanum($otroshobbiestext)) {
    //     $errores[] = 'El campo hobbie es incorrecto.';
    // }

    // Cuando se pulsa el botón de validar, muestra el mensaje en caso de no haber error
    // Si hay algún error, los mostrará como lista en html
    if (isset($_POST["validar"])){
        // $_POST['validar']=="Validar" Esto da error de array key. En el enviar pasaba lo mismo
        if(!$errores){
            echo "<h3 style='color:#0f0'>El formulario se ha validado correctamente</h3>";
        } 
    }

    // Cuando se pulsa el botón de enviar, verifica si hay errores, y si no hay redirige a la otra página
    if (isset($_POST["enviar"])){

        $url='';

        // Genera la URL con parámetros
        foreach ($arrayURL as $key=>$param){
            if ($url<>''){
                $url=$url."&";
            }
            if ($param<>''){
            $url=$url.$key."=".$param;
            }
        
        } 

        // Si ha validado, no hay errores, y hay datos, redirige a la página de resultado
        if(!$errores && ($url!='')){
            header('Location: validado.php?'.htmlspecialchars($url));
            exit;
        } else {
            echo "<h3 style='color:#f00'>Debe validar el formulario antes de enviar los datos<h3>";
        }
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

        <label for="educacion">Educación</label>
        <select name="educacion">
            <option value="Sin estudios" <?php if ($educacion=='Sin estudios') echo "SELECTED" ?>>Sin estudios</option>
            <option value="basica" <?php if ($educacion=='basica') echo "SELECTED" ?>>Básica</option>
            <option value="eso" <?php if ($educacion=='eso') echo "SELECTED" ?>>Educación Secundaria Obligatoria</option>
            <option value="fp" <?php if ($educacion=='fp') echo "SELECTED" ?>>Formación Profesional</option>
            <option value="bachiller" <?php if ($educacion=='bachiller') echo "SELECTED" ?>>Bachiller</option>
            <option value="universidad" <?php if ($educacion=='universidad') echo "SELECTED" ?>>Universidad</option>
        </select><br><br>

        <label for="ocupacion">Ocupación</label>
        <select name="ocupacion[]" multiple>
            <option value="Estudiando" <?php if (in_array('Estudiando',$_POST["ocupacion"])) echo "SELECTED" ?>>Estudiando</option>
            <option value="Trabajando" <?php if (in_array('Trabajando', $_POST["ocupacion"])) echo "SELECTED" ?>>Trabajando</option>
            <option value="Buscando Empleo" <?php if (in_array('Buscando Empleo', $_POST["ocupacion"])) echo "SELECTED" ?>>Buscando Empleo</option>
            <option value="Desempleado" <?php if (in_array('Desempleado', $_POST["ocupacion"])) echo "SELECTED" ?>>Desempleado</option>
        </select><br><br> 
        <!-- STRPOS CACA === HACE QUE CUANDO VALIDES/CARGUES EL FORMULARIO, TE SELECCIONE TODAS LAS OPCIONES -->

        <label for="hobby">Hobby</label><br>
        <input type="checkbox" name="hobby[]" value="cine" <?php if (strpos($hobby,'cine')==0) echo "SELECTED" ?>><label for="hobby">Cine</label>
        <input type="checkbox" name="hobby[]" value="lectura" <?php if (strpos($hobby,'lectura')) echo "SELECTED" ?>><label for="hobby">Lectura</label>
        <input type="checkbox" name="hobby[]" value="videojuegos" <?php if (strpos($hobby,'videojuegos')) echo "SELECTED" ?>><label for="hobby">Videojuegos</label>
        <input type="checkbox" name="hobby[]" value="warhammer" <?php if (strpos($hobby,'warhammer')) echo "SELECTED" ?>><label for="hobby">Warhammer</label>
        <input type="checkbox" name="otroshobbiescheck" value="otros" <?php if ($otroshobbiescheck==='otros') echo "SELECTED" ?>><label for="otros">Otros</label>
        <input type="text" name="otroshobbiestext" placeholder="..." value="<?php echo $otroshobbiestext?>"><br><br>
        
        <input type="submit" name="validar" value="Validar" />
        <input type="reset" name="borrar" value="Limpiar datos" />
        <input type="submit" name="enviar" value="Enviar" />

        <!-- if con strcmp (es strpos )= devuelve selected if true - vector array_search -->
        <!-- primer elemento === 0 -->
    </form>
</body>

</html>