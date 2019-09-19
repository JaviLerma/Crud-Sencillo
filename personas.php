<?php
require_once "conectar.php";

class personas extends Conectar{

    private $conexion;

    public function __construct()
    {
        $conect = new Conectar();
        $this->conexion = $conect->conexion();
    }


    public function getAll(){
        $sql = "SELECT * FROM personas";
        $result = $this->conexion->query($sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    
    public function getById($id){
        $sql = "SELECT nombre,apellido FROM personas WHERE id=$id";
        $result = $this->conexion->query($sql);
        return mysqli_fetch_row($result);

    }


    public function insertar($datos){
        $sql = "INSERT INTO personas VALUES (null, '$datos[0]', '$datos[1]')";
        return $this->transaccion($sql);
    }

    public function actualizar($datos){
        $sql="UPDATE personas SET nombre='$datos[0]',apellido='$datos[1]' WHERE id=$datos[2]";
        return $this->transaccion($sql);
    }

    public function eliminar($id){
        $sql = "DELETE FROM personas WHERE id=$id";
        return $this->transaccion($sql);
    }


    public function transaccion($sql){

        $this->conexion->autocommit(false);
        $this->conexion->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
        if($this->conexion->query($sql)){
            if($this->conexion->commit()){
                return true;
            }else{
                $this->conexion->rollback();
                return false;
            }
        }else{
            $this->conexion->rollback();
            return false;
        }
        $this->conexion->autocommit(true);
    }
}

?>