<?php
/**
* @author Jose Zafrilla
* Ej1UD8 - Movil.php
*/

include_once "Terminal.php";

class Movil extends Terminal{
    public $tarifa;

    public function __construct($numero, $tarifa){
        parent::__construct($numero);
        $this->tarifa = $tarifa;
    }

    public function llama($terminal, $segundosDeLlamada){
        $this->segundosDeLlamada += $segundosDeLlamada;
        $terminal->segundosDeLlamada += $segundosDeLlamada;

        switch ($this->tarifa) {
            case 'rata':
                $coste = $segundosDeLlamada * 0.06;
                break;
            case 'mono':
                $coste = $segundosDeLlamada * 0.12;
                break;
            case 'bisonte':
                $coste = $segundosDeLlamada * 0.30;
                break;
            default:
                $coste = 0;
        }

        return $coste;
    }

    public function __toString(){
        $minutos = floor($this->segundosDeLlamada / 60);
        $segundos = $this->segundosDeLlamada % 60;
        $coste = $this->llama($this, $this->segundosDeLlamada);

        return "Nº $this->numero - $minutos m y $segundos s de conversación en total - tarificados $minutos m y $segundos s por un importe de $coste euros<br>\n";
    }
}



?>