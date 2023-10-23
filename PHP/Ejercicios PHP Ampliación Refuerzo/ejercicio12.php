<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 12. Crear un programa para introducir números por teclado mientras su suma no alcance o iguale a
 * 1000. Cuando ésto ocurra, debes mostrar los números introducidos, cuántos son, el total de la
 * suma y la media de todos ellos.
*/

// Declaramos el tope que no puede pasarse la suma, así como una varaible para la misma.
// También tenemos un array donde almacenar los números, y un contador con el total de los mismos.
$tope = 1000;
$suma = 0;
$numeros = array();
$totalNumeros = 0;

// Este bucle while se ejecuta mientras que la suma sea menor que 100
while ($suma < $tope) {
    // Pide un número por teclado y lo guarda en una variable
    echo "Introduce un número: ";
    $numero = readline();
    
    // Verifica si la suma excede o iguala a 1000 después de sumarle el número escrito recientemente.
    // Si se pasa, sale del bucle pero no sin antes:
    // A la suma, le suma ese número y actualiza su valor - Guarda el número en el array de números - Incrementa por uno el contador del total de números.
    if ($suma + $numero > $tope) {
        $suma += $numero;
        $numeros[] = $numero;
        $totalNumeros++;
        break;
    }

    // Si no se pasa, a la suma le suma ese número y actualiza su valor.
    // Guarda el número en el array de números.
    // Incrementa por uno el contador del total de números.
    // Sin embargo, Vuelve a ejecutar el while.
    $suma += $numero;
    $numeros[] = $numero;
    $totalNumeros++;
}

// Calcula la media: suma / total de Números
$media = $suma / $totalNumeros;

// Muestra todos los resultados
echo "Números introducidos: " . implode(', ', $numeros) . "\n";
echo "Cantidad de números: " . $totalNumeros . "\n";
echo "Total de la suma: " . $suma . "\n";
echo "Media de los números: " . $media . "\n";

?>