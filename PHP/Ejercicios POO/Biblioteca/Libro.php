<?php 

include_once "Publicacion.php";

class Libro extends Publicacion implements Prestable {
    public $prestado = false;

    public function prestar(){
        if (!$this->prestado)  {
            $this->prestado = true;
            return "Se ha prestado el libro '" . $this->titulo . "'.\n";
        } else {
            return "El libro '" . $this->titulo . "' ya está prestado.\n";
        }
    }

    public function mostrarPrestado() {
        if (!$this->prestado) {
            $this->prestado = true;
            echo "Se ha prestado el libro '" . $this->titulo . "'.\n";
        } else {
            echo "No se ha podido prestar, el libro '" . $this->titulo . "' ya está prestado.\n";
        }
    }

    public function devolver() {
        if ($this->prestado) {
            $this->prestado = false;
            echo "Se ha devuelto el libro '" . $this->titulo . "'.\n";
        }
    }

    public function estaPrestado() {
        return $this->prestado;
    }

    // devuelve el prestado o no prestado al lado de cada libro
    public function __toString() {
        $estadoPrestamo = $this->estaPrestado() ? "prestado" : "no prestado";
        return parent::__toString() . " ($estadoPrestamo)";
    }

}

?>