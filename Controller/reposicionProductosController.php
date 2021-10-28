<?php 

require_once './Model/reposicionProductosModel.php';

class AlmacenController{

    static public function listaCategorias(){
        $tabla = "categorias";
        $respuesta = AlmacenModel::listaCategorias($tabla);
        return $respuesta;
    }

    static public function listarProductos(){
        $tabla = "productos" ;
        $respuesta = AlmacenModel::listarProductos($tabla);
        return $respuesta;
    }

    static public function estadoProductos(){

    }

}

?>