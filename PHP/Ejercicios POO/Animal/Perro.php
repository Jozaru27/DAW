<?php

include_once "Mamifero.php";
// Clase  de Perro con su función especifica, constructor, to String, y total especifico
class Perro extends Mamifero {
    public $nombre;
    public $raza;

    public function __construct() {
        parent::__construct();
    }

    public function ladra() {
        echo "El Perro $this->nombre: Guau guau\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setRaza($raza) {
        $this->raza = $raza;
    }

    public function __toString() {
        return parent::__toString() . "En concreto soy un Perro, con Nombre: " . $this->nombre . " Raza: " . $this->raza . " ";
    }
}

?>