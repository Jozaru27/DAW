<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 5. Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
 * programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
 * “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
 * satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.
 */

$combination = 1234;

for ($i = 1; $i <= 4; $i++) {
    $combinationEntered = readline("Por favor, introduce una combinación de 4 cifras para la caja fuerte: ");
    $intentos = 4 - $i;

    if ($combinationEntered == $combination) {
        echo "La caja fuerte se ha abierto satisfactoriamente \n";
        break;
    } else {
        echo "Lo siento, esa no es la combinación \n";
        if ($intentos == 0) {
            echo "Te quedaste sin intentos  \n";
            break;
        }
        echo "Te quedan $intentos intentos \n";
    }
}

?>