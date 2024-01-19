<?php 

include_once "Publicacion.php";

class Libro extends Publicacion implements Prestable {
    public $prestado = false;

    public function prestar(){
        if ($this->prestado = false)  {
            return "Se ha prestado el libro " . $this->titulo ."\n";
            $prestado = true;
        } else {
            return "El libro ya estaba prestado\n";
        }
    }

    public function estaPrestado() {
        return $this->prestado;
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

}

?>