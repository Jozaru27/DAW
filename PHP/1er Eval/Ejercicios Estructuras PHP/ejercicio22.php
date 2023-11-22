<?php

/**
* 
* @author Jose Zafrilla Ruiz
*
* 22. Escribe un programa que lea una lista de diez números y determine cuántos son positivos, y
* cuántos son negativos (muestra los números, la cantidad de positivos y negativos y el porcentaje
* de cada grupo
*
*/

// Array para almacenar los números
$numeroArray = array();

// Bucle for que pide 10 números por teclado y los va guardando en el array
for ($i = 1; $i <= 10; $i++) {
    echo "Ingresa el número $i: ";
    $numero = (float)readline();
    $numeroArray[] = $numero;
}

// Contadores para números positivos y negativos
$positivos = 0;
$negativos = 0;

// Muestra los números introducidos, y dependiendo de si son mayor o menor a 0, aumenta el valor de los contadores
echo "Números ingresados: \n";
foreach ($numeroArray as $numero) {
    echo "$numero ";

    if ($numero > 0) {
        $positivos++;
    } elseif ($numero < 0) {
        $negativos++;
    }
}

// Cuenta los números del array y los guarda en una variable para sacar los porcentajes
// Divide los positivos y los negativos por los totales para sacar el porcentaje
$numerosTotales = count($numeroArray);
$porcentajePositivo = ($positivos / $numerosTotales) * 100;
$porcentajeNegativo = ($negativos / $numerosTotales) * 100;

echo "\n";

// Muestra los números positivos y los negativos, además de sus porcentajes
echo "Cantidad de números positivos: $positivos \n";
echo "Cantidad de números negativos: $negativos \n";
echo "Porcentaje de números positivos: $porcentajePositivo% \n";
echo "Porcentaje de números negativos: $porcentajeNegativo% \n";

?>
