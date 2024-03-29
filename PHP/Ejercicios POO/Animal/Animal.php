<?php

// Clase abstracta de Animal
abstract class Animal {
    private static $totalAnimales = 0;
    public $sexo;
    public $nombre;

    // Constructor por defecto
    public function __construct($sexo = "M") {
        $this->sexo = $sexo;
        self::$totalAnimales++;
    }

    // Funciones básicas  de los animales
    public function dormirse() {
        echo "El animal se está durmiendo.\n";
    }

    public function alimentarse($comida = null) {
        echo "El animal está comiendo ";
        if ($comida) {
            echo $comida;
        } else {
            echo "algo."; 
        }
        echo "\n";
    }

    public function morirse() {
        echo "El animal ha muerto.\n";
        self::$totalAnimales--;
    }

    // To String & Total Animales
    public function __toString() {
        return "Soy un animal. ";
    }

    public static function getTotalAnimales() {
        return "Total de animales: " . self::$totalAnimales . "\n";
    }

    // Constructores adicionales
    public static function consSexo($sexo) {
        $animal = new static();
        $animal->sexo = $sexo;
        return $animal;
    }

    public static function consFull($sexo, $nombre) {
        $animal = new static();
        $animal->sexo = $sexo;
        $animal->nombre = $nombre;
        return $animal;
    }

    public static function consSexoNombre($sexo, $nombre) {
        $animal = new static();
        $animal->sexo = $sexo;
        $animal->nombre = $nombre;
        return $animal;
    }
}
