<?php 
require_once './DB/bd.php';

class ProveedorModel{
    static public function generarRequest($tabla,$datos){
        $sql = " INSERT INTO $tabla (codigo_rq,proveedor,fecha_rq,estado_rq) VALUES (:codigo_rq,:proveedor,CURDATE(),'pendiente') ";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->bindParam(":codigo_rq",$datos['codigo_rq'],PDO::PARAM_STR);
        $conexion->bindParam(":proveedor",$datos['proveedor'],PDO::PARAM_STR);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = NULL;
    }

    static public function listaRequest($tabla){
        $sql = "SELECT * FROM $tabla";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function productosRequest($tabla,$datos){
        $dql = "";
        $conexion = Conexion::conectar()->prepare($sql);
    }

}
?>