<?php 

if(isset($_POST['vta'])){
    $venta = PagosCajaController :: nuevaVenta();
    if($venta == 'ok'){
        echo '<script>
                if(window.history.replaceState){
                    window.history.repaceState(null,null,window.location.href);
                }
            </script>';
        echo " <div class='alert alert-success'>Inicio Exitoso</div>
        <script>
            setTimeout(function(){
                window.location = 'body.php?pagina=ingresarVenta';
            },1000);
        </script>
        ";  
    }
}
?>
<section class="">
    <form action="" method="post">
        <div class="container-fluid g-0" style="height:750px ; width:84.9vw">
            <div class="row" >
                <!-- Title -->
                <div class="col-lg-12 text-center">
                    <div class="py-2">
                        <h1 class="border-botton">Menu Venta</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-12">
                    <div class="row d-flex">
                        <div class="col border p-5 m-2 btn btn-success">
                            <!-- <a href="body.php?pagina=ingresarVenta" class="text-decoration-none text-light btn text-lg"> <i class="fas fa-shopping-cart"></i> Nueva Venta</a> -->

                            <!-- <input type="submit" class="text-decoration-none text-light btn text-lg" value="Nueva Venta" name="vta" id="vta"> -->

                            <button type="submit" class="text-decoration-none text-light btn text-lg" name="vta" id="vta">
                                <i class="fas fa-shopping-cart"></i> Nueva Venta
                            </button>

                        </div>
                        <div class="col border p-5 m-2 btn btn-warning">
                            <a href="" class="text-decoration-none text-light btn text-lg">Registro de Ventas</a>
                        </div>
                        <div class="col border p-5 m-2 btn btn-success">
                            <a href="" class="text-decoration-none text-light btn text-lg">Detalles de Ventas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle"></i> Venta realizada con exito.
        </div> -->
    </form>
</section>


