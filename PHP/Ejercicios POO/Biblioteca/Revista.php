<?php 

class Revista extends Publicacion {
    private $numero;

    public function __construct($isbn, $titulo, $año, $numero) {
        parent::__construct($isbn, $titulo, $año);
        $this->numero = $numero;
    }

    public function __toString() {
        return parent::__toString() . ", número: " . $this->numero . "\n";
    }
}


?>