<!-- Documentacion de funcionamiento -->
<?php
    session_start();
    // DB
    include_once 'DB/bd.php';
    // Models
    include_once 'Model/loginModel.php';
    // Controllers
    include_once 'Controller/loginController.php';
    include_once 'Controller/cambioDevolucionController.php';
    include_once 'Controller/pagosCajaController.php';
    include_once 'Controller/pedidosProveedorController.php';
    include_once 'Controller/reposicionProductosController.php';

?>
<!-- HEADER AND LATERAL -->
<?php 
    include_once 'View/Layout/header.php';
    include_once 'View/Layout/lateral.php';
?>
<?php
if(isset($_GET['pagina'])){
 
    $page = $_GET['pagina'];
    if($page == 'blank' || $page == "cambioDevolucion" || $page == "listaProductos" || $page == "pedidosProveedor" || $page == "retiroAlmacen" || $page == "ventasPagos" || $page == "generarCotizacion" || $page == "404"){
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