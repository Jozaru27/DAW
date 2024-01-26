<?php
/**
 * @author Jose Zafrilla
 * Ej4UD8 - Persona.php
 */

 include_once "DniTrait.php";

class Persona {
    use DniTrait;
    public $nombre;
    public $edad;
    public $DNI;
    public $sexo;
    public $peso;
    public $altura;

    const INFRAPESO = -1;
    const PESO_IDEAL = 0;
    const SOBREPESO = 1;

    public function __construct(){
        $this->nombre = "";
        $this->edad = 0;
        $this->DNI = $this->generarDNI();;
        $this->sexo = "H";
        $this->peso = 0;
        $this->altura = 0;
    }

    public static function consNomEdSex($nombre, $edad, $sexo){
        $persona = new self();
        $persona->setNombre($nombre);
        $persona->setEdad($edad);
        $persona->setSexo($sexo);
        return $persona;
    }

    public static function consFull($nombre, $edad, $sexo, $peso, $altura){
        $persona = new self();
        $persona->setNombre($nombre);
        $persona->setEdad($edad);
        $persona->setSexo($sexo);
        $persona->setPeso($peso);
        $persona->setAltura($altura);
        return $persona;
    }

    // Getters & Setters
    // Getter & Setter Nombre
    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // Getter & Setter Edad
    public function getEdad() {
        return $this->edad;
    }

    // Setter para establecer la edad
    public function setEdad($edad) {
        $this->edad = $edad;
    }

    // Getter para obtener el DNI
    public function getDNI() {
        return $this->DNI;
    }

    // Setter para establecer el DNI
    public function setDNI($DNI) {
        $this->DNI = $DNI;
    }

    // Getter para obtener el sexo
    public function getSexo() {
        return $this->sexo;
    }

    // Setter para establecer el sexo
    public function setSexo($sexo) {
        // Validar que el sexo sea 'H' o 'M'
        $this->sexo = $this->comprobarSexo($sexo);
    }

    // Getter para obtener el peso
    public function getPeso() {
        return $this->peso;
    }

    // Setter para establecer el peso
    public function setPeso($peso) {
        $this->peso = $peso;
    }

    // Getter para obtener la altura
    public function getAltura() {
        return $this->altura;
    }

    // Setter para establecer la altura
    public function setAltura($altura) {
        $this->altura = $altura;
    }

    // Función para comprobar el sexo
    private function comprobarSexo($sexo) {
        if ($sexo !== 'H' || $sexo !== 'M'){
            return 'H';
        } else {
            return strtoupper($sexo);
        }
    }

    // Función para calcular el IMC. Según el resultado de la función calcular, muestra un texto u otro
    public function strIMC() {
        $imc = $this->calcularIMC();
        $str = $this->nombre . " ";
        switch ($imc) {
            case self::INFRAPESO:
                $str .= "está por debajo de su peso ¡A comer! :( \n";
                break;
            case self::PESO_IDEAL:
                $str .= "está en su peso ideal ¡Olé! :) \n";
                break;
            case self::SOBREPESO:
                $str .= "tiene sobrepeso ¡La dieta! :( \n";
                break;
        }
        return $str;
    }

    // Función que calcula llamada en la función anterior.
    public function calcularIMC() {
        $imc = $this->peso / ($this->altura * $this->altura);
        if ($imc < 20) return self::INFRAPESO;
        if ($imc <= 25) return self::PESO_IDEAL;
        return self::SOBREPESO;
    }

    public function __toString() {
        $sexoStr = $this->sexo === "H" ? "Hombre" : "Mujer";
        $mayorDeEdadStr = $this->esMayorDeEdad() ? "es Mayor de Edad." : "es Menor de Edad.";
        return "PERSONA " . $this->nombre . " Información de la persona:\n" .
               "DNI: " . $this->DNI . "\n" .
               "Nombre: " . $this->nombre . "\n" .
               "Sexo: " . $sexoStr . "\n" .
               "Edad: " . $this->edad . "\n" .
               "Peso: " . $this->peso . " KG\n" .
               "Altura: " . $this->altura . " metros\n" .
               "Resultado IMC: " . $this->strIMC() . "\n" .
               $this->nombre . " con DNI " . $this->DNI . " " . $mayorDeEdadStr . "\n";
    }
    
     // Función para saber si es mayor de edad
     public function esMayorDeEdad() {
        return $this->edad >= 18;
    }

    // Función que muestra el IMC
    public function mostrarIMC() {
        return $this->strIMC();
    }
    
}
?>