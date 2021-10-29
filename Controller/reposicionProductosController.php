<?php 

require_once './Model/reposicionProductosModel.php';

class AlmacenController{

    static public function listaCategorias(){
        $tabla = "categorias";
        $respuesta = AlmacenModel::listaCategorias($tabla);
        return $respuesta;
    }

    static public function listarProductos(){
        // Condicion de busqueda
        if(isset($_POST['buscar']) && $_POST['buscar'] != NULL){
            $producto = $_POST['buscar'];
            $tabla = "productos" ;
            $respuesta = AlmacenModel::listarProductos($tabla,$producto);
        }else{
            $producto = "";
            $tabla = "productos" ;
            $respuesta = AlmacenModel::listarProductos($tabla,$producto);
        }
        return $respuesta;
        
    }

    static public function registroProductos(){
        if(isset($_POST['lote'])){
            $tabla = "productos";

            $datos = array (
                "nombre_producto"=>$_POST['descripcion'],
                "marca"=>$_POST['marca'],
                "lote"=>$_POST['lote'],
                "cantidad"=>$_POST['cantidad'],
                "fecha_vencimiento"=>$_POST['fecha'],
                "categoria"=>$_POST['categoria']
            );
        //    $respuesta = AlmacenModel::registroProductos($tabla,$datos);
        //    return $respuesta; 
        var_dump($tabla);
        var_dump($datos);
        }
    }

}

?>