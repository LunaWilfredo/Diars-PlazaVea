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

    static public function generarDevolucion($tabla,$datos){
        $sql = "INSERT INTO $tabla (num_comp,monto_dev,fecha_dev,motivo_dev,cod_comp_dev,fk_usuario_c)  VALUES (:num_comp,:monto_dev,:fecha_dev,:motivo_dev,:cod_comp_dev,:fk_usuario_c)";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->bindParam(":num_comp",$datos['num_comp'],PDO::PARAM_STR);
        $conexion->bindParam(":monto_dev",$datos['monto_dev'],PDO::PARAM_STR);
        $conexion->bindParam(":fecha_dev",$datos['fecha_dev'],PDO::PARAM_STR);
        $conexion->bindParam(":motivo_dev",$datos['motivo_dev'],PDO::PARAM_STR);
        $conexion->bindParam(":cod_comp_dev",$datos['cod_comp_dev'],PDO::PARAM_STR);
        $conexion->bindParam(":fk_usuario_c",$datos['fk_usuario_c'],PDO::PARAM_STR);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion-close();
        $conexion = NULL;
    }

    static public function listaDevoluciones($tabla){
        $sql="SELECT dv.*,u.uname AS 'cajero' FROM $tabla dv INNER JOIN usuarios u ON dv.fk_usuario_c = u.id";
        $conexion=Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();
    }

    

}



?>