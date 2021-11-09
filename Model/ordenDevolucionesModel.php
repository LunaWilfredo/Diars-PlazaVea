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

    static public function busquedaProducto($tabla,$idproducto){
        $sql = "SELECT * FROM $tabla WHERE nombre_producto = '$idproducto' OR marca = '$idproducto' OR lote = '$idproducto' ";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();
    }

    static public function registroProductoCambio($tabla,$datos){
        $sql="INSERT INTO $tabla (cantidad_c,usuario,fk_producto_c)VALUES(:cantidad,:usuario,:fk_producto_c)";
        $conexion=Conexion::conectar()->prepare($sql);
        $conexion->bindParam(":cantidad",$datos['cantidad'],PDO::PARAM_STR);
        $conexion->bindParam(":usuario",$datos['usuario'],PDO::PARAM_STR);
        $conexion->bindParam(":fk_producto_c",$datos['fk_producto_c'],PDO::PARAM_STR);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = NULL;
    }

    static public function verCambios($tabla,$user){
        $sql = "SELECT ex.id AS 'idcambio',ex.cantidad_c AS 'cant_cambio',ex.usuario,p.* FROM $tabla ex INNER  JOIN productos p ON ex.fk_producto_c = p.id WHERE ex.usuario = '$user' ";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();
    }

    static public function eliminarCambio($tabla,$id){
        $sql="DELETE FROM $tabla WHERE id = $id ";
        $conexion=Conexion::conectar()->prepare($sql);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }
        $conexion->close();
        $conexion = NULL;
    }

    static public function generarExchange($tabla,$datos){
        $sql="INSERT INTO $tabla (comp_v,comp_c,usuario) VALUES (:comp_v,:comp_c,:usuario)";
        $conexion=Conexion::conectar()->prepare($sql);
        $conexion->bindParam(":comp_v",$datos['comp_v'],PDO::PARAM_STR);
        $conexion->bindParam(":comp_c",$datos['comp_c'],PDO::PARAM_STR);
        $conexion->bindParam(":usuario",$datos['usuario'],PDO::PARAM_STR);
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