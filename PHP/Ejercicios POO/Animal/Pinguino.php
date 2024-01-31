<?php

include_once "Ave.php";
// Clase  de Pinguino con su función especifica, constructor, to String, y total especifico
class Pinguino extends Ave {
    public $nombre;

    public function __construct() {
        parent::__construct();
    }

    public function pia() {
        echo "Pingüino $this->nombre: Soy un pingüino programador en PHP\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function programar() {
        echo "El pingüino está programando en PHP.\n";
    }

    public function __toString() {
        return parent::__toString() . "En concreto soy un Pingüino, con Nombre: " . $this->nombre . " ";
    }
}

?>