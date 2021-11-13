<?php
    if(isset($_SESSION['usuario'])){
        $detalles = CambioDevolucionController::verCambios();
    }
    if(!empty($_POST['producto']) && isset($_POST['btn-buscar'])){
        $buscar = CambioDevolucionController::busquedaProducto();
    }

    if(isset($_POST['btn-registro']) && isset($_POST['idproducto']) ){
        $cambio = CambioDevolucionController::registroProductoCambio();
    }

    if(isset($_GET['dlt'])){
        $id = $_GET['dlt'];
        $respuesta = CambioDevolucionController::eliminarCambio();
    }

    if(isset($_POST['guardar']) && !empty($_POST['comprobante'])){
        $exchange = CambioDevolucionController::generarExchange();
    }
?>
<section class="">
    <form action="" method="post">
        <div class="container-fluid" style="height:80vh ; width:85.5vw">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 col-md-12 col-ms-12 text-center">
                    <div class="py-2">
                        <h1 class="border-botton">Generar Exchange</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-12 col-md-12 col-sm-12 py-2 d-flex">
                    <div class="">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#terminosModal">
                            <i class="fas fa-save"></i> Ejecutar
                        </button>
                    </div>
                    <div class="ml-2">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#refund">
                            <i class="fas fa-print"></i> Imprimir Exchange
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg col-md col-sm d-flex">
                    <label for="comprobante">N° Comprobante</label>
                    <div class="col-lg col-md col-sm ">
                        <input type="text" class="form-control text-center" name="comprobante" id="comprobante" value="" placeholder="CV00000">      
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg col-md col-sm text-center mt-2 mb-2">
                    <p class="font-weight-bold">Productos de Cambio</p>
                    <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Codigo Producto</span>
                            </div>
                            <input type="text" aria-label="First name" class="form-control" name="producto" id="producto">

                            <button type="submit" class="btn btn-success ml-2" name="btn-buscar" id="btn-buscar">
                                <i class="fas fa-search"></i>
                            </button>
                    </div>
                    <?php if(!empty($_POST['producto']) && isset($_POST['btn-buscar'])): ?>
                    <div class="mt-2">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center bg-danger text-light">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Descripcion Producto</th>
                                    <th>Marca</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                    <th>Añadir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($buscar as $buscar):?>
                                <tr>
                                    <td>
                                        <?=$buscar['lote']?>
                                        <input type="hidden" value="<?=$buscar['id']?>" name="idproducto">
                                    </td>
                                    <td><?=$buscar['nombre_producto']?></td>
                                    <td><?=$buscar['marca']?></td>
                                    <td>
                                        <input type="text" class="form-control" name="cantidad" value="1" maxlength="3" minlength="1">
                                    </td>
                                    <td><?=$buscar['precio'].'.00'?></td>
                                    <td class="text-center">
                                        <button class="btn btn-danger btn-sm" type="submit" name="btn-registro">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </td>
                                </tr> 
                                <?php endforeach; ?>      
                            </tbody>
                        </table>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <table class="table" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center bg-danger text-light">
                        <tr>
                            <th>Codigo</th>
                            <th>Descripcion Producto</th>
                            <th>Marca</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php foreach($detalles as $detalles):?>
                        <tr>
                            <td><?=$detalles['lote']?></td>
                            <td><?=$detalles['nombre_producto']?></td>
                            <td><?=$detalles['marca']?></td>
                            <td><?=$detalles['cant_cambio']?></td>
                            <td><?=$detalles['precio'].'.00'?></td>
                            <td>
                                <a href="body.php?pagina=generarExchange&dlt=<?=$detalles['idcambio']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                <!-- <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a> -->
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</section>

<!-- MODAL -->

    <div class="modal fade" id="terminosModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="terminosLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Advertencia</h5>
                </div>
                <div class="modal-body">
                    <p class="lead"><i class="fas fa-exclamation-triangle text-warning"></i> Todo cambio es aceptado por única vez y sin opción a cambiar de decisión una vez generado el comprobante de cambio</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#cambioModal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>


<!-- Mensaje Final -->
<div class="modal fade" id="cambioModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="cambioModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Codigo de Cambio</h5>
            </div>
            <div class="modal-body">
                <input type="text" name="compcambio" value="ODC<?=rand()?>" class="form-control text-center" readonly>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success" name="guardar">Aceptar</button>
            </div>
        </div>
    </div>
</div>

</form>

<!-- Formulario de imprimir refund Vista en otra pestana en pdf -->
<form action="pdfbasec.php" method="post" >
    <div class="modal fade" id="refund" tabindex="-1" aria-labelledby="refund" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="refund">Impresion de Refund</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h1 class="h6 ">Codigo de Orden de Exchange</h1>
                        <input type="text" name="code" class="form-control text-center w-100 mb-2" value="ODC">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" target="_blank">Imprimir</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Fin de formulario  -->