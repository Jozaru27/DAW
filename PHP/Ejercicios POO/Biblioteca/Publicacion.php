<?php 
    abstract class Publicacion {
    protected $isbn;
    protected $titulo;
    protected $año = 2024;

    public function __construct($isbn, $titulo, $año) {
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->año = $año;
    }

    public function __toString() {
        return "\nISBN: " . $this->isbn . ", título: " . $this->titulo . ", año de publicación: " . $this->año;
    }
}

?>