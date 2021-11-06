<?php

require_once './Model/pagosCajaModel.php';

class PagosCajaController{

    static public function local(){
        $tabla = "locales";
        $respuesta = PagosCajaModel::local($tabla);
        return $respuesta; 
    }

    static public function metodos_pago(){
        $tabla = "metodos_pago";
        $respuesta = PagosCajaModel::metodos_pago($tabla);
        return $respuesta;
    }

    static public function buscarProducto(){
        if(isset($_POST['buscar']) && !empty($_POST['buscar'])){

            $tabla = "productos";
            $buscar = $_POST['buscar'];

            $respuesta = PagosCajaModel::buscarProducto($tabla,$buscar);
            return $respuesta;
        }else{
            $tabla = "productos";
            $buscar = " ";

            $respuesta = PagosCajaModel::buscarProducto($tabla,$buscar);
            return $respuesta;
        }
    }

    static public function nuevaVenta(){  
        if(isset($_POST['vta'])){
            $tabla = "ventas";
            $respuesta = PagosCajaModel::nuevaVenta($tabla);
            return $respuesta;
        }
    }

    static public function listaVentas(){
            $tabla = "ventas";
            $respuesta = PagosCajaModel::listaVentas($tabla);
            return $respuesta;
    }

    static public function registroDetalleVenta(){
        if(isset($_POST['producto']) && !empty($_POST['producto'])){
            $tabla = "detalle_ventas";
            $datos = array(
                "cantidad" => $_POST['cantidad'],
                "fk_productos" => $_POST['producto'],
                "fk_ventas"=>$_POST['idventa']
            );
            $respuesta=PagosCajaModel::registroDetalleVenta($tabla,$datos);
            return $respuesta;
        }
    }

    static public function listaDetalleVenta($idSecret){
        $tabla ="detalle_ventas";
        $idVenta = $idSecret;
            
        $respuesta = PagosCajaModel::listaDetalleVenta($tabla,$idVenta);
        return $respuesta;
    }

    static public function eliminarProductoDetalleVenta(){
        if(isset($_GET['dlt']) && !empty($_GET['dlt'])){
            $tabla = "detalle_ventas";
            $id=$_GET['dlt'];

            $respuesta = PagosCajaModel::eliminarProductoDetalleVenta($tabla,$id);
            return $respuesta; 
        }
    }

    static public function subtotal($idSecret){
        $tabla ="detalle_ventas";
        $idVenta = $idSecret;
            
        $respuesta = PagosCajaModel::subtotal($tabla,$idVenta);
        return $respuesta;
    }

    static public function total($idSecret){
        $tabla ="detalle_ventas";
        $idVenta = $idSecret;
            
        $respuesta = PagosCajaModel::total($tabla,$idVenta);
        return $respuesta;
    }

    static public function ordenDetalleVenta(){
        if(isset($_POST['btn-operaciones'])){
            $tabla = "operaciones";
            $datos = array(
                "dni_cliente"=>$_POST['cliente'],
                "correo_cliente"=>$_POST['correo'],
                "fecha_venta"=>$_POST['fecha'],
                "monto_pagar"=>$_POST['total'],
                "num_tarjeta"=>$_POST['tarjeta'],
                "metodo"=>$_POST['metodo'],
                "num_cuotas"=>$_POST['cuotas'],
                "fk_usuario"=>$_POST['cajero'],
                "fk_local"=>$_POST['local'],
                "fk_metodo_pago"=>$_POST['metodopago'],
                "fk_venta"=>$_POST['idventa']
            );
            var_dump($datos);
        }
    }

}


?>