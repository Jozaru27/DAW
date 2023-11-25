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
$combinación = 1234;
$intentos = isset($_GET['intentos']) ? $_GET['intentos'] : 4; // El contador de intentos está como campo hidden en el form

// Verificar si se ha enviado un intento. Si el número de intentos es menor a 0, prosigue. Si la combinación introducida coincide con la establecida, el texto del mensaje cambiará a uno que indique éxito.
// Además, el color del mensaje estará en color verde. Como adición personal, establece el número de intentos a 0, así no se puede seguir toqueteando el programa
// Sin embargo, si la combinación no coincide, además de restar un intento, el mensaje dirá que esta no es la combinación. Como adición, mostrará en una línea por debajo, si te has quedado sin intentos o cuántos te quedan
// Además de salir el color del mensaje en rojo.
// Si te quedas sin ningún intento, saldrá un mensaje diciendo directamente que no te quedan intentos, en rojo (y al estar intentos en 0, se deshabilitará el campo y el botón)
// El texto inicial estará en color negro, e indicará que debes introducir una combinación de 4 cifras
if (isset($_GET['combinacion'])) {
    if ($intentos > 0) {
        $combinaciónEntrante = $_GET['combinacion'];

        if ($combinaciónEntrante == $combinación) {
            $mensaje = "La caja fuerte se ha abierto satisfactoriamente";
            $color = "green";
            $intentos = 0;
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

    <!-- El campo de texto y el botón se deshabilitan si intentos llega a 0 -->
    <form action="ejForm12.php" method="get">
        <label for="combinacion">Combinación:</label>
        <input type="text" id="combinacion" name="combinacion" <?php if ($intentos == 0) echo "disabled"; ?>>
        <input type="hidden" name="intentos" value="<?php echo $intentos; ?>">
        <input type="submit" value="Enviar" <?php if ($intentos == 0) echo "disabled"; ?>>
    </form>

    <!-- Sección necesaria para mostrar el mensaje con el color acorde -->
    <div style="color: <?php echo $color; ?>;"><?php echo $mensaje; ?></div>
</body>
</html>