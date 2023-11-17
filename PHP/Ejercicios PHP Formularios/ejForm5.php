<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 5. Ejercicio 1: Elabora un programa que dado un carácter introducido por el usuario y determine si es:
 * 1. una letra mayúscula 4. un carácter blanco
 * 2. una letra minúscula 5. un carácter de puntuación
 * 3. un carácter numérico 6. un carácter especial
 * Se debe usar funciones para la comprobación de datos
 * 
 * 
 */

 // Guardamos el carácter introducido en una variable
 $char = isset($_GET["char"]) ? $_GET["char"] : null;

 // El if comprueba que no sea null (para evitar mensajes de error al inciar, principalmente)
 // Luego va recorriendo los distintos casos para saber en cuál cae, con las distintas funciones de PHP
 // Carácter especial va a parte, porque hay carácteres en blanco, de puntuación o demás que pueden ser esos + especial
 if ($char !== null) {
    switch ($char){
        case ctype_upper($char): 
            echo $char . " es una letra mayúscula. \n";
            break;
        case ctype_lower($char):
            echo $char . " es una letra minúscula. \n";
            break;
        case ctype_digit($char):
            echo $char . " es  un carácter numérico. \n";
            break;
        case ctype_space($char):
            echo $char . " es un carácter blanco. \n";
            break;
        case ctype_punct($char):
            echo $char . " es un carácter de puntuación. \n";
            break;
    }
    if (!ctype_alnum($char)){
        echo $char . " es un carácter especial. \n";
    }

} else {
    echo "Por favor, introduzca un carácter.";
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
    <title>Form 5 - Jose Zafrilla</title>
</head>


<body>
    <h2>Form 5 - Jose Zafrilla</h2>

    <form action="ejForm5.php" method="get">

    <label for="char">Introduce un carácter:</label>
    <input type="text" id="char" name="char" required maxlength="1">
    <input type="submit" value="Comprobar">
        
 
    </form> 
</body>
</html>