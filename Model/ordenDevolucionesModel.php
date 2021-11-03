<?php 

require_once './DB/bd.php';

Class CambioDevolucionModel{

    static public function buscarProductoPasillo($tabla,$buscar){
        $sql ="SELECT p.*,c.nombre_categoria as 'categoria',pa.numero_pasillo as 'pasillo' FROM $tabla p INNER JOIN categorias c ON p.fk_categoria = c.id INNER JOIN pasillos pa ON p.fk_categoria = pa.id WHERE p.nombre_producto = '$buscar' or p.lote = '$buscar' or c.nombre_categoria = '$buscar' ";
        $conexion = Conexion::conectar()->prepare($sql);

        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function listarProductosPasillos($tabla){
        $sql = "SELECT p.*,c.nombre_categoria as 'categoria',pa.numero_pasillo as 'pasillo' FROM $tabla p INNER JOIN categorias c ON p.fk_categoria = c.id INNER JOIN pasillos pa ON p.fk_categoria = pa.id";

        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    

}



?>