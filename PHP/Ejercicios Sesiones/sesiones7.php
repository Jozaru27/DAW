<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 7. Usa el formulario del ejercicio 7 de Cookies de caja fuerte de modo que uses la sesión para
 * mostrar la contraseña introducida y el número de intentos actuales y además muestre el las
 * contraseñas introducidas de la ejecución anterior. Si abre la caja o llega al máximo de intentos, a
 * los datos anteriores se añadirá la contraseña correcta y un mensaje de éxito o no conseguido
 * 
 */

 session_start();

 // Inicializamos variables
 $combinacionCorrecta = "1234";
 $maxIntentos = 4;
 
 // Inicializamos las variables de sesión si no existen
 if (!isset($_SESSION['intentos'])) {
     $_SESSION['intentos'] = 0;
     $_SESSION['combinaciones'] = [];
 }
 
 // Procesamos el formulario si se envía
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $_SESSION['intentos']++;
 
     $combinacionEntrante = $_POST['combinacionEntrante'];
 
     // Comprobamos la combinación
     if ($combinacionEntrante == $combinacionCorrecta) {
         $mensaje = "¡Bingo!";
         $_SESSION['combinaciones'][] = "Éxito: $combinacionEntrante - ¡Bingo!";
     } else {
         $mensaje = "Error: Combinación incorrecta";
         $_SESSION['combinaciones'][] = "Fallo: $combinacionEntrante - ¡Fallo!";
     }
 }
 
 // Limitamos el número máximo de intentos
 if ($_SESSION['intentos'] >= $maxIntentos) {
     $_SESSION['intentos'] = $maxIntentos;
     $mensaje = "Límite de intentos alcanzado";
     $_SESSION['combinaciones'][] = "Límite de intentos alcanzado - ¡Fallo!";
 }
 
 // Mostramos los datos actuales y anteriores
 echo "Datos actuales: <br>";
 echo "Intentos: {$_SESSION['intentos']} de $maxIntentos <br>";
 
 if (!empty($_SESSION['combinaciones'])) {
     echo "Combinaciones anteriores: <br>";
     foreach ($_SESSION['combinaciones'] as $combinacionAnterior) {
         echo "$combinacionAnterior <br>";
     }
 }

//  session_destroy();
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
    <title>Sesiones 7 - Jose Zafrilla</title>
</head>


<body>
    <h2>Sesiones 7 - Jose Zafrilla</h2>

    <form action="sesiones7.php" method="POST">
        <label for="combinacionEntrante">Combinación:</label>
        <input type="text" id="combinacionEntrante" name="combinacionEntrante">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>