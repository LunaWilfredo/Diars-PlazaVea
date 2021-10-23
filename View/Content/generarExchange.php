<section class="">
        <div class="container-fluid">
            <div class="row my-2 mb-2">
                <!-- Title -->
                <div class="col-lg-12 col-md-12 col-xs-12 text-center py-4">
                    <div class="mx-5 px-5 py-2">
                        <h1 class="border-botton">Generar Exchange</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-3 col-md col-sm">
                    <!-- Title -->
                    <!-- <p class="text-center my-2">Producto</p> -->
                    <!-- Registrar Productos -->
                    <div class="form-row">
                        <div class="col-md-12 col-sm-12 mb-3">
                            <form action="" method="post">
                                <label for="codigoproducto">N° Comprobante</label>
                                <input type="text" class="form-control text-center" name="" value="" placeholder="COMP00000">
                                <label for="codigoproducto">Correo:</label>
                                <input type="text" class="form-control text-center" name="" value="" placeholder="correo@mail.com">
                            </form>
                        </div>

                        <div class="col-md-4">
                            <label for="codigoproducto">Cliente:</label>
                        </div>
                        <div class="col-md-8">
                            <p class="">12345678</p>
                        </div>

                        <div class="col-md-12">
                            <label for="codigoproducto">Descripcion de Compra:</label>
                        </div>
                        <div class="col-md-12">
                            <ol class="text-primary">
                                <li class="">Aceite SAO</li>
                                <li class="">Leche Gloria</li>
                            </ol>
                        </div>
                            
                        <div class="col-md-6">
                            <label for="codigoproducto">Forma de Pago:</label>
                        </div>
                        <div class="col-md-6">
                            <p class="">Tarjeta Debito</p>
                        </div>
                    </div>                   
                </div>

                <div class="col-lg col-md col-xs border-left-danger text-center">
                        <p class="font-weight-bold">Productos de Cambio</p>
                        <div class="container-fluid">
                            <form action="" method="post">
                                <table class="table-responsive table" id="dataTable" width="100%" cellspacing="0">
                                    <thead class="text-center bg-danger text-light">
                                        <tr>
                                            <th>#</th>
                                            <th>Codigo</th>
                                            <th>Descripcion</th>
                                            <th>Cantidad</th>
                                            <th>Categoria</th>
                                            <th>Accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="" class="text-dark text-decoration-none">1</a>
                                            </td>
                                            <td>000001</td>
                                            <td>Producto Seleccionado</td>
                                            <td>
                                                2
                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <input type="text" class="form-control text-center" name="" value="2">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>aceites</td>
                                            <td>
                                                <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                                <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="text-dark text-decoration-none">1</a>
                                            </td>
                                            <td>000001</td>
                                            <td>Producto Seleccionado</td>
                                            <td>
                                                2
                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <input type="text" class="form-control text-center" name="" value="2">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>aceites</td>
                                            <td>
                                                <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                                <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="text-dark text-decoration-none">1</a>
                                            </td>
                                            <td>000001</td>
                                            <td>Producto Seleccionado</td>
                                            <td>
                                                2
                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <input type="text" class="form-control text-center" name="" value="2">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>aceites</td>
                                            <td>
                                                <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                                <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="" class="text-dark text-decoration-none">1</a>
                                            </td>
                                            <td>000001</td>
                                            <td>Producto Seleccionado</td>
                                            <td>
                                                2
                                                <div class="form-row">
                                                    <div class="col-12">
                                                        <input type="text" class="form-control text-center" name="" value="2">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>aceites</td>
                                            <td>
                                                <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                                <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                        </div>
                </div>
                <div class="col-lg-2">
                    <!-- Boton de accion -->
                    <div class="text-center">
                        <button type="button" class="btn btn-danger btn-rounded btn-lg w-100" data-toggle="modal" data-target="#terminosModal">
                            Ejecutar
                        </button>
                    </div>
                    <div class="text-center">
                        <a href="" class=" text-secondary">Imprimir Exchange</a>
                    </div>
                </div>
            </div>
        </div>
</section>

<!-- MODAL -->
<form action="" method="post">
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
</form>

<!-- Mensaje Final -->
<div class="modal fade" id="cambioModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="cambioModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Codigo de Cambio</h5>
            </div>
            <div class="modal-body">
                <input type="text" name="" value="CPC00001" class="form-control text-center">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-success">Aceptar</button>
            </div>
        </div>
    </div>
</div>