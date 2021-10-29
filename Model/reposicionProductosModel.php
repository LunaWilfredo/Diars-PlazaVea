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
        $sql="";

        $conexion = Conexion::conectar()->prepare($sql);
        if($conexion->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = NULL;
    }

}

?>