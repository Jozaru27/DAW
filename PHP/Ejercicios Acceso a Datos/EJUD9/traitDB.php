<?php

require_once __DIR__ . "/../db.php";


trait traitDB{
    public static function connectDB(){
        try {
            // Crea la conexión
            $conn = new PDO('mysql:host=localhost:33006;dbname=INCIDENCIA', USERNAME, PASSWORD);

        } catch (PDOException $e) {
            die("Conexión fallida: " . $e->getMessage());
        }
        //Devuelve la conexion creada
        return $conn;
    }

    public function execDB($sql){
        //usa la conexion, ejecuta la sentencia y devuelve el numero de filas afectadas
        $resultado = self::connectDB()->exec($sql);
        return $resultado;
        
    }

    public static function queryPreparadaDB($sql, $parametros){
        //usa la conexion, prepara la sentencia, la ejecuta con los parametros y devuelve el resultado con todas las filas del conjunto
        $conn = self::connectDB();
        $str=$conn->prepare($sql);
        $str->execute($parametros);
        $resultado=$str->fetchAll();
        return $resultado;
    }

    public static function resetearBD(){
        $conn = self::connectDB();
        $sql = "USE INCIDENCIAS";
        $conn->exec($sql);
        $sql = "DELETE FROM INCIDENCIA";
        $conn->exec($sql);
        // $sql = "DROP TABLE INCIDENCIA IF EXISTS";
        // $conn->exec($sql);
        // $sql = "CREATE TABLE INCIDENCIA (
        //     CODIGO INTEGER,
        //     ESTADO VARCHAR (100) NOT NULL,
        //     PUESTO VARCHAR (15),
        //     PROBLEMA VARCHAR(255),
        //     RESOLUCION VARCHAR(255),
        //     CONSTRAINT PK_CODIGO PRIMARY KEY(CODIGO)
        // )";
        // $conn->exec($sql);
    }
}
