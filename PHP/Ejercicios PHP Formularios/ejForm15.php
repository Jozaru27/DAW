<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 *
 * 15. Formulario 3, petición por POST y mostrar en NombreAlumnoForm3OK.php los resultados indicando el campo en cursiva y el contenido en negrita
 *
 */

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
    <title>Formulario 3 - Jose Zafrilla</title>
</head>

<body>
    <h2>Formulario 3 - Jose Zafrilla</h2>

    <form action="JoseZafrillaForm3OK.php" method="post">
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