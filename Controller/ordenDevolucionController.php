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

    public function comprobante($idOperacion){

    }




}

?>