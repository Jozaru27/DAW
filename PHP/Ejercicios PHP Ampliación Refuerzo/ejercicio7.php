<?php

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 7. Define tres arrays de 20 números enteros cada uno, con nombres “numero”, “cuadrado” y
 * “cubo”. Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se
 * deben almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo”
 * se deben almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el
 * contenido de los tres arrays dispuesto en tres columnas
 */

$numero = array();
$cuadrado = array();
$cubo = array();

// Este bucle for carga el array con valores aleatorios, entre 0 y 100, un máximo de 20 veces. Luego calcula y guarda tanto el cuadrado como el cubo
for ($i = 0; $i < 20; $i++) {
    $numero[$i] = rand(0, 100);
    $cuadrado[$i] = $numero[$i] ** 2; 
    $cubo[$i] = $numero[$i] ** 3;    
}

// Muestra el contenido del array en tres columnas, dentro de una tabla
// Imprime por pantalla las cabeceras de las columnas (th)
echo "<table border='1'>";
echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";

// Este bucle for recorre las 20 posiciones de los arrays mostrando su contenido en table datas
for ($i = 0; $i < 20; $i++) {
    echo "<tr>";
    echo "<td>" . $numero[$i] . "</td>";
    echo "<td>" . $cuadrado[$i] . "</td>";
    echo "<td>" . $cubo[$i] . "</td> \n";
    echo "</tr>";
}

echo "</table>";


?>