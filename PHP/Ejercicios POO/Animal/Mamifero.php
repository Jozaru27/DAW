<?php

include_once "Animal.php";
abstract class Mamifero extends Animal {
    private static $totalMamiferos = 0;

    public function __construct($sexo = "M") {
        parent::__construct($sexo);
        self::$totalMamiferos++;
    }

    public function amamantar() {
        echo "El mamífero está amamantando a sus crías.\n";
    }

    public function __toString() {
        return parent::__toString() . "Soy un mamífero. ";
    }

    public static function getTotalMamiferos() {
        return "Total de mamíferos: " . self::$totalMamiferos . "\n";
    }
}

?>