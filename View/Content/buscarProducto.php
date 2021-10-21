<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row my-2 mb-2">
                <!-- Title -->
                <div class="col-lg-12 text-center py-4">
                    <div class="mx-5 px-5 py-2">
                        <h1 class="border-botton">Buscar Productos</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-3">
                    <!-- Title -->
                    <p class="text-center my-2">Buscar producto</p>
                    <!-- Registrar Productos -->
                    <form action="" method="post">
                        <div class="form-row">
                            <div class="col-md-5">
                                <label for="codigoproducto">Lote de Producto</label>
                                <input type="text" class="form-control text-center" name="" value="0001" readonly>
                            </div>
                            <div class="col-md-12">
                                <label for="codigoproducto">Descripcion de Producto</label>
                                <input type="text" class="form-control text-center" name="" value="Arroz Costeño">
                            </div>
                            <div class="col-md-6">
                                <label for="codigoproducto">Cantidad Retiro</label>
                                <input type="text" class="form-control text-center" name="" value="4">
                            </div>
                            <div class="col-md-6">
                                <label for="codigoproducto">Categoria</label>
                                <input type="text" class="form-control text-center" name="" value="Categoria" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="codigoproducto">Fecha Retiro</label>
                                <input type="text" class="form-control text-center" name="" value="25/09/2021" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="codigoproducto">Fecha Vencimiento (P)</label>
                                <input type="text" class="form-control text-center" name="" value="25/09/2021" readonly>
                            </div>
                        </div>
                        <div class="text-center my-2">
                            <button type="button" class="btn btn-success " ">
                                <i class="fas fa-search"></i> Buscar Productos
                            </button>
                            <button type="button" class="btn btn-warning " ">
                                <i class="far fa-plus-square"></i> Registrar Productos
                            </button>
                        </div>
                    </form>
                    <div class="border p-2">
                        <h6 class="font-weight-bold">Notes:</h6>
                        <p class="lead">Buscar Producto e Ingresar Cantidad a Retirar</p>
                        <p class="lead">(P) Producto</p>
                    </div>
                    
                </div>

                <div class="col-lg border-left-danger text-center">
                        <p class="font-weight-bold">Lista de Productos Tienda</p>
                        <div class="container-fluid">
                            <table class="table-responsive table" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-center bg-danger text-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Descripcion</th>
                                        <th>Precio Unitario.(s/.)</th>
                                        <th>Cantidad</th>
                                        <th>Categoria</th>
                                        <th>Fecha Retiro</th>
                                        <th>Fecha Vencimiento (P)</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">1</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>12.00</td>
                                        <td>
                                            2
                                            <div class="form-row">
                                                <div class="col-12">
                                                    <input type="text" class="form-control text-center" name="" value="2">
                                                </div>
                                            </div>
                                        </td>
                                        <td>aceites</td>
                                        <td>25/09/2021</td>
                                        <td>25/09/2021</td>
                                        <td>
                                            <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                            <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">2</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>12.00</td>
                                        <td>2</td>
                                        <td>aceites</td>
                                        <td>25/09/2021</td>
                                        <td>25/09/2021</td>
                                        <td>
                                            <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                            <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">3</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>12.00</td>
                                        <td>2</td>
                                        <td>aceites</td>
                                        <td>25/09/2021</td>
                                        <td>25/09/2021</td>
                                        <td>
                                            <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                            <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">4</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>12.00</td>
                                        <td>2</td>
                                        <td>aceites</td>
                                        <td>25/09/2021</td>
                                        <td>25/09/2021</td>
                                        <td>
                                            <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                            <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
                <div class="col-lg-2">
                    <!-- Boton de accion -->
                    <div class="text-center border-left-danger">
                        <input type="submit" value="Realizar Envio" class="btn btn-danger btn-rounded btn-lg">
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>
