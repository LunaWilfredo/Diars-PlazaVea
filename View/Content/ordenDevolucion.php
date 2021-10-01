<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row my-2 mb-2">
                <!-- Title -->
                <div class="col-lg-12 text-center py-4">
                    <div class="mx-5 px-5 py-2">
                        <h1 class="border-botton">Generar Orden Devolucion</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg">
                    <!-- Title -->
                    <p class="text-center my-2 mt-5">Registro de Datos</p>
                    <!-- Registro de producto entregado por cliente -->
                    <div class="text-left mb-5">
                        <p class="lead">Codigo de Comprobante de Pago:</p>
                        <input type="text" class="rounded text-center w-100 mb-2" placeholder="Codigo de comprobante">
                        <p class="lead">Fecha de Devolucion:</p>
                        <input type="text" class="rounded text-center w-100 mb-2" name="fechad" value="30/09/2021" readonly>
                        <p class="lead">Local: <span class="font-weight-bold">Comas</span></p>
                        <p class="lead">Caja: <span class="font-weight-bold">007</span></p>
                        <h2 class="h6 my-2 text-dark">Descripcion de motivo</h1>
                        <textarea name="" id="" cols="80" rows="5" value="" class="border p-2" placeholder="En esta area escriba el motivo del cambio / devolucion del producto o productos registrados "></textarea>
                        <label for="monto">Monto(s/.):</label>
                        <input type="text" value="" name="" class="form-control" placeholder="Monto de Devolucion">
                    </div>
                </div>
                <div class="col-lg ">
                    <!-- Boton de accion -->
                    <div class="text-center mt-5 mb-2">
                        <button type="button" class="btn btn-danger btn-rounded btn-lg" data-toggle="modal" data-target="#confirmacion">
                            <i class="fas fa-barcode"></i> Efectuar Devolucion
                        </button>
                    </div>
                    <div class="text-center">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#refund">
                        Imprimir Refund
                        </button>
                    </div>
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