<?php

include_once "Mamifero.php";
class Perro extends Mamifero {
    public $nombre;
    public $raza;

    public function __construct() {
        parent::__construct();
    }

    public function ladra() {
        echo "Perro Nombre: Guau guau\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setRaza($raza) {
        $this->raza = $raza;
    }

    public function __toString() {
        return parent::__toString() . "Perro Nombre: " . $this->nombre . " Raza: " . $this->raza . " ";
    }
}

?>