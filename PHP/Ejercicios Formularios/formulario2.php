<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * Formulario 2
 * 
 */


if (isset($_GET["ofertas"])){
    $ofertas = "SÍ";
} else {
    $ofertas = "NO";
}

if (isset($_GET["condiciones"])){
    $condiciones = "SÍ";
} else {
    $condiciones = "NO";
}

echo "<b>Nombre: </b>" . strtoupper($_GET["nombre"]) . "<br>";
echo "<b>Apellidos: </b>" . strtoupper($_GET["apellidos"]) . "<br>";
echo "<b>Sexo: </b>" . strtoupper($_GET["sexo"]) . "<br>";
echo "<b>Correo: </b>" . strtoupper($_GET["correo"]) . "<br>";
echo "<b>Provincia: </b>" . strtoupper($_GET["provincia"]) . "<br>";
echo "<b>Desea recibir información sobre novedades y ofertas: </b> $ofertas" . "<br>";
echo "<b>Declara haber leído y acepta las condiciones y normativa: </b> $condiciones" . "<br>";

?>

<!-- HTML -->
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8" />

    <!-- Nombre del Autor -->
    <meta name="author" content="Jose Zafrilla Ruiz" />
    <link rel="author" href="https://github.com/Jozaru27">

    <!-- Archivo CSS -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Título de Página -->
    <title>Alumnos - Formulario de Registro 2</title>
</head>

<body>
    <h2>Alumnos - Formulario de Registro</h2>

    <form action="formulario1.php" method="get">
        <fieldset>
            <legend> Datos Personales </legend><br>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" maxlength="50"><br><br>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" maxlength="200"><br><br>

            <label for="correo">Correo Electrónico:</label>
            <input type="text" id="correo" name="correo" maxlength="250"><br><br>

            <label for="usuario">Nombre de Usuario:</label>
            <input type="text" id="usuario" name="usuario" maxlength="5"><br><br>

            <label for="contraseña">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" maxlength="15"><br><br>

            <label for="sexo">Sexo:</label><br>
            <input type="radio" id="sexo" name="sexo" value="H">Hombre
            <input type="radio" id="sexo" name="sexo" value="M">Mujer<br><br>

            <label for="provincia">Provincia:</label>
            <select name="provincia">
                <option value="alicante"> Alicante </option>
                <option value="castellon"> Castellón </option>
                <option value="valencia"> Valencia </option>
            </select><br><br>

            <label for="situacion">Situación:</label>
            <select multiple size="2" name="situacion[]">
                <option value="alicante"> Estudiando </option>
                <option value="castellon"> Trabajando </option>
                <option value="valencia"> Buscando Empleo </option>
                <option value="valencia"> Otro </option>
            </select><br><br>

            <label for="comentario">
            <input type="textarea" id="comentario" name="comentario"> 

            <input type="checkbox" name="ofertas" checked>
            <label for="ofertas"> Deseo recibir información sobre novedades y ofertas. </label> <br><br>
            
            <input type="checkbox" name="condiciones" > 
            <label> Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos. </label> <br><br>

            <input type="submit" name="enviar" value="Enviar">
        </fieldset>
    </form> 
</body>
</html>