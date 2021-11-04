<?php

require_once './Model/pagosCajaModel.php';

class PagosCajaController{

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

    static public function detalleVenta(){
        if(isset($_POST['producto']) && !empty($_POST['producto'])){
            $tabla = "detalle_ventas";
            $datos = array(
                "fk_producto" => $_POST['producto'],
                "cantidad" => $_POST['cantidad']
            );
            var_dump($datos);
        }
    }

}


?>