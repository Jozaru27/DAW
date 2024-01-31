<?php

include_once "Ave.php";
class Canario extends Ave {
    public $nombre;

    public function __construct() {
        parent::__construct();
    }

    public function pia() {
        echo "Canario Nombre: Pio pio pio\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function __toString() {
        return parent::__toString() . "Canario Nombre: " . $this->nombre . " ";
    }
}

?>