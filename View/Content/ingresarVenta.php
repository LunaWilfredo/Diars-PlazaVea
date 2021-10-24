<section class="">
    <form action="" method="post">
        <div class="container-fluid" style="vh:100%">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 col-md col-sm text-center">
                    <h1 class="border-botton">Insertar Venta</h1>
                </div>
                <!-- Body content -->
                <div class="col-lg-12 col-md col-sm mb-2">
                    <!-- registrar Productos -->
                    <div class="row">
                        <div class="col-lg col-md col-sm">
                            <div class="form-group">
                                <label for="cliente">Cliente</label>
                                <input type="text" class="form-control" id="cliente" name="" placeholder="DNI Cliente">
                            </div>
                        </div>
                        <div class="col-lg col-md col-sm">
                            <div class="form-group">
                                <label for="operacion">N° Operacion</label>
                                <input type="text" class="form-control" id="operacion" value="OP00001" name="" readonly>
                            </div>
                        </div>
                        <div class="col-lg col-md col-sm">
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input type="text" class="form-control" id="fecha" value="<?= date('d/m/Y') ?>" name="" readonly>
                            </div>
                        </div>
                        <div class="col-lg col-md col-sm">
                            <div class="form-group">
                                <label for="local">Fecha</label>
                                <input type="text" class="form-control" id="local" value="Comas" name="" readonly>
                            </div>
                        </div>
                        <div class="col-lg col-md col-sm">
                            <div class="form-group">
                                <label for="caja">Caja</label>
                                <input type="text" class="form-control" id="caja" value="CJ01" name="" readonly>
                            </div>
                        </div>
                        <div class="col-lg col-md col-sm">
                            <div class="form-group">
                                <label for="metodopago">Metodo Pago</label>
                                <select name="" id="metodopago" class="form-control" value="">
                                    <option value="">Efectivo</option>
                                    <option value="">Tarjeta Debito</option>
                                    <option value="">Tarjeta Credito</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm col-md col-lg">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Codigo Producto</span>
                                </div>
                                <input type="text" aria-label="First name" class="form-control">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ListaProductos">
                                    Buscar
                                </button>
                            </div>
                        </div>
                        <div class="col-lg col-md col-sm">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Cantidad</span>
                                </div>
                                <input type="text" class="form-control" maxlength="3" minlength="1">
                                <input type="submit" value="Añadir" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md col-sm text-center mb-2">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center bg-danger text-light rounded">
                            <tr>
                                <th>Codigo</th>
                                <th>Descripcion</th>
                                <th>Cant</th>
                                <th>P.Unit.(s/.)</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">1</a></td>
                                <td>Producto Seleccionado</td>
                                <td>4</td>
                                <td>12.00</td>
                                <td><a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">2</a></td>
                                <td>Producto Seleccionado</td>
                                <td>4</td>
                                <td>12.00</td>
                                <td><a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">3</a></td>
                                <td>Producto Seleccionado</td>
                                <td>4</td>
                                <td>12.00</td>
                                <td><a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a></td>
                            </tr>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">4</a></td>
                                <td>Producto Seleccionado</td>
                                <td>4</td>
                                <td>12.00</td>
                                <td><a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-lg-3 col-md col-sm mb-5">
                    <div class="row">
                        <!-- Monto de Pago -->
                        <div class="col-lg col-md col-sm-12">
                            <h5 class="text-dark">SubTotal (s/.): <span class="lead">12.00</span></h1>
                            <h5 class="text-dark">IGV (s/.): <span class="lead">0.18</span></h1>
                        </div>
                        <div class="col-lg col-md col-sm-12">
                            <h2 class="text-left text-dark">Total (s/.):</h1>
                            <h1 class="text-left text-primary">12.00</h1>
                        </div>
                    </div>
                    <!-- Metodo de Pago -->
                    <div class="border text-center p-2">
                        <p class="text-dark font-weight-bold">Metodo de Pago</p>
                        <h1 class="">Efectivo</h1>
                        <!-- Boton de accion -->
                        <div class="text-center">
                            <!-- <input type="submit" value="Continuar Venta" class="btn btn-danger btn-md btn-rounded "> -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmacionVenta">
                                    Continuar Venta
                            </button>
                        </div>
                        <div class="text-center">
                            <a href="" class="text-decoration-none text-secondary">Imprimir voucher</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>


<!-- Modals -->
<!-- Modal Busqueda de productos -->
<div class="modal fade" id="ListaProductos" tabindex="-1" aria-labelledby="ListaProductos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lista de Productos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- Formulario de busqueda de productos -->
                <form action="" class="form" method="post">
                    <div class="table">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center bg-danger text-light">
                                <tr>
                                    <th>Codigo</th>
                                    <th>Producto</th>
                                    <th>Add</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0001</td>
                                    <td>Arroz costeño</td>
                                    <td class="text-center">
                                        <a href="" class="bg-danger btn-circle btn-sm text-light text-decoration-none"><i class="fas fa-plus"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>0002</td>
                                    <td>Acite Capri</td>
                                    <td class="text-center">
                                        <a href="" class="bg-danger btn-circle btn-sm text-light text-decoration-none"><i class="fas fa-plus"></i></a>
                                    </td>
                                </tr>        
                            </tbody>
                        </table>
                    </div>
                </form>
            <!-- Fin de formulario de buesqueda de productos -->
            </div>
            <!-- <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div> -->
        </div>
    </div>
</div>

<!-- Modal confirmacion venta -->
<div class="modal fade" id="confirmacionVenta" tabindex="-1" aria-labelledby="confirmacionVenta" aria-hidden="true">
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
                    <h1 class="h6 ">N° Operacion</h1>
                    <input type="text" name="" class=" form-control rounded text-center w-100 mb-2" value="ORD0001" readonly>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">aceptar</button>
            </div>
        </div>
    </div>
</div>
