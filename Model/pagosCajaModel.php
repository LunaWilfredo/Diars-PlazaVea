<?php

require_once './DB/bd.php';

Class PagosCajaModel{

    static public function buscarProducto($tabla,$buscar){
        $sql = "SELECT * FROM $tabla WHERE nombre_producto = '$buscar' ";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function nuevaVenta($tabla){
        $sql = "INSERT INTO $tabla (fecha_venta) VALUES (CURDATE());";
        $conexion = Conexion::conectar()->prepare($sql); 
        if($conexion->execute()){
            return 'ok';  
        }

        $conexion->close();
        $conexion = NULL;
        
    }
    
    static public function listaVentas($tabla){
        $sql = "SELECT * FROM $tabla ORDER BY id DESC limit 1";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchALL();

        $conexion->close();
        $conexion = NULL;
    }
    

    static public function detalleVenta(){

    }

}


?>