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
echo "<b>Correo: </b>" . strtoupper($_GET["correo"]) . "<br>";
echo "<b>Nombre de Usuario: </b>" . strtoupper($_GET["usuario"]) . "<br>";
echo "<b>Password: </b>" . strtoupper($_GET["contraseña"]) . "<br>";
echo "<b>Sexo: </b>" . strtoupper($_GET["sexo"]) . "<br>";
echo "<b>Provincia: </b>" . strtoupper($_GET["provincia"]) . "<br>";
$situaciones = $_GET["situacion"];
foreach ($situaciones as $situacion){
    $situacion = strtoupper($situacion);
    echo "<b>Situación: </b>" . $situacion . "<br>";
}
echo "<b>Comentario: </b>" . strtoupper($_GET["comentario"]) . "<br>";
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
    <title>Jose Zafrilla - Formulario de Registro 2</title>
</head>

<body>
    <h2>Jose Zafrilla - Formulario de Registro 2</h2>

    <form action="formulario2.php" method="get">
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
                <option value="Estudiando"> Estudiando </option>
                <option value="Trabajando"> Trabajando </option>
                <option value="Buscando Empleo"> Buscando Empleo </option>
                <option value="Otro"> Otro </option>
            </select><br><br>

            <label for="comentario">Comentario:
            <textarea id="comentario" name="comentario" rows="6" cols="60"></textarea><br><br>

            <input type="checkbox" name="ofertas" checked>
            <label for="ofertas"> Deseo recibir información sobre novedades y ofertas. </label> <br><br>
            
            <input type="checkbox" name="condiciones"> 
            <label for="condiciones"> Declaro haber leído y aceptar las condiciones generales del programa y la normativa sobre protección de datos. </label> <br><br>

            <input type="submit" name="enviar" value="Enviar">
            <input type="reset" name="borrar" value="Limpiar">
        </fieldset>
    </form> 
</body>
</html>