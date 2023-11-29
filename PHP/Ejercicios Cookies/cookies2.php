<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 2. Crea un formulario en el que se le pida al usuario los siguientes datos: nombre y preferencia de
 * idioma, color y ciudad. Crea una Cookie que almacene estos datos y que, al recargar la página
 * por realizar una nueva selección de datos (y posiblemente usuario) muestre los datos
 * introducidos en el formulario junto con los datos obtenidos de la Cookie
 * 
 */

 $cookie_name = "cookie";
 $cookie_value = "Nombre: " . $_GET["nombre"] . "<br> Idioma: " . $_GET["idioma"] . "<br> Color: " . $_GET["color"] . "<br> Ciudad: " . $_GET["ciudad"];

 echo "El valor de nombre enviado ahora es: " . $_GET["nombre"] . "<br>";
 echo "El valor de idioma enviado ahora es: " . $_GET["idioma"] . "<br>";
 echo "El valor de color enviado ahora es: " . $_GET["color"] . "<br>";
 echo "El valor de ciudad enviado ahora es: " . $_GET["ciudad"] . "<br>";
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
    <title>Cookies 2 - Jose Zafrilla</title>
</head>


<body>
    <h2>Cookies 2 - Jose Zafrilla</h2>

    <form action="cookies2.php" method="get">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre"><br><br>

        <label for="idioma">Idioma:</label>
        <select name="idioma">
          <option value="Castellano"> Castellano </option>
          <option value="Valenciano"> Valenciano </option>
          <option value="Inglés"> Inglés </option>
        </select><br><br>

        <label for="color">Color:</label>
        <input type="text" name="color"><br><br>

        <label for="ciudad">Ciudad:</label>
        <select name="ciudad">
          <option value="Alicante"> Alicante </option>
          <option value="Castellón"> Castellón </option>
          <option value="Valencia"> Valencia </option>
        </select><br><br>

        <input type="submit" value="Enviar"> 
    </form> 
</body>
</html>

<?php

?>