<?php 
/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 3. Usa el formulario (Ejercicio 1 UD5) del selector de operación y las operaciones de suma, resta,
 * división y multiplicación de modo que se guarde en la Cookie las operaciones elegidas y
 * muestre el resultado de la operación indicando cuáles han sido las operaciones elegidas en la
 * ejecución actual (formulario) y las elegidas en la operación anterior a la actual (cookie).
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
    <title>Cookies 3 - Jose Zafrilla</title>
</head>


<body>
    <h2>Cookies 3 - Jose Zafrilla</h2>

    <form action="cookies3.php" method="get">
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