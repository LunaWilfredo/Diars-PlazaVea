<?php
require_once './Model/pedidosProveedorModel.php';

class ProveedorController {
    static public function generarRequest(){
        if(isset($_POST['generar']) && !empty($_POST['code'])){
            $tabla="codigo_request";
            $datos=array(
                "codigo_rq"=>$_POST['code'],
                "proveedor"=>$_POST['proveedor']
            );
            $respuesta = ProveedorModel::generarRequest($tabla,$datos);
            return $respuesta;
        }
    }

    static public function listaRequest(){
        $tabla="codigo_request";
        $respuesta = ProveedorModel::listaRequest($tabla);
        return $respuesta;
    }

    static public function productosRequest(){
        if(isset($_POST['btnregistrar']) && !empty($_POST['producto'])){
            $tabla ="detalle_request";
            $datos = array(
                "descripcion_p"=>$_POST['producto'],
                "marca_p"=>$_POST['marca_producto'],
                "cantidad_p"=>$_POST['cantidad_p'],
                "observaciones"=>$_POST['observaciones_p'],
                "fk_c_request"=>$_GET['ip']
            );
            $respuesta = ProveedorModel::productosRequest($tabla,$datos);
            return $respuesta; 
        }
    }

    static public function listaProductosRequest(){
        $tabla = "detalle_request";
        $respuesta = ProveedorModel::listaProductosRequest($tabla);
        return $respuesta;
    }

    static public function guardarRequest(){
        if(isset($_POST['pedido']) && !empty($_GET['ip'])){
            $tabla = "request";
            $datos = array(
                "correo"=>$_POST['correop'],
                "fk_cd_request"=>$_GET['ip']
            );
            $respuesta = ProveedorModel::guardarRequest($tabla,$datos);
            return $respuesta;
        }
    }

    static public function generarCotizacion(){
        if(isset($_POST['generar']) && !empty($_POST['code'])){
            $tabla="cotizacion";
            $datos=array(
                "cod_cotizacion"=>$_POST['code'],
                "provedor_c"=>$_SESSION['usuario']
            );
            $respuesta = ProveedorModel::generarCotizacion($tabla,$datos);
            return $respuesta;
        }
    }

    static public function listaCotizaciones(){
        $tabla="cotizacion";
        $respuesta = ProveedorModel::listaCotizaciones($tabla);
        return $respuesta;
    }


    static public function productosCotizacion(){
        if(isset($_POST['btnregistrar']) && !empty($_POST['producto'])){
            $tabla ="detalle_cotizacion";
            $datos = array(
                "producto_c"=>$_POST['producto'],
                "marca_c"=>$_POST['marca'],
                "cantidad_c"=>$_POST['cantidad'],
                "precio_c"=>$_POST['precio_v'],
                "observaciones"=>$_POST['observaciones'],
                "fk_cotizacion"=>$_GET['ic']
            );
            $respuesta = ProveedorModel::productosCotizacion($tabla,$datos);
            return $respuesta; 
        }
    }

    static public function listaProductosCotizacion(){
        $tabla = "detalle_cotizacion";
        $respuesta = ProveedorModel::listaProductosCotizacion($tabla);
        return $respuesta;
    }

}
?>