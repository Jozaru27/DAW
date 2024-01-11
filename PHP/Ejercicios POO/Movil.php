<?php
/**
* @author Jose Zafrilla
* Ej1UD8 - Movil.php
*/

class Terminal{
    public $terminal;
    public $segundosDeLlamada;

    // metodo llama (segundos y tarifa)
}

class Movil extends Terminal{
    public $tarifa;
    public $minutos;
    public $segundos;

    public function __construct($terminal, $tarifa){
        $this->terminal = $terminal;
        $this->tarifa = $tarifa;
    }

    public function llama($terminal, $segundosDeLlamada){
        $this->terminal = $terminal;
        $this->segundosDeLlamada = $segundosDeLlamada;

        switch ($this->tarifa) {
            case 'rata':
                return $this->segundosDeLlamada * 0.06;
            case 'mono':
                return $this->segundosDeLlamada * 0.12;
            case 'bisonte':
                return $this->segundosDeLlamada * 0.30;
            default:
                return 0;
        }

        // if ($segundosDeLlamada > )
}

    public function __toString(){
        return "Nº $this->terminal  - 0m y 0s de conversación en total - tarificados 0m y 0 s por un importe de 0 euros<br> \n";
    }
}



?>