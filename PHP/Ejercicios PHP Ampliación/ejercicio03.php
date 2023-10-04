<?php
/**
 * @author Jose Zafrilla Ruiz jozaru27@gmail.com
 * 
 * 3. Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente
 * el contorno hecho con asteriscos)
*/

function crear_piramide(){                // Función en cuestión
    $cadena = "        *" . "\n";         // Crea la primera línea
    for ($i = 0; $i < 7; $i++){           // Inicia el primer for para recorrer los anidados 7 veces
        for ($k = 0; $k < 8-$i-1; $k++){  // Este bucle for añade un espacio al principio (para que la pirámide no esté alineada a la izquierda)
            $cadena .= " ";
        }
        $cadena .= "* ";
        for ($j = 0; $j < $i; $j++){      // Este bucle for añade un asterisco a la pirámide según nivel (uno por cada), además del relleno
            $cadena .= "  ";
        } $cadena .= "* \n";              // Salto de línea
    } for($h = 0; $h < 9; $h++){          // Este bucle for crea la línea final
        $cadena .= "* ";                
    }
    echo $cadena;                         // Llama la cadena al final
} 

crear_piramide();     

?>