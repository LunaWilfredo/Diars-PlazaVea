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

    static public function buscarProducto(){
        if(isset($_POST['buscar']) && !empty($_POST['buscar_producto'])){
            $tabla = "productos";
            $producto = $_POST['buscar_producto'];
            $respuesta = AlmacenModel::buscarProducto($tabla,$producto);
            return $respuesta;
        }
    }

    static public function solicitarProductos(){
        $tabla = "abastecimiento";
        $datos = array(
            "cantidad_r"=>$_POST['cantidad_r'],
            "usuario_c"=>$_SESSION['usuario'],
            "fk_productos_c"=>$_POST['producto_id']
        );
        $respuesta = AlmacenModel::solicitarProductos($tabla,$datos);
        return $respuesta;
    }

    static public function listaProductoSolicitado(){
        $tabla = "abastecimiento";
        $respuesta = AlmacenModel::listaProductoSolicitado($tabla);
        return $respuesta;
    }

    static public function actualizarEstado(){
        if(isset($_GET['id'])){
            $tabla = "abastecimiento";
            $id = $_GET['id'];
            $respuesta = AlmacenModel::actualizarEstado($tabla,$id);
            return $respuesta;
        }
    }

    static public function actualizarStockRetiro($id,$cantidad){
        if(isset($_POST['producto_id']) && !empty($_POST['producto_id']) && isset($_POST['cantidad_r']) && !empty($_POST['cantidad_r']) ){
            $tabla = "productos";
            $cantidad = $_POST['cantidad_r'];
            $id = $_POST['producto_id'];
            $respuesta = AlmacenModel::actualizarStockRetiro($tabla,$id,$cantidad);
            return $respuesta;
        } 
    }
}

?>