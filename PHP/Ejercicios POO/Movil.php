<?php
/**
* @author Jose Zafrilla
* Ej1UD8 - Movil.php
*/

class Terminal{
    private $numero;

    public function __construct($numero){
        $this->numero = $numero;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function __toString(){
        return "Nº $this->numero";
    }

    public function llama(Terminal $t, $segundos){
        echo "Llamada desde $this->numero a {$t->getNumero()} durante $segundos segundos.\n";
    }
}

class Movil extends Terminal{
    private $tarifa;
    private $totalConversacion = 0; // En segundos

    public function __construct($numero, $tarifa){
        parent::__construct($numero);
        $this->tarifa = $tarifa;
    }

    public function __toString(){
        $minutos = floor($this->totalConversacion / 60);
        $segundos = $this->totalConversacion % 60;
        $importe = $this->calcularImporte();

        return parent::__toString() . " - $minutos m y $segundos s de conversación en total - tarificados $minutos m y $segundos s por un importe de $importe euros";
    }

    public function llama(Terminal $t, $segundos){
        parent::llama($t, $segundos);
        $this->totalConversacion += $segundos;
    }

    private function calcularImporte(){
        switch ($this->tarifa) {
            case 'rata':
                return $this->totalConversacion * 0.06;
            case 'mono':
                return $this->totalConversacion * 0.12;
            case 'bisonte':
                return $this->totalConversacion * 0.30;
            default:
                return 0;
        }
    }
}



?>