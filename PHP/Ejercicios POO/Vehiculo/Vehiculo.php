<?php
/**
* @author Jose Zafrilla
* Ej1UD8 - Vehiculo.php
*/

class Vehiculo {
    public static $vehiculosCreados = 0;
    public static $kilometrosTotales = 0;
    public $kilometrosRecorridos = 0;

     // Método para avanza
    public function avanza($km) {
        $this->kilometrosRecorridos += $km; 
        self::$kilometrosTotales += $km; 
    }

    // Getter para ver los kilómetros recorridos de esta instancia
    public function verKMRecorridos() {
        return $this->kilometrosRecorridos;
    }

    // Getter para ver los kilómetros totales de todos los vehículos
    public static function verKMTotales() {
        return self::$kilometrosTotales . " km";
    }
}
?>