<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 text-center">
                    <div class="py-2">
                        <h1 class="border-botton">Solicitar Productos</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-12">
                    <!-- Registrar Productos -->
                    <form action="" method="post">
                        <div class="row d-flex justify-content-end">
                            <div class="col-lg">
                                <button type="button" class="btn btn-success " ">
                                    <i class="fas fa-search"></i> Buscar Productos
                                </button>
                            </div>
                            <div class="col-lg">
                                <button type="button" class="btn btn-warning">
                                    <i class="far fa-plus-square"></i> Registrar Productos
                                </button>
                            </div>
                            <div class="col-lg">
                                <div class="text-center">
                                    <input type="submit" value="Realizar Envio" class="btn btn-primary btn-rounded">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <label for="codigoproducto">Lote de Producto</label>
                                <input type="text" class="form-control text-center" name="" value="0001" readonly>
                            </div>
                            <div class="col-md">
                                <label for="codigoproducto">Descripcion de Producto</label>
                                <input type="text" class="form-control text-center" name="" value="Arroz Costeño">
                            </div>
                            <div class="col-md">
                                <label for="codigoproducto">Cantidad Retiro</label>
                                <input type="text" class="form-control text-center" name="" value="4">
                            </div>
                            <div class="col-md">
                                <label for="codigoproducto">Categoria</label>
                                <input type="text" class="form-control text-center" name="" value="Categoria" readonly>
                            </div>
                            <div class="col-md">
                                <label for="codigoproducto">Fecha Retiro</label>
                                <input type="text" class="form-control text-center" name="" value="25/09/2021" readonly>
                            </div>
                            <div class="col-md">
                                <label for="codigoproducto">Fecha Vencimiento (P)</label>
                                <input type="text" class="form-control text-center" name="" value="25/09/2021" readonly>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg  text-center">
                        <p class="font-weight-bold">Lista de Productos Solicitados</p>
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
            </div>
        </div>
    </form>
</section>
