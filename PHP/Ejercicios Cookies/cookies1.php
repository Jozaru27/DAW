<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 1. Crea un formulario sencillo donde el usuario indique su nombre y seleccione si quiere un
 * saludo o despedida. Se debe almacenar en una Cookie el usuario y el saludo y al pulsar Enviar,
 * se debe indicar los valores actuales (usuario y saludo o despedida elegidos) y los valores del
 * usuario anterior y acción elegida almacenadas en la Cookie
 * 
 */

 $cookie_name = "cookie";
 $cookie_value = "Nombre: " . $_GET["nombre"] . "<br> Gesto: " . $_GET["gesto"];

 echo "El valor de nombre enviado ahora es: " . $_GET["nombre"] . "<br>";
 echo "El valor de gesto enviado ahora es: " . $_GET["gesto"] . "<br>";
 echo "<br>";

 if (!empty($_GET)){
  setcookie($cookie_name, $cookie_value);
  echo "Datos de la cookie " . $cookie_name . ": <br>";
  echo $_COOKIE["cookie"] . "<br";
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
    <title>Cookies 1 - Jose Zafrilla</title>
</head>


<body>
    <h2>Cookies 1 - Jose Zafrilla</h2>

    <form action="cookies1.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"><br><br>

        <label for="gesto">Gesto:</label>
        <select name="gesto">
          <option value="Saludo"> Saludo </option>
          <option value="Despedida"> Despedida </option>
        </select><br><br>

        <input type="submit" value="Enviar"> 
    </form> 
</body>
</html>

<?php

?>