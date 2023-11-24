<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 *
 * 12. Ejercicio 5. Realiza el control de acceso a una caja fuerte. La combinación será un número de
 * 4 cifras. El programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el
 * mensaje “Lo siento, esa no es la combinación” en color rojo y si acertamos se nos dirá “La caja
 * fuerte se ha abierto satisfactoriamente” en color verde. Tendremos cuatro oportunidades para
 * abrir la caja fuerte.
 *
 */

// Inicializar la combinación y el contador de intentos
$combination = 1234;
$intentos = isset($_GET['intentos']) ? $_GET['intentos'] : 4;

// Verificar si se ha enviado un intento
if (isset($_GET['combinacion'])) {
    if ($intentos > 0) {
        $combinationEntered = $_GET['combinacion'];

        if ($combinationEntered == $combination) {
            $mensaje = "La caja fuerte se ha abierto satisfactoriamente";
            $color = "green";
            $intentos = 0; // Establecer intentos a 0 para deshabilitar más envíos
        } else {
            $mensaje = "Lo siento, esa no es la combinación";
            $intentos = $intentos - 1;
            if ($intentos == 0) {
                $mensaje .= "<br>Te quedaste sin intentos";
            } else {
                $mensaje .= "<br>Te quedan $intentos intentos";
            }
            $color = "red";
        }
    } else {
        $mensaje = "Te quedaste sin intentos";
        $color = "red";
    }
} else {
    // Si no se ha enviado un intento, mostrar mensaje predeterminado
    $mensaje = "Introduce una combinación de 4 cifras para la caja fuerte";
    $color = "black";
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
    <title>Form 12 - Jose Zafrilla</title>
</head>

<body>
    <h2>Form 12 - Jose Zafrilla</h2>

    <form action="ejForm12.php" method="get">
        <label for="combinacion">Combinación:</label>
        <input type="text" id="combinacion" name="combinacion" <?php if ($intentos == 0) echo "disabled"; ?>>
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">
        <input type="submit" value="Enviar" <?php if ($intentos == 0) echo "disabled"; ?>>
    </form>

    <div style="color: <?php echo $color; ?>;"><?php echo $mensaje; ?></div>
</body>
</html>