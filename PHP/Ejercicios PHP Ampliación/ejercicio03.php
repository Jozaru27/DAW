<?php
/**
 * @author Jose Zafrilla Ruiz jozaru27@gmail.com
 * 
 * 3. Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente
 * el contorno hecho con asteriscos)
*/

function crear_piramide ($filas) {
    $cadena = null;
    for ($i = 1; $i <= $filas; $i++) {
        for ($h = $i; $h <= $i; $h++) {
            $cadena .= "*";
        }
        echo $cadena."\n";
    }
}

?>