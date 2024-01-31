<?php

include_once "Animal.php";
class Lagarto extends Animal {
    public $nombre;

    public function __construct() {
        parent::__construct();
    }

    public function tomarSol() {
        echo "Lagarto Nombre: Estoy tomando el sol\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function __toString() {
        return parent::__toString() . "Lagarto Nombre: " . $this->nombre . " ";
    }
}


?>