<section class="">
    <form action="" method="post">
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
                            Imprimir Refund
                        </button>
                    </div>
                </div>
                <div class="col-lg">
                    <!-- Title -->
                    <p class="text-center my-2"> Datos</p>
                    <!-- Registro de producto entregado por cliente -->
                    <div class="row d-flex">
                        <div class="col-lg">
                            <label for="">Codigo Comprobante de Pago:</label>
                            <input type="text" class="form-control" placeholder="Codigo de comprobante">
                            <label for="">Fecha de Devolucion:</label>
                            <input type="text" class="form-control" name="fechad" value="30/09/2021" readonly>
                        </div>
                        <div class="col-lg">
                            <label for="">Local :</label>
                            <input type="text" class="form-control" name="" value="Comas" readonly>
                            <label for="">Cajero :</label>
                            <input type="text" class="form-control" name="" value="<?=$_SESSION['usuario']?>" readonly>
                            
                        </div>
                        <div class="col-lg">
                            <label for="">Descripcion de motivo</label>
                            <textarea name="" id="" cols="30" rows="4" value="" class="border p-2" placeholder="En esta area escriba el motivo devolucion del producto o productos"></textarea>
                        </div>
                        <div class="col-lg">
                            <label for="monto">Monto(s/.):</label>
                            <input type="text" value="" name="" class="form-control" placeholder="Monto de Devolucion">
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
                            <tr>
                                <td>COMP00001</td>
                                <td><?= date('d-M-Y')?></td>
                                <td>Comas</td>
                                <td>12345678</td>
                                <td>No me gusto producto</td>
                                <td>80.00</td>
                            </tr>       
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</section>


<!-- Modals -->
<!-- Modal confirmacion de proceso -->
<form action="" method="post">
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
                        <input type="text" name="" class="rounded text-center w-100 mb-2" value="ORD000001" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Ok</button>
                </div>
            </div>
        </div>
    </div>
</form>  
<!-- Fin de formulario  -->

<!-- Formulario de imprimir refund -->
<form action="" method="post">
    <div class="modal fade" id="refund" tabindex="-1" aria-labelledby="refund" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="refund">Impresion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <h1 class="h6 ">Codigo de Orden de Devolucion</h1>
                        <input type="text" name="" class="rounded text-center w-100 mb-2" value="ORD">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Imprimir</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Fin de formulario  -->