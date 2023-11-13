<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 22. Escribe un formulario que solicite una dirección de correo y que la confirme e indique si
 * acepta recibir publicidad. Añade botón Enviar y Borrar. Cuando enviemos, iremos a otra página
 * donde se le indique el email y si ha aceptado recibir publicidad o no. El botón borrar se
 * mantendrá en el mismo formulario inicial pero limpiará todos los campos.
 * 
 * 
 */

 // Inicialización de variables para el correo y publicidad
$email = '';
$aceptaPublicidad = '';

// Obtener datos
$email = test_input($_GET["email"]);
$aceptaPublicidad = isset($_GET["aceptaPublicidad"]) ? "Sí" : "No";


// Función para limpiar los datos de entrada
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
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
    <title>Jose Zafrilla - Formulario Ejercicio 22</title>
</head>


<body>
    <h2>Jose Zafrilla - Formulario Ejercicio 22</h2>

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