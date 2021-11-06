<?php

require_once './DB/bd.php';

Class PagosCajaModel{

    static public function local($tabla){
        $sql = "SELECT * FROM $tabla WHERE id = 1";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function metodos_pago($tabla){
        $sql = "SELECT * FROM $tabla";

        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchALL();

        $conexion->close();
        $conexion==NULL;
    }

    static public function buscarProducto($tabla,$buscar){
        $sql = "SELECT * FROM $tabla WHERE nombre_producto = '$buscar' ";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function nuevaVenta($tabla){
        $sql = "INSERT INTO $tabla (fecha_venta) VALUES (CURDATE())";
        
        $conexion = Conexion::conectar()->prepare($sql); 
        if($conexion->execute()){
            return 'ok';  
        }else{
            print_r(Conexion::conectar()->errorInfo());
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
    

    static public function registroDetalleVenta($tabla,$datos){
        $sql="INSERT INTO detalle_ventas (cantidad,fk_productos,fk_ventas) VALUES (:cantidad,:fk_productos,:fk_ventas)";
        $conexion=Conexion::conectar()->prepare($sql);

        $conexion->bindParam(":cantidad",$datos['cantidad'],PDO::PARAM_STR);
        $conexion->bindParam(":fk_productos",$datos['fk_productos'],PDO::PARAM_STR);
        $conexion->bindParam(":fk_ventas",$datos['fk_ventas'],PDO::PARAM_STR);

        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion=NULL;
    }

    static public function listaDetalleVenta($tabla,$idVenta){
        $sql="SELECT p.lote,p.nombre_producto AS 'producto',p.marca,p.precio,dv.cantidad,dv.id as 'idpv',v.* FROM $tabla dv INNER JOIN productos p ON dv.fk_productos = p.id INNER JOIN ventas v ON  dv.fk_ventas = v.id WHERE v.id = $idVenta ";

        $conexion=Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    public static function eliminarProductoDetalleVenta($tabla,$id){
        $sql="DELETE FROM $tabla WHERE id = $id";

        $conexion=Conexion::conectar()->prepare($sql);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = NULL;
    }

    static public function subtotal($tabla,$idVenta){
        $sql="SELECT SUM(p.precio) AS 'subtotal' FROM productos p INNER JOIN $tabla dv ON p.id = dv.fk_productos WHERE dv.fk_ventas = $idVenta ";

        $conexion=Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function total($tabla,$idVenta){
        $sql="SELECT SUM(p.precio)+(SUM(p.precio)*0.18) AS 'total' FROM productos p INNER JOIN $tabla dv ON p.id = dv.fk_productos 
        WHERE dv.fk_ventas = $idVenta ";

        $conexion=Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function ordenDetalleVenta($tabla,$datos){
        $sql = "";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->bindParam(":",$datos[''],PDO::PARAM_STR);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = NULL;
    }


}


?>