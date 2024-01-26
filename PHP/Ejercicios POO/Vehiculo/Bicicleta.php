<?php
/**
* @author Jose Zafrilla
* Ej1UD8 - Bicicleta.php
*/

include_once "Vehiculo.php"; 

class Bicicleta extends Vehiculo{
    // Redefinición del método verKMRecorridos para mostrar información específica de la Bicicleta
    public function verKMRecorridos() {
        return "Kilómetros recorridos por la Bicicleta: " .  parent::verKMRecorridos() . " km \n";
    }

    // Método para hacer el caballito con la Bicicleta
    public function hacerCaballito() {
        echo "¡Haciendo el caballito con la Bici! \n";
    }

    // Método para poner la cadena de la Bicicleta
    public function ponerCadena() {
        echo "Cadena de la Bici puesta. \n";
    }
}

?>