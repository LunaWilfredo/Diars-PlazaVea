<?php
    if(isset($_POST['enviar'])){
        $factura = ProveedorController::facturas();
    }

?>
<section class="">
    <div class="container-fluid" style="width:86vw">
        <div class="row">
            <!-- Title -->
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="py-2">
                    <h1 class="border-botton">Envio de Facturas</h1>
                </div>
            </div>
            <!-- Body content -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row my-2">
                <!-- Registrar Productos -->
                    <div class="col-lg col-md col-sm">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrarProductos">
                            <i class="fas fa-envelope"></i> Factura Producto
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg col-md col-sm  text-center">
                <table class="table" id="dataTable" cellspacing="0">
                    <thead class="text-center bg-danger text-light">
                        <tr>
                                <th>#</th>
                                <th>N° Factura</th>
                                <th>Fecha de Pedido</th>
                                <th>Proveedor</th>
                                <th>Responsable Proveedor</th>
                                <th>Archivo</th>
                                <th>Observaciones</th>
                                <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>FT0001</td>
                            <td><?= date('d-M-Y')?></td>
                            <td>Gloria</td>
                            <td>Nombre_encargado_proveedor</td>
                            <td>Nombre_archivo</td>
                            <td>Observaciones</td>
                            <td>
                                <a href="#" class="btn btn-primary"><i class="fas fa-download"></i></a>
                                <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>                                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<!-- Modals -->
<!-- Modal registro de productos -->
<div class="modal fade" id="registrarProductos" tabindex="-1" aria-labelledby="registrarProductos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de Factura</h5>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg col-md col-sm">
                            <label for="archivoFactura">Archivo Factura</label>
                            <input type="file" class="custom-file file-input" name="archivo" value="">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoProducto">N° Factura</label>
                            <input type="text" class="form-control text-center" name="numerof" value="">
                        </div>
                        <div class="col-md">
                            <label for="codigoproducto">Fecha Pedido</label>
                            <input type="date" class="form-control text-center" name="fecha" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoproducto">Proveedor</label>
                            <input type="text" class="form-control text-center" name="proveedor" value="<?=$_SESSION['usuario']?>" readonly>
                        </div>
                        <div class="col-md">
                            <label for="codigoproducto">Responsable Proveedor</label>
                            <input type="text" class="form-control text-center" name="responsable" value="">
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoproducto">Observaciones</label>
                            <textarea name="obs" id="" cols="10" rows="3" class="form-control"></textarea>
                        </div>
                    </div>            
                </div>
                <!-- Fin de formulario de buesqueda de productos -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning" name="enviar"><i class="fas fa-paper-plane"></i> Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>