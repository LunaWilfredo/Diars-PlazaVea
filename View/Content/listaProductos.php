<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 col-md-12 col-sm-12 text-center py-2">
                    <h1 class="border-botton">Consultar Productos</h1>
                </div>
                <!-- Body content -->
                <div class="col-lg-12 col-md-12 col-sm-12 pb-2">
                    <!-- Registrar Productos -->
                    <form action="" method="post">
                        <div class="row border py-2">
                            <div class="col-lg col-md col-sm d-flex">
                                <input type="text" class="form-control m-2" name="" value="" placeholder="Ingresar codigo de Producto,stock o fecha">
                                <button type="button" class="btn btn-success p-2">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <div class="text-center p-2">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registroProducto">
                                    <i class="fas fa-pen-square"></i> Registrar Productos
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg col-md col-sm text-center">
                    <table class="table" id="dataTable" cellspacing="0">
                        <thead class="text-center bg-danger text-light">
                            <tr>
                                <th>Codigo</th>
                                <th>Lote</th>
                                <th>Descripcion</th>
                                <th>Stock</th>
                                <th>Categoria</th>
                                <th>Fecha Registro</th>
                                <th>Fecha Vencimiento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">1</a></td>
                                <td>LT001</td>
                                <td>Producto Seleccionado</td>
                                <td>12</td>
                                <td>aceites</td>
                                <td>25/09/2021</td>
                                <td>25/09/2021</td>
                            </tr>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">2</a></td>
                                <td>LT001</td>
                                <td>Producto Seleccionado</td>
                                <td>12</td>
                                <td>aceites</td>
                                <td>25/09/2021</td>
                                <td>25/09/2021</td>
                            </tr>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">3</a></td>
                                <td>LT001</td>
                                <td>Producto Seleccionado</td>
                                <td>12</td>
                                <td>aceites</td>
                                <td>25/09/2021</td>
                                <td>25/09/2021</td>
                            </tr>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">4</a></td>
                                <td>LT001</td>
                                <td>Producto Seleccionado</td>
                                <td>12</td>
                                <td>aceites</td>
                                <td>25/09/2021</td>
                                <td>25/09/2021</td>
                            </tr>                                    
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </form>
</section>

<!-- Modal registro Producto -->
<div class="modal fade" id="registroProducto" tabindex="-1" aria-labelledby="registroProducto" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="row">
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="cliente">Lote</label>
                            <input type="text" class="form-control" id="cliente" name="" placeholder="">
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="operacion">Descripcin</label>
                            <input type="text" class="form-control" id="operacion" value="" name="">
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="fecha">Cantidad</label>
                            <input type="text" class="form-control" id="fecha" value="" name="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="local">Categoria</label>
                            <input type="text" class="form-control" id="local" value="Comas" name="" >
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="caja">Fecha de Vencimiento</label>
                            <input type="text" class="form-control" id="caja" value="<?= date('d/m/Y')?>" name="" readonly>
                        </div>
                    </div>
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#confirmacionVenta">Registrar Producto</button>
      </div>
    </div>
  </div>
</div>