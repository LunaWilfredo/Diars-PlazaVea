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
        if(isset($_POST['lote']) && $_POST['lote'] != NULL){
            $tabla = "productos";
            $datos = array (
                "nombre_producto"=>$_POST['producto'],
                "marca"=>$_POST['marca'],
                "lote"=>$_POST['lote'],
                "cantidad"=>$_POST['cantidad'],
                "fecha_vencimiento"=>$_POST['fecha'],
                "categoria"=>$_POST['categoria'],
                "precio"=>$_POST['precio']
            );
            $respuesta = AlmacenModel::registrarProductos($tabla,$datos);
            return $respuesta; 
        }
    }

    static public function eliminarProducto(){
        if(isset($_GET['id']) && $_GET['id'] !=NULL ){
            $tabla = "productos";
            $id = $_GET['id'];

            $respuesta = AlmacenModel::eliminarProducto($tabla,$id);
            return $respuesta;
        }
    }

    static public function actualizarStock($id,$cantidad){
        if(isset($_GET['id']) && $_GET['id'] != NULL && isset($_POST['cantidad']) && $_POST['cantidad'] != NULL ){
            $tabla = "productos";
            $cantidad = $_POST['cantidad'];
            $id = $_GET['id'];

            $respuesta = AlmacenModel::actualizarStock($tabla,$id,$cantidad);
            return $respuesta;
        }
        
    }

}

?>