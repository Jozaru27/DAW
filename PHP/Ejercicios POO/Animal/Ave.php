<?php

include_once "Animal.php";
// Clase abstracta de Ave con su función especifica, constructor, to String, y total especifico
abstract class Ave extends Animal {
    private static $totalAves = 0;

    public function __construct($sexo = "M") {
        parent::__construct($sexo);
        self::$totalAves++;
    }

    public function ponerHuevo() {
        echo "El ave ha puesto un huevo.\n";
    }

    public function __toString() {
        return parent::__toString() . "Soy un ave. ";
    }

    public static function getTotalAves() {
        return "Total de aves: " . self::$totalAves . "\n";
    }
}

?>