<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 6. Usa el formulario del ejercicio 6 de Cookies con la tabla de multiplicar de modo que uses la
 * sesión para mostrar el multiplicando, el multiplicador y la tabla actuales y además muestre el
 * multiplicando, el multiplicador y la tabla de la ejecución anterior.
 * 
 */

 session_start();

 // Si la sesión del número está en vacío, recoge los datos del Post
 // Si tiene datos, los almacena en la sesión de número antiguo
 // Lo muestra por pantalla
 if (empty($_SESSION['num'])) {
    $_SESSION['num'] = $_POST['num'];
} else {
    $_SESSION['numAntiguo'] = $_SESSION['num'];
    $_SESSION['num'] = $_POST['num'];

    echo "<h3>El dato introducido anteriormente es: " . $_SESSION['numAntiguo'] . "</h3>";
    // Lógica de la multiplicación con $_SESSION['numAntiguo']
    for ($i = 1; $i <= $_SESSION['numAntiguo']; $i++) {
        $res = $_SESSION['numAntiguo'] * $i;
        echo $_SESSION['numAntiguo'] . " x $i = $res <br>";
    }
}


$num = $_POST["num"];
echo "<h3>Tabla de Multiplicar de: $num</h3>";

// Lógica de la multiplicación
for ($i = 1; $i <= $num; $i++) {
    $res = $num * $i;
    echo "$num x $i = $res <br>";
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
    <title>Sesiones 6 - Jose Zafrilla</title>
</head>


<body>
    <h2>Sesiones 6 - Jose Zafrilla</h2>

    <form action="sesiones6.php" method="post">
    <label for="num">Introduce un número para la tabla de multiplicar:</label>
        <input type="number" id="num" name="num" min="1" max="10" required>
        <input type="submit" value="Generar Tabla">
    </form>
</body>
</html>