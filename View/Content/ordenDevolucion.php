<?php
    $cajero = LoginController::usuarioLogin($_SESSION['usuario']);
    $ordenes = CambioDevolucionController::listaDevoluciones();

    if(isset($_POST['compago']) && !empty($_POST['compago']) ){
        $registro = CambioDevolucionController::generarDevolucion();
        if($registro == 'ok'){
            echo " <div class='alert alert-success'>Registro Exitoso</div>";
        }
    }

?>
<form action="" method="post">
    <section class="">
        <div class="container-fluid">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 text-center">
                    <div class="py-2">
                        <h1 class="border-botton">Generar Orden Devolucion</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-12 d-flex">
                    <div class="mr-2">
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmacion">
                            <i class="fas fa-barcode"></i> Efectuar Devolucion
                        </button>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#refund">
                            <i class="fas fa-print"></i> Imprimir Refund
                        </button>
                    </div>
                </div>
                <div class="col-lg col-md col-sm">
                    <!-- Title -->
                    <p class="text-center my-2"> Datos</p>
                    <!-- Registro de producto entregado por cliente -->
                    <div class="row d-flex">
                        <div class="col-lg">
                            <label for="compago">Codigo Comprobante de Pago:</label>
                            <input type="text" class="form-control" placeholder="Codigo de comprobante" name="compago" id="compago" value="CV" required>

                            <label for="">Fecha de Devolucion:</label>
                            <input type="text" class="form-control" name="fechadev" value="<?=date('d-M-Y') ?>" readonly>
                        </div>
                        <div class="col-lg">
                            <!-- <label for="">Local :</label>
                            <input type="text" class="form-control" name="local" value="Comas" readonly> -->
                            <label for="monto">Monto(s/.):</label>
                            <input type="text" value="" name="monto" class="form-control" placeholder="Monto de Devolucion" required>

                            <label for="">Cajero :</label>
                            <?php foreach($cajero as $key => $cajero):?>
                            <input type="text" class="form-control" name="" value="CJ<?=$cajero['username']?>" readonly>
                            <input type="hidden" class="form-control" id="cajero" value="<?=$cajero['id']?>" name="cajero" readonly>
                            <?php endforeach;?>               
                        </div>
                        <div class="col-lg">
                            <label for="">Descripcion de motivo</label>
                            <textarea name="motivo" id="motivo" cols="30" rows="4" value="" class="form-control p-2" placeholder="En esta area escriba el motivo devolucion del producto o productos"></textarea>
                        </div>
                        <div class="col-lg">
                            <h1 class="h2 text-warning"><i class="fas fa-exclamation-circle text-warning"></i> Importante</h1>
                            <p class="text-primary">Toda devolucion se brinda en vale de compra del valor indicado o mismo valor del producto.</p>
                            <p class="text-primary">"Solo aplicado a productos comestibles y ropas"</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    Vista Previa de Orden de devolucion
                </div>
                <div class="col-lg">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center bg-danger text-light">
                            <tr>
                                <th>Comprobante</th>
                                <th>Fecha Devolucion</th>
                                <th>Local</th>
                                <th>Cajero</th>
                                <th>Motivo</th>
                                <th>Monto</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                        <?php foreach($ordenes as $ordenes): ?>
                            <tr>
                                <td><?=$ordenes['cod_comp_dev']?></td>
                                <td><?=$ordenes['fecha_dev']?></td>
                                <td>Comas</td>
                                <td><?=$ordenes['cajero']?></td>
                                <td><?=$ordenes['motivo_dev']?></td>
                                <td><?=$ordenes['monto_dev']?></td>
                            </tr>
                        <?php endforeach?>       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Modals -->
    <!-- Modal confirmacion de proceso -->

    <div class="modal fade" id="confirmacion" tabindex="-1" aria-labelledby="confirmacion" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmacion de Proceso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h1 class="h6 ">Orden de Devolucion</h1>
                        <input type="text" name="num_orden" class="form-control rounded text-center w-100 mb-2" value="ORD<?=rand()?>" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="btngenerar">
                        Ok
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>  
<!-- Fin de formulario  -->

<!-- Formulario de imprimir refund Vista en otra pestana en pdf -->
<form action="" method="post" >
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
                        <h1 class="h6 ">Codigo de Orden de Devolucion</h1>
                        <input type="text" name="" class="form-control text-center w-100 mb-2" value="ORD">
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