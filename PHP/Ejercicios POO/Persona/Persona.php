<?php
/**
 * @author Jose Zafrilla
 * Ej4UD8 - Persona.php
 */

class Persona {
    public $nombre;
    public $edad;
    public $DNI;
    public $sexo;
    public $peso;
    public $altura;

    const INFRAPESO = -1;
    const PESO_IDEAL = 0;
    const SOBREPESO = 1;

    // use DniTrait;

    public function __construct(){
        $this->nombre = "";
        $this->edad = 0;
        $this->DNI = "";
        $this->sexo = "H";
        $this->peso = 0;
        $this->altura = 0;
    }

    // funcion para comprobar H o M

    public function consNomEdSex($nombre, $edad, $sexo){
        $persona = new self();
        $persona->setNombre($nombre);
        $persona->setEdad($edad);
        $persona->setSexo($sexo);
    }

    public function consFull($nombre, $edad, $sexo, $peso, $altura){
        $persona = new self();
        $persona->setNombre($nombre);
        $persona->setEdad($edad);
        $persona->setSexo($sexo);
        $persona->setPeso($peso);
        $persona->setAltura($altura);
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
        if ($sexo === 'H' || $sexo === 'M') {
            $this->sexo = $sexo;
        } else {
            echo "Error: El sexo debe ser 'H' o 'M'.\n";
        }
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
    public function comprobarSexo($sexo) {
        return ($sexo === 'H' || $sexo === 'M');
    }

}

?>