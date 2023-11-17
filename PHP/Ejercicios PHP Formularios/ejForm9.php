<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 9. Ejercicio 8. Crea la tabla de multiplicar de un número indicado por el usuario siendo que el
 * multiplicador se podrá seleccionar entre 1 y 10. Se multiplicará desde 1 al multiplicador
 * seleccionado.
 * 
 */

// Guardamos el num introducido en el form en una variable
$num = isset($_GET['num']) ? $_GET["num"] : null;

// Comprobamos que no sea null (control de errores iniciales)
// Si no es null, mostramos la tabla
if ($num !== null){
    for ($i = 1; $i <= $num; $i++){
        echo "$num X $i = " . ($num * $i) . "<br>";
    }
} else {
    echo "Por favor, introduce un número.";
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
    <title>Form 9 - Jose Zafrilla</title>
</head>

<body>
    <h2>Form 9 - Jose Zafrilla</h2>

    <form action="ejForm9.php" method="get">
        <label for="num">Introduce un número para la tabla de multiplicar:</label>
        <input type="number" id="num" name="num" min="1" max="10" required>
        <input type="submit" value="Generar Tabla">
    </form> 
</body>
</html>
