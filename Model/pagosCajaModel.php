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
        $sql="INSERT INTO $tabla (cantidad,fk_productos,fk_ventas) VALUES (:cantidad,:fk_productos,:fk_ventas)";
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
        $sql="SELECT SUM(p.precio*dv.cantidad) AS 'subtotal' FROM productos p INNER JOIN $tabla dv ON p.id = dv.fk_productos WHERE dv.fk_ventas = $idVenta ";
        $conexion=Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function total($tabla,$idVenta){
        $sql="SELECT SUM(p.precio*dv.cantidad)+(SUM(p.precio*dv.cantidad)*0.18) AS 'total' FROM productos p INNER JOIN $tabla dv ON p.id = dv.fk_productos WHERE dv.fk_ventas = $idVenta ";
        $conexion=Conexion::conectar()->prepare($sql);
        $conexion->execute();
        return $conexion->fetchAll();

        $conexion->close();
        $conexion = NULL;
    }

    static public function ordenDetalleVenta($tabla,$datos){
        $sql = "INSERT INTO $tabla (comp_pago,dni_cliente,correo_cliente,fecha_venta,monto_pagar,num_tarjeta,metodo,num_cuotas,fk_usuario,fk_local,fk_metodo_pago,fk_venta) VALUES (:comp_pago,:dni_cliente,:correo_cliente,CURDATE(),:monto_pagar,:num_tarjeta,:metodo,:num_cuotas,:fk_usuario,:fk_local,:fk_metodo_pago,:fk_venta)";
        $conexion = Conexion::conectar()->prepare($sql);
        $conexion->bindParam(":comp_pago",$datos['comp_pago'],PDO::PARAM_STR);
        $conexion->bindParam(":dni_cliente",$datos['dni_cliente'],PDO::PARAM_STR);
        $conexion->bindParam(":correo_cliente",$datos['dni_cliente'],PDO::PARAM_STR);
        $conexion->bindParam(":monto_pagar",$datos['monto_pagar'],PDO::PARAM_STR);
        $conexion->bindParam(":num_tarjeta",$datos['num_tarjeta'],PDO::PARAM_STR);
        $conexion->bindParam(":metodo",$datos['metodo'],PDO::PARAM_STR);
        $conexion->bindParam(":num_cuotas",$datos['num_cuotas'],PDO::PARAM_STR);
        $conexion->bindParam(":fk_usuario",$datos['fk_usuario'],PDO::PARAM_STR);
        $conexion->bindParam(":fk_local",$datos['fk_local'],PDO::PARAM_STR);
        $conexion->bindParam(":fk_metodo_pago",$datos['fk_metodo_pago'],PDO::PARAM_STR);
        $conexion->bindParam(":fk_venta",$datos['fk_venta'],PDO::PARAM_STR);
        if($conexion->execute()){
            return 'ok';
        }else{
            print_r(Conexion::conectar()->errorInfo());
        }

        $conexion->close();
        $conexion = NULL;
    }

    static public function actualizarStock($tabla,$idVenta){
        $sql = " UPDATE $tabla p INNER JOIN detalle_ventas dv ON dv.fk_productos = p.id SET p.cantidad = p.cantidad - dv.cantidad WHERE dv.fk_ventas = $idVenta";
        $conexion = Conexion::conectar()->prepare($sql);
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