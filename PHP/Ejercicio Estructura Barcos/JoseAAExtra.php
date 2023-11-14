<?php 

/**
 * 
 * @author Jose Zafrilla Ruiz
 * 
 * 1. Crea un array asociativo para personas que contengan los siguientes datos: Nombre, Dirección, Teléfono, Población (debe ser Valencia o Alicante). Al menos debe haber 5 personas distintas
 * 2. Recorre la estructura anterior para mostrar todos los datos de cada persona
 * 3. Para cada una de las personas, debes incluir sus hobbies o favoritos que consisten en al menos 3 películas, 3 libros y 3 canciones. Modifica la estructura anterior para reflejar estos cambios
 * 4. Recorre la estructura anterior para mostrar todos los datos de cada persona y sus hobbies
 * 
 * 
 */

// Array asociativo para personas - Antes del cambio
// $personas = array(
//     "persona1" => array(
//         "nombre" => "Juanico Golondrina",
//         "direccion" => "Calle Adolfo Alameda, 8 pta2",
//         "telefono" => "123456789",
//         "poblacion" => "Valencia"
//     ),
//     "persona2" => array(
//         "nombre" => "Pepe Aparici",
//         "direccion" => "Calle Boniato Barnizado, 3",
//         "telefono" => "987654321",
//         "poblacion" => "Alicante"
//     ),
//     "persona3" => array(
//         "nombre" => "Pepe Periquito",
//         "direccion" => "Calle Calambre Cochambroso, 4 pta3",
//         "telefono" => "111222333",
//         "poblacion" => "Valencia"
//     ),
//     "persona4" => array(
//         "nombre" => "Branqueta",
//         "direccion" => "Calle Danone Dalmau, 5",
//         "telefono" => "444555666",
//         "poblacion" => "Alicante"
//     ),
//     "persona5" => array(
//         "nombre" => "Richard Gere",
//         "direccion" => "Calle Esperanza Esperanzadora, 7-B",
//         "telefono" => "777888999",
//         "poblacion" => "Valencia"
//     )
// );

// Recorre la estructura para mostrar los datos de cada persona - Antes del cambio
// foreach ($personas as $persona => $datos) {
//     echo "La persona $persona tiene como datos: \n";
//     echo "Nombre: " . $datos["nombre"] . "\n";
//     echo "Dirección: " . $datos["direccion"] . "\n";
//     echo "Teléfono: " . $datos["telefono"] . "\n";
//     echo "Población: " . $datos["poblacion"] . "\n\n";
// }

// Array asociativo para personas con hobbies
$personas = array(
    "persona1" => array(
        "nombre" => "Juanico Golondrina",
        "direccion" => "Calle Adolfo Alameda, 8 pta2",
        "telefono" => "123456789",
        "poblacion" => "Valencia",
        "hobbies" => array(
            "peliculas" => array("Las Peripecias de Adrián Oriola", "Adrián Oriola VS PHP", "Adrián Oriola y PHP: Alianza por sorpresa"),
            "libros" => array("Javier Pintor: SQL Básico", "Pintor: Una retrospectiva al alma", "J. Painter: Los pelos albergan poder"),
            "canciones" => array("Más vale no estar, que estar sin hacer nada", "Desdichados Formularios", "Javascript: Bachata")
        )
    ),
    "persona2" => array(
        "nombre" => "Pepe Aparici",
        "direccion" => "Calle Boniato Barnizado, 3",
        "telefono" => "987654321",
        "poblacion" => "Alicante",
        "hobbies" => array(
            "peliculas" => array("Las Peripecias de Adrián Oriola", "Adrián Oriola VS PHP", "Adrián Oriola y PHP: Alianza por sorpresa"),
            "libros" => array("Javier Pintor: SQL Básico", "Pintor: Una retrospectiva al alma", "J. Painter: Los pelos albergan poder"),
            "canciones" => array("Más vale no estar, que estar sin hacer nada", "Desdichados Formularios", "Javascript: Bachata")
        )
    ),
    "persona3" => array(
        "nombre" => "Pepe Periquito",
        "direccion" => "Calle Calambre Cochambroso, 4 pta3",
        "telefono" => "111222333",
        "poblacion" => "Valencia",
        "hobbies" => array(
            "peliculas" => array("Las Peripecias de Adrián Oriola", "Adrián Oriola VS PHP", "Adrián Oriola y PHP: Alianza por sorpresa"),
            "libros" => array("Javier Pintor: SQL Básico", "Pintor: Una retrospectiva al alma", "J. Painter: Los pelos albergan poder"),
            "canciones" => array("Más vale no estar, que estar sin hacer nada", "Desdichados Formularios", "Javascript: Bachata")
        )
    ),
    "persona4" => array(
        "nombre" => "Branqueta",
        "direccion" => "Calle Danone Dalmau, 5",
        "telefono" => "444555666",
        "poblacion" => "Alicante",
        "hobbies" => array(
            "peliculas" => array("Las Peripecias de Adrián Oriola", "Adrián Oriola VS PHP", "Adrián Oriola y PHP: Alianza por sorpresa"),
            "libros" => array("Javier Pintor: SQL Básico", "Pintor: Una retrospectiva al alma", "J. Painter: Los pelos albergan poder"),
            "canciones" => array("Más vale no estar, que estar sin hacer nada", "Desdichados Formularios", "Javascript: Bachata")
        )
    ),
    "persona5" => array(
        "nombre" => "Richard Gere",
        "direccion" => "Calle Esperanza Esperanzadora, 7-B",
        "telefono" => "777888999",
        "poblacion" => "Valencia",
        "hobbies" => array(
            "peliculas" => array("Las Peripecias de Adrián Oriola", "Adrián Oriola VS PHP", "Adrián Oriola y PHP: Alianza por sorpresa"),
            "libros" => array("Javier Pintor: SQL Básico", "Pintor: Una retrospectiva al alma", "J. Painter: Los pelos albergan poder"),
            "canciones" => array("Más vale no estar, que estar sin hacer nada", "Desdichados Formularios", "Javascript: Bachata")
        )
    )
);

// Recorre la estructura para mostrar los datos de cada persona y sus hobbies
foreach ($personas as $persona => $datos) {
    echo "La persona $persona tiene como datos: \n";
    echo "Nombre: " . $datos["nombre"] . "\n";
    echo "Dirección: " . $datos["direccion"] . "\n";
    echo "Teléfono: " . $datos["telefono"] . "\n";
    echo "Población: " . $datos["poblacion"] . "\n";
    
    echo "Hobbies:\n";
    echo "Películas: " . implode(", ", $datos["hobbies"]["peliculas"]) . "\n";
    echo "Libros: " . implode(", ", $datos["hobbies"]["libros"]) . "\n";
    echo "Canciones: " . implode(", ", $datos["hobbies"]["canciones"]) . "\n\n";
}

?>