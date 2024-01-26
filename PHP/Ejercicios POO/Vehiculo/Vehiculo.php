<?php
/**
* @author Jose Zafrilla
* Ej1UD8 - Vehiculo.php
*/

class Vehiculo {
    public static $vehiculosCreados = 0;
    public static $kilometrosTotales = 0;
    public $kilometrosRecorridos = 0;

    // Constructor para incrementar el contador de vehículos creados
    public function __construct() {
        self::$vehiculosCreados++;
    }

    // Función para ver los vehículos totales creados
    public static function verVehiculosCreados() {
        return self::$vehiculosCreados . " en total.";
    }

     // Método para avanzar
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