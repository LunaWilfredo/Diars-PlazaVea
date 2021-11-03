<?php 

require_once './DB/bd.php';

Class AlmacenModel{

    static public function listaCategorias($tabla){
        $sql = "SELECT * FROM $tabla";

        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function listarProductos($tabla,$producto){
        // condicion de busqueda
        if(isset($producto) && $producto != NULL){
            $sql="SELECT p.*,c.nombre_categoria AS 'categoria' FROM $tabla p INNER JOIN categorias c ON p.fk_categoria = c.id WHERE p.nombre_producto = '$producto' or p.lote = '$producto' or c.nombre_categoria = '$producto' or p.fecha_vencimiento = '$producto' ";
        }else{
            $sql="SELECT p.*,c.nombre_categoria AS 'categoria' FROM $tabla p INNER JOIN categorias c ON p.fk_categoria = c.id";
        }

        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function registrarProductos($tabla,$datos){
        $sql="INSERT INTO productos (nombre_producto,marca,lote,cantidad,fecha_vencimiento,fecha_registro,fk_categoria)  VALUES(:nombre_producto,:marca,:lote,:cantidad,:fecha_vencimiento,CURDATE(),:categoria)";

        $conexion = Conexion::conectar()->prepare($sql);

        $conexion->bindParam(":nombre_producto",$datos['nombre_producto'],PDO::PARAM_STR);
        $conexion->bindParam(":marca",$datos['marca'],PDO::PARAM_STR);
        $conexion->bindParam(":lote",$datos['lote'],PDO::PARAM_STR);
        $conexion->bindParam(":cantidad",$datos['cantidad'],PDO::PARAM_STR);
        $conexion->bindParam(":fecha_vencimiento",$datos['fecha_vencimiento'],PDO::PARAM_STR);
        $conexion->bindParam(":categoria",$datos['categoria'],PDO::PARAM_STR);
        
        if($conexion->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = null;
    }

}

?>