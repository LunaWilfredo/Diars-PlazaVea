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

    public function generarDevolucion($cliente,$tipoOperacion){
        
    }

    public function comprobante($idOperacion){

    }




}

?>