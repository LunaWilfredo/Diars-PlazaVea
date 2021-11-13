<?php 

if(isset($_POST['generar'])){
    $generar  = ProveedorController::generarCotizacion();
    echo '<div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle"></i> Request realizada con exito.
        </div>';
}
$lista = ProveedorController::listaCotizaciones();


?>
<section class="">
    <form action="" method="post">
        <div class="container-fluid" style="height:700px ; width:85.5vw;" >
            <div class="row" >
                <!-- Title -->
                <div class="col-lg-12 text-center">
                    <div class="py-2">
                        <h1 class="border-botton">Generar Cotizacion</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-12">
                    <div class="row d-flex mb-2">
                        <div class="col-lg p-3">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registrarRequest">
                                <i class="fas fa-clipboard-list"></i> Nueva Cotizacion
                            </button>

                            <!-- <a href="body.php?pagina=registroPedidoProveedor" class="text-decoration-none text-light btn btn-secondary"> <i class="fas fa-shopping-cart"></i> Nuevo Pedido</a> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg col-md col-sm  text-center">
                            <table class="table" id="dataTable" cellspacing="0">
                                <thead class="text-center bg-danger text-light">
                                    <tr>
                                        <th>N°</th>
                                        <th>Codigo Cotizacion</th>
                                        <th>Proveedor</th>
                                        <th>Fecha de Cotizacion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; foreach ($lista as $lista ): $i++; ?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td><?=$lista['cod_cotizacion']?></td>
                                        <td><?=$lista['provedor_c']?></td>
                                        <td><?=$lista['fecha']?></td>
                                        <td>
                                            <!-- agregar productos -->
                                            <a href="body.php?pagina=registroCotizaciones&ic=<?=$lista['id']?>" class="btn btn-info"><i class="fas fa-calendar-plus"></i></a>
                                            <!-- <h2 class=" h3 text-success"><i class="fas fa-clipboard-check"></i></h2> -->
                                        </td>
                                    </tr>    
                                    <?php endforeach; ?>                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<div class="modal fade" id="registrarRequest" tabindex="-1" aria-labelledby="registrarRequest" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Codigo Generado</h5>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                <!-- Formulario de registro de productos -->
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoProducto">Codigo cotizacion</label>
                            <input type="text" class="form-control text-center" name="code" value="CT<?=rand()?>" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success" name="generar">Generar cotizacion</button>
                </div>
            </form>
        </div>
    </div>
</div>
