<?php

include_once "Ave.php";
class Pinguino extends Ave {
    public $nombre;

    public function __construct() {
        parent::__construct();
    }

    public function pia() {
        echo "Pingüino Nombre: Soy un pingüino programador en PHP\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function programar() {
        echo "El pingüino está programando en PHP.\n";
    }

    public function __toString() {
        return parent::__toString() . "Pingüino Nombre: " . $this->nombre . " ";
    }
}

?>