<?php

include_once "Ave.php";
// Clase  de Canario con su función especifica, constructor, to String, y total especifico
class Canario extends Ave {
    public $nombre;

    public function __construct() {
        parent::__construct();
    }

    public function pia() {
        echo "Canario $this->nombre: Pio pio pio\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function __toString() {
        return parent::__toString() . "En concreto soy un Canario, con Nombre: " . $this->nombre . " ";
    }
}

?>