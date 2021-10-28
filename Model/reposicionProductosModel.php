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

    static public function listarProductos($tabla){
        $sql="SELECT p.*,c.nombre_categoria AS 'categoria' FROM $tabla p INNER JOIN categorias c 
        ON p.fk_categoria = c.id";

        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function estadoProductos($tabla){
        $sql="SELECT * FROM $tabla";

        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close;
        $conexion = NULL;
    }

}

?>