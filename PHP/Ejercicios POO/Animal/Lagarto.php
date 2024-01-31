<?php

include_once "Animal.php";
// Clase  de Lagarto con su función especifica, constructor, to String, y total especifico
class Lagarto extends Animal {
    public $nombre;

    public function __construct() {
        parent::__construct();
    }

    public function tomarSol() {
        echo "Lagarto $this->nombre: Estoy tomando el sol\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function __toString() {
        return parent::__toString() . "En concreto soy un Lagarto, con Nombre: " . $this->nombre . " .";
    }
}


?>