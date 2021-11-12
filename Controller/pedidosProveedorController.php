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
            var_dump($datos);
        }
    }
}


?>