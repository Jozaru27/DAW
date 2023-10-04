<?php
/**
 * @author Jose Zafrilla Ruiz jozaru27@gmail.com
 * 
 * 2. Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base
 * de la pirámide debe estar formada por 9 asteriscos
*/

function crear_piramide(){              // Función en cuestión
    $cadena = "";                       // Crea una cadena vacía
    for ($i = 0; $i < 9; $i++){         // Inicia el primer for para recorrer los anidados 9 veces
        for ($k = 0; $k < 9-$i; $k++){  // Este bucle for añade un espacio al principio (para que la pirámide no esté alineada a la izquierda)
            $cadena .= " ";
        }
        for ($j = 0; $j < $i; $j++){    // Este bucle for añade un asterisco a la pirámide según nivel (uno por cada), además de un espacio para que los asteriscos no estén pegados ni alineados
            $cadena .= "* ";
        } $cadena .= "\n";              // Salto de línea
    } echo $cadena;                     // Llama la cadena al final
}

crear_piramide();                       // Llama a la función

?>