<!-- Documentacion de funcionamiento -->
<?php
    session_start();
    // DB
    include_once 'DB/bd.php';
    // Models
    include_once 'Model/loginModel.php';
    // Controllers
    include_once 'Controller/loginController.php';
    include_once 'Controller/ordenDevolucionController.php';
    include_once 'Controller/pagosCajaController.php';
    include_once 'Controller/pedidosProveedorController.php';
    include_once 'Controller/reposicionProductosController.php';
    // Controllador de correo
    include_once 'Controller/MailController.php';

?>
<!-- HEADER AND LATERAL -->
<?php 
    include_once 'View/Layout/header.php';
    include_once 'View/Layout/lateral.php';
?>
<?php
if(isset($_GET['pagina'])){
    $page = $_GET['pagina'];
    if($page == 'blank' || $page == "ordenDevolucion" || $page == "listaProductos" || $page == "pedidosProveedor" || $page == "retiroAlmacen" || $page == "ventasPagos" || $page == "generarCotizacion" || $page == "buscarProducto" || $page == "generarExchange" || $page == "menuVenta" || $page == "ingresarVenta" || $page == "cotizacionesGeneradas" || $page == "enviarFacturas" || $page == "registroPedidoProveedor" || $page == "listaPedidosProveedor" || $page == "actualizarStock" || $page == "consultarVencimiento" || $page == "404"){
        require_once 'View/Content/'.$_GET['pagina'].'.php';
    }else{
        require_once 'View/Content/404.php';
    }
}else{
    require_once 'View/Content/blank.php';
}
?>
<!-- FOOTER -->
<?php include_once 'View/Layout/footer.php' ?>