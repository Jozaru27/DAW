<?php
/**
* @author Jose Zafrilla
* Ej1UD8 - Incidencia.php
*/

class Incidencia {
    
    public static $contador = 1;
    public $puesto;
    public $mensaje;
    public static $estado = "Pendiente";
    public static $pendientes = "";

    public function __construct($puesto, $mensaje){
        $this->puesto = $puesto;
        $this->mensaje = $mensaje;
    }

    public function __toString(){
        return "Incidencia " . self::$contador++ . " - Puesto: $this->puesto - $this->mensaje  - " . self::$estado . "\n";
    }
    
    public function resuelve(){
        
    }

    public function getPendientes(){}



    // Getters & Setters de las Variables
    // Contador
    public function getContador(){
        return self::$contador;
    }

    public function setContador($contador){
        $this->contador=$contador;
    }

    // Puesto
    public function getPuesto(){
        return $this->puesto;
    }

    public function setPuesto($puesto){
        $this->puesto=$puesto;
    }

    // Mensaje
    public function getMensaje(){
        return $this->mensaje;
    }

    public function setMensaje($mensaje){
        $this->mensaje=$mensaje;
    }

    // Estado
    public function getEstado(){
        return self::$estado;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }
    
    
}



?>