<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row my-2 mb-2">
                <!-- Title -->
                <div class="col-lg-12 text-center py-4">
                    <div class="mx-5 px-5 py-2">
                        <h1 class="border-botton">Lista de Productos</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-3">
                    <!-- Title -->
                    <p class="text-center my-2">Registrar de producto</p>
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
                            <div class="col-md-3">
                                <label for="codigoproducto">Cantidad</label>
                                <input type="text" class="form-control text-center" name="" value="4">
                            </div>
                            <div class="col-md-4">
                                <label for="codigoproducto">Precio Unitario</label>
                                <input type="text" class="form-control text-center" name="" value="12.00">
                            </div>
                            <div class="col-md-5">
                                <label for="codigoproducto">Categoria</label>
                                <select name="" id="" class="form-control">
                                    <option value="">Categoria 1</option>
                                    <option value="">Categoria 2</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="codigoproducto">Fecha Registro</label>
                                <input type="text" class="form-control text-center" name="" value="25/09/2021" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="codigoproducto">Fecha Vencimiento</label>
                                <input type="date" class="form-control text-center" name="" value="25/09/2021">
                            </div>
                        </div>
                    </form>
                    <div class="text-center my-2">
                        <button type="submit" class="btn btn-success " ">
                            <i class="fas fa-search"></i> Registrar Productos Ingresantes
                        </button>
                    </div>
                </div>

                <div class="col-lg border-left-danger text-center">
                        <p class="font-weight-bold">Lista de Productos</p>
                        <div class="container-fluid">
                            <table class="table-responsive table" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-center bg-danger text-light">
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Descripcion</th>
                                        <th>Precio Unitario.(s/.)</th>
                                        <th>Cantidad</th>
                                        <th>Categoria</th>
                                        <th>Fecha Registro</th>
                                        <th>Fecha Vencimiento</th>
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
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">5</a></td>
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
                                        <td><a href="" class="text-dark text-decoration-none">6</a></td>
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
                                        <td><a href="" class="text-dark text-decoration-none">7</a></td>
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
