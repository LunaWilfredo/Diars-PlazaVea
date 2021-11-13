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
        $sql = "INSERT INTO $tabla (descripcion_p,marca_p,cantidad_p,observaciones,fk_c_request) VALUES (:descripcion_p,:marca_p,:cantidad_p,:observaciones,:fk_c_request)";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->bindParam(":descripcion_p",$datos['descripcion_p'],PDO::PARAM_STR);
        $conexion->bindParam(":marca_p",$datos['marca_p'],PDO::PARAM_STR);
        $conexion->bindParam(":cantidad_p",$datos['cantidad_p'],PDO::PARAM_STR);
        $conexion->bindParam(":observaciones",$datos['observaciones'],PDO::PARAM_STR);
        $conexion->bindParam(":fk_c_request",$datos['fk_c_request'],PDO::PARAM_STR);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = NULL;
    }

    static public function listaProductosRequest($tabla){
        $sql = "SELECT * FROM $tabla";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();
    }

    static public function guardarRequest($tabla,$datos){
        $sql = "INSERT INTO $tabla (correo,fk_cd_request) VALUES (:correo,:fk_cd_request)";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->bindParam(":correo",$datos['correo'],PDO::PARAM_STR);
        $conexion->bindParam(":fk_cd_request",$datos['fk_cd_request'],PDO::PARAM_STR);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = NULL;
    }

    static public function generarCotizacion($tabla,$datos){
        $sql = "INSERT INTO $tabla (fecha,provedor_c,cod_cotizacion) VALUES (CURDATE(),:provedor_c,:cod_cotizacion)";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->bindParam(":provedor_c",$datos['provedor_c'],PDO::PARAM_STR);
        $conexion->bindParam(":cod_cotizacion",$datos['cod_cotizacion'],PDO::PARAM_STR);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = NULL;
    }

    static public function listaCotizaciones($tabla){
        $sql = "SELECT * FROM $tabla";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function productosCotizacion($tabla,$datos){
        $sql = "INSERT INTO $tabla (producto_c,marca_c,cantidad_c,precio_c,observaciones,fk_cotizacion) VALUES (:producto_c,:marca_c,:cantidad_c,:precio_c,:observaciones,:fk_cotizacion)";
        $conexion = Conexion::conectar()->prepare($sql);

        $conexion->bindParam(":producto_c",$datos['producto_c'],PDO::PARAM_STR);
        $conexion->bindParam(":marca_c",$datos['marca_c'],PDO::PARAM_STR);
        $conexion->bindParam(":cantidad_c",$datos['cantidad_c'],PDO::PARAM_STR);
        $conexion->bindParam(":precio_c",$datos['precio_c'],PDO::PARAM_STR);
        $conexion->bindParam(":observaciones",$datos['observaciones'],PDO::PARAM_STR);
        $conexion->bindParam(":fk_cotizacion",$datos['fk_cotizacion'],PDO::PARAM_STR);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = NULL;
    }

    static public function listaProductosCotizacion($tabla){
        $sql = "SELECT * FROM $tabla";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();
    }
    
}
?>