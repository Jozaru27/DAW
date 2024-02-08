<?php
/**
* @author Jose Zafrilla
* Ej1UD8 - Incidencia.php
*/

include_once __DIR__ . "/../traitDB.php";
class Incidencia {
    use traitDB;
    public static $contador = 1;
    public $puesto;
    public $mensaje;
    public $estado;
    public $codigo;
    public static $pendientes = 0;
    public $resolucion;

    public function __construct($puesto, $mensaje){
        $this->puesto = $puesto;
        $this->mensaje = $mensaje;
        self::$pendientes++;
        $this->codigo = self::$contador;
        self::$contador++;
        $this->estado = "Pendiente";
        $this->resolucion = null;
    }

    public function __toString(){
        return "Incidencia " . $this->codigo . " - Puesto: $this->puesto - $this->mensaje  - $this->estado \n";
    }
    
    public function resuelve(string $mensajeSolucion){
        $this->setEstado("Resuelta");
        $this->setResolucion($mensajeSolucion);
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

    // Codigo
    public function getCodigo(){
        return $this->codigo;
    }

    public function setCodigo($codigo){
        $this->codigo=$codigo;
    }

    // Resolucion
    public function getResolucion(){
        return $this->resolucion;
    }

    public function setResolucion($resolucion){
        $this->resolucion=$resolucion;
    }

    // Funciones BD
    public static function creaIncidencia($puesto, $mensaje){
        $self = new self($puesto, $mensaje);

        $sql = "INSERT INTO INCIDENCIA (CODIGO, ESTADO, PUESTO, PROBLEMA, RESOLUCION) VALUES ($self->codigo, '$self->estado', '$self->puesto', '$self->mensaje', '$self->resolucion')";
        $row = $self->execDB($sql);

        if($row) {
            echo "La incidencia ha sido guardada correctamente. \n";
        } else {
            echo "No se ha podido crear la incidencia. \n";
        }

        return $self;
    }

    public static function leeIncidencia($codigo){
        $sql ="SELECT * FROM INCIDENCIA WHERE CODIGO=:codigo";
        // $row = $sql->execDB($sql);

        $row = traitDB::queryPreparadaDB($sql, compact("codigo"));
        print_r($row);
    }
    
}

?>