<?php
/**
* @author Jose Zafrilla
* Ej1UD8 - Movil.php
*/

include_once "Terminal.php";

class Movil extends Terminal{
    public $tarifa;
    private $segundosDeLlamadaTarificados;

    public function __construct($numero, $tarifa){
        parent::__construct($numero);
        $this->tarifa = $tarifa;
        $this->segundosDeLlamadaTarificados = 0;
    }

    public function llama($terminal, $segundosDeLlamada){
        $this->segundosDeLlamada += $segundosDeLlamada;
        $terminal->segundosDeLlamada += $segundosDeLlamada;
    
        switch ($this->tarifa) {
            case 'rata':
                $coste = ceil($segundosDeLlamada / 60) * 0.06;
                break;
            case 'mono':
                $coste = ceil($segundosDeLlamada / 60) * 0.12;
                break;
            case 'bisonte':
                $coste = ceil($segundosDeLlamada / 60) * 0.30;
                break;
            default:
                $coste = 0;
        }
        $this->segundosDeLlamadaTarificados += $segundosDeLlamada;
        return $coste;
    }
    

    public function __toString(){
        $minutosTotales = floor($this->segundosDeLlamada / 60);
        $segundosTotales = $this->segundosDeLlamada % 60;

        $minutosTarificados = floor($this->segundosDeLlamadaTarificados / 60);
        $segundosTarificados = $this->segundosDeLlamadaTarificados % 60;

        $coste = $this->llama($this, $this->segundosDeLlamada);

        return "Nº $this->numero - $minutosTotales m y $segundosTotales s de conversación en total - tarificados $minutosTarificados m y $segundosTarificados s por un importe de $coste euros.";
    }
}



?>