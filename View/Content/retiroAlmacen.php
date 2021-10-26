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
                        <div class="row">
                            <div class="col-lg d-flex justify-content-start">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registrarProducto">
                                    <i class="fas fa-search"></i> Buscar Productos
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg  text-center mt-2">
                    <p class="font-weight-bold">Lista de Productos Solicitados</p>
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center bg-danger text-light">
                            <tr>
                                <th>#</th>
                                <th>Cod. Producto</th>
                                <th>Producto</th>
                                <th>Cantidad Retiro</th>
                                <th>Categoria</th>
                                <th>Fecha Retiro</th>
                                <th>Encargado</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">1</a></td>
                                <td>COD0001</td>
                                <td>Producto Seleccionado</td>
                                <td>20</td>
                                <td>Aceites</td>
                                <td><?= date("d-M-Y")?></td>
                                <td><?=$_SESSION['usuario']?></td>
                                <td>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">2</a></td>
                                <td>COD0001</td>
                                <td>Producto Seleccionado</td>
                                <td>20</td>
                                <td>Aceites</td>
                                <td><?= date("d-M-Y")?></td>
                                <td><?=$_SESSION['usuario']?></td>
                                <td>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">3</a></td>
                                <td>COD0001</td>
                                <td>Producto Seleccionado</td>
                                <td>20</td>
                                <td>Aceites</td>
                                <td><?= date("d-M-Y")?></td>
                                <td><?=$_SESSION['usuario']?></td>
                                <td>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">4</a></td>
                                <td>COD0001</td>
                                <td>Producto Seleccionado</td>
                                <td>20</td>
                                <td>Aceites</td>
                                <td><?= date("d-M-Y")?></td>
                                <td><?=$_SESSION['usuario']?></td>
                                <td>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</section>

<!-- Buscar Producto -->
<form action="" method="post">
    <div class="modal fade" id="registrarProducto" tabindex="-1" aria-labelledby="registrarProducto" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="refund">Impresion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoproducto">Buscar</label>
                            <input type="text" class="form-control text-center" name="" value="" placeholder="Codigo de Producto, nombre ">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoproducto">Codigo Producto</label>
                            <input type="text" class="form-control text-center" name="" value="0001" readonly>
                        </div>
                        <div class="col-md">
                            <label for="codigoproducto">Producto</label>
                            <input type="text" class="form-control text-center" name="" value="Arroz Costeño">
                        </div>
                        <div class="col-md">
                            <label for="codigoproducto">Cantidad Retiro</label>
                            <input type="text" class="form-control text-center" name="" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                                <label for="codigoproducto">Categoria</label>
                                <input type="text" class="form-control text-center" name="" value="Categoria" readonly>
                        </div>
                        <div class="col-md">
                                <label for="codigoproducto">Fecha Retiro</label>
                                <input type="text" class="form-control text-center" name="" value="25/09/2021" readonly>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Efectuar Pedido</button>
                </div>
            </div>
        </div>
    </div>
</form>
