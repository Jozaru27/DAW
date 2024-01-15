<?php
/**
* @author Jose Zafrilla
* Ej1UD8 - Movil.php
*/
class Terminal { 
    public $numero;
    public $segundosDeLlamada;

    // Constructor
    public function __construct($numero){
        $this->numero = $numero;
        $this->segundosDeLlamada = 0;
    }

    // Método para obtener el número de teléfono
    public function getNumero(){
        return $this->numero;
    }

    // Método para obtener los segundos de llamada
    public function getSegundosDeLlamada(){
        return $this->segundosDeLlamada;
    }
}

?>