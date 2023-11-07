<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * Formulario 3
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

$horarios = $_GET["horarios"];
foreach ($horarios as $horario){
    $horarioSelect = implode(" / ", $horarios);
}

$conocidos = $_GET["conocido"];
foreach ($conocidos as $conocido){
    $conocidoSelect = implode(" / ", $conocidos);

}

echo "<b>Nombre: </b>" . strtoupper($_GET["nombre"]) . "<br>";
echo "<b>Apellidos: </b>" . strtoupper($_GET["apellidos"]) . "<br>";
echo "<b>Correo: </b>" . strtoupper($_GET["correo"]) . "<br>";
echo "<b>Nombre de Usuario: </b>" . strtoupper($_GET["usuario"]) . "<br>";
echo "<b>Password: </b>" . strtoupper($_GET["contraseña"]) . "<br>";
echo "<b>Sexo: </b>" . strtoupper($_GET["sexo"]) . "<br>";
echo "<b>Provincia: </b>" . strtoupper($_GET["provincia"]) . "<br>";
echo "<b>Horario: </b>" . $horarioSelect . "<br>";
echo "<b>¿Cómo nos ha conocido?:</b> " . strtoupper($conocidoSelect) . "<br>";
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
    <title>Alumnos - Formulario de Registro 3</title>
</head>

<body>
    <h2>Alumnos - Formulario de Registro 3</h2>

    <form action="formulario3.php" method="get">
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

            <label for="horarios">Horario de Contacto:</label>
            <select id="horarios" name="horarios[]" size="2" multiple>
                <option value="8-14">De 8 a 14 horas</option>
                <option value="14-18">De 14 a 18 horas</option>
                <option value="18-21">De 18 a 21 horas</option>
            </select><br><br>

            <label>¿Cómo nos ha conocido?</label><br><br>
            <input type="checkbox" id="amigo" name="conocido[]" value="Un Amigo">
            <label for="amigo">Un Amigo</label>
            <input type="checkbox" id="web" name="conocido[]" value="Web">
            <label for="web">Web</label>
            <input type="checkbox" id="prensa" name="conocido[]" value="Prensa">
            <label for="prensa">Prensa</label>
            <input type="checkbox" id="otros" name="conocido[]" value="Otros">
            <label for="otros">Otros</label><br><br>

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