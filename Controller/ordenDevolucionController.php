<?php
require_once './Model/ordenDevolucionesModel.php';

class CambioDevolucionController{

    static public function buscarProductoPasillo(){
        if(isset($_POST['buscar']) && $_POST['buscar'] != NULL){
            $tabla = "productos";
            $buscar = $_POST['buscar'];

            $respuesta = CambioDevolucionModel::buscarProductoPasillo($tabla,$buscar);
            return $respuesta;
        }
    }

    static public function listarProductosPasillos(){
        $tabla = "productos";
        $respuesta = CambioDevolucionModel::listarProductosPasillos($tabla);
        return $respuesta;
    }

    static public function generarDevolucion(){
        if(isset($_POST['compago']) && !empty($_POST['compago'])){
            $tabla = "devoluciones";
            $datos = array(
                "num_comp"=>$_POST['compago'],
                "monto_dev"=>$_POST['monto'],
                "fecha_dev"=>$_POST['fechadev'],
                "motivo_dev"=>$_POST['motivo'],
                "cod_comp_dev"=>$_POST['num_orden'],
                "fk_usuario_c"=>$_POST['cajero']
            );
            $respuesta = CambioDevolucionModel::generarDevolucion($tabla,$datos);
            return $respuesta;
        }
        
    }

    static public function listaDevoluciones(){
        $tabla = "devoluciones";
        $respuesta = CambioDevolucionModel::listaDevoluciones($tabla);
        return $respuesta;
    }

    static public function busquedaProducto(){
        if(!empty($_POST['producto']) && isset($_POST['btn-buscar']) ){
            $tabla = "productos";
            $idproducto = $_POST['producto'];
            $respuesta = CambioDevolucionModel::busquedaProducto($tabla,$idproducto);
            return $respuesta;
        }
    }

    static public function registroProductoCambio(){
        if(isset($_POST['btn-registro']) && isset($_POST['idproducto']) ){
            $tabla = "detalle_exchange";
            $datos = array(
                "cantidad"=>$_POST['cantidad'],
                "usuario"=>$_SESSION['usuario'],
                "fk_producto_c"=>$_POST['idproducto']
            );
            $respuesta = CambioDevolucionModel::registroProductoCambio($tabla,$datos);
            return $respuesta;
        }
    }

    static public function verCambios(){
        $tabla ="detalle_exchange";
        $user = $_SESSION['usuario'];
        $respuesta = CambioDevolucionModel::verCambios($tabla,$user);
        return $respuesta; 
    }

    static public function eliminarCambio(){
        if(isset($_GET['dlt'])){
            $tabla = "detalle_exchange";
            $id = $_GET['dlt'];
            $respuesta = CambioDevolucionModel::eliminarCambio($tabla,$id);
            return $respuesta;
        }
    }

    static public function generarExchange(){
        if(isset($_POST['guardar']) && !empty($_POST['comprobante'])){
            $tabla = 'generar_exchange';
            $datos = array(
                "comp_v"=>$_POST['comprobante'],
                "comp_c"=>$_POST['compcambio'],
                "usuario"=>$_SESSION['usuario']
            );
            $respuesta = CambioDevolucionModel::generarExchange($tabla,$datos);
            return $respuesta;
        }
    }

    static public function pdfRefund(){
        if(isset($_POST['code'])){
            $tabla = "devoluciones";
            $code = $_POST['code'];
            $respuesta = CambioDevolucionModel::pdfRefund($tabla,$code);
            return $respuesta;
        }
    }

    static public function pdfExchange(){
        if(isset($_POST['code'])){
            $tabla = "generar_exchange";
            $code = $_POST['code'];
            $respuesta = CambioDevolucionModel::pdfExchange($tabla,$code);
            return $respuesta;
        }
    }

}

?>