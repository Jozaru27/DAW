<?php

include_once "Mamifero.php";
class Gato extends Mamifero {
    public $nombre;

    public function __construct() {
        parent::__construct();
    }

    public function maulla() {
        echo "Gato Nombre: Miauuuu\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function __toString() {
        return parent::__toString() . "Gato Nombre: " . $this->nombre . " ";
    }
}

?>