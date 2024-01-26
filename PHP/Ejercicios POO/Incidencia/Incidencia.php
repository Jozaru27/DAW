<?php
/**
* @author Jose Zafrilla
* Ej1UD8 - Incidencia.php
*/

class Incidencia {
    
    public static $contador = 1;
    public $puesto;
    public $mensaje;
    public  $estado = "Pendiente";
    public static $pendientes = 0;

    public function __construct($puesto, $mensaje){
        $this->puesto = $puesto;
        $this->mensaje = $mensaje;
        self::$pendientes++;
    }

    public function __toString(){
        return "Incidencia " . self::$contador++ . " - Puesto: $this->puesto - $this->mensaje  - $this->estado \n";
    }
    
    public function resuelve(string $mensajeSolucion){
        $this->estado = "Resuleta";
        $this->mensaje .=  " - " . $mensajeSolucion;
        self::$pendientes--;
    }

    public static function getPendientes(){
        return self::$pendientes;
    }



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
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado=$estado;
    }
    
    
}



?>