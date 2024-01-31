<?php

include_once "Mamifero.php";
// Clase  de Gato con su función especifica, constructor, to String, y total especifico
class Gato extends Mamifero {
    public $nombre;

    public function __construct() {
        parent::__construct();
    }

    public function maulla() {
        echo "El Gato $this->nombre: Miauuuu\n";
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function __toString() {
        return parent::__toString() . "En concreto soy un Gato, con Nombre: " . $this->nombre . " ";
    }
}

?>