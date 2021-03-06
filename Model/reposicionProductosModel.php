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
        if(isset($producto) && !empty($producto)){
            $sql="SELECT p.*,c.nombre_categoria AS 'categoria' FROM $tabla p INNER JOIN categorias c ON p.fk_categoria = c.id WHERE p.nombre_producto = '$producto' or p.lote = '$producto' or c.nombre_categoria = '$producto' or p.fecha_vencimiento = '$producto' ORDER BY p.cantidad ASC";
        }else{
            $sql="SELECT p.*,c.nombre_categoria AS 'categoria' FROM $tabla p INNER JOIN categorias c ON p.fk_categoria = c.id ORDER BY p.cantidad ASC";
        }

        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function registrarProductos($tabla,$datos){
        $sql="INSERT INTO productos (nombre_producto,marca,lote,cantidad,fecha_vencimiento,fecha_registro,fk_categoria,precio)  VALUES(:nombre_producto,:marca,:lote,:cantidad,:fecha_vencimiento,CURDATE(),:categoria,:precio)";

        $conexion = Conexion::conectar()->prepare($sql);

        $conexion->bindParam(":nombre_producto",$datos['nombre_producto'],PDO::PARAM_STR);
        $conexion->bindParam(":marca",$datos['marca'],PDO::PARAM_STR);
        $conexion->bindParam(":lote",$datos['lote'],PDO::PARAM_STR);
        $conexion->bindParam(":cantidad",$datos['cantidad'],PDO::PARAM_STR);
        $conexion->bindParam(":fecha_vencimiento",$datos['fecha_vencimiento'],PDO::PARAM_STR);
        $conexion->bindParam(":categoria",$datos['categoria'],PDO::PARAM_STR);
        $conexion->bindParam(":precio",$datos['precio'],PDO::PARAM_STR);
        
        if($conexion->execute()){
            return "ok";
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = null;
    }


    static public function eliminarProducto($tabla,$id){
        $sql ="DELETE FROM $tabla WHERE id = $id ";

        $conexion = Conexion::conectar()->prepare($sql);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = NULL;
    }

    static public function actualizarStock($tabla,$id,$cantidad){
        $sql="UPDATE $tabla SET cantidad = cantidad + $cantidad WHERE id = $id";
        $conexion = Conexion::conectar()->prepare($sql);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion ->close();
        $conexion = NULL;
    }

    static public function buscarProducto($tabla,$producto){
        $sql="SELECT p.id as 'idpro',p.*,c.* FROM $tabla p INNER JOIN categorias c ON p.fk_categoria = c.id WHERE nombre_producto = '$producto' OR lote = '$producto' ";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion ->close();
        $conexion = NULL;
    }

    static public function solicitarProductos($tabla,$datos){
        $sql="INSERT INTO $tabla (cantidad_r,fecha_retiro,usuario_e,estado_r,fk_productos_r) VALUES (:cantidad_r,CURDATE(),:usuario_c,'PENDIENTE',:fk_productos_c)";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->bindParam(":cantidad_r",$datos['cantidad_r'],PDO::PARAM_STR);
        $conexion->bindParam(":usuario_c",$datos['usuario_c'],PDO::PARAM_STR);
        $conexion->bindParam(":fk_productos_c",$datos['fk_productos_c'],PDO::PARAM_STR);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion ->close();
        $conexion = NULL;
    }

    static public function listaProductoSolicitado($tabla){
        $sql="SELECT a.id AS 'idabastecimiento',a.*,p.*,c.* FROM $tabla a INNER JOIN productos p ON a.fk_productos_r = p.id INNER JOIN categorias c ON p.fk_categoria = c.id";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function actualizarEstado($tabla,$id){
        $sql="UPDATE $tabla SET estado_r = 'REALIZADO' WHERE id = $id ";
        $conexion = Conexion::conectar()->prepare($sql);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion ->close();
        $conexion = NULL;

    }

    static public function actualizarStockRetiro($tabla,$id,$cantidad){
        $sql="UPDATE $tabla SET cantidad=(cantidad-$cantidad) WHERE id = $id";
        $conexion = Conexion::conectar()->prepare($sql);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion ->close();
        $conexion = NULL;
    }

}

?>