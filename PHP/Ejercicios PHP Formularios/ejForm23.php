<?php 

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
    <title>Jose Zafrilla - Formulario Ejercicio 23</title>
</head>


<body>
    <h2>Jose Zafrilla - Formulario Ejercicio 23</h2>

    <form method="GET" action="resultado22.php">
        <label for="email">Correo Electrónico:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="aceptaPublicidad">Aceptar recibir publicidad:</label>
        <input type="checkbox" name="aceptaPublicidad" id="aceptaPublicidad"><br><br>

        <input type="submit" name="enviar" value="Enviar">
        <input type="reset" value="Borrar">
    </form>

</body>
</html>