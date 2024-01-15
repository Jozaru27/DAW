<?php
/**
* @author Jose Zafrilla
* Ej1UD8 - Coche.php
*/

include_once "Vehiculo.php"; 

class Coche extends Vehiculo {
    // Redefinición de la función verKMRecorridos para mostrar información específica del Coche
    public function verKMRecorridos() {
        return "Kilómetros recorridos por el Coche: " .  parent::verKMRecorridos() . " km";
    }

    // Función para llenar el depósito del Coche
    public function llenarDeposito() {
        return "Depósito del Coche lleno";
    }

    // Función para quemar rueda con el Coche
    public function quemaRueda() {
        return "¡Quemando rueda con el Coche!";
    }
}

?>