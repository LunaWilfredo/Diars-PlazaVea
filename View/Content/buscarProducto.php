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
                <div class="col-lg-12 border px-2 pt-2 text-center">
                    <!-- Registrar Productos -->
                    <form action="" method="post">
                        <div class="form">
                            <div class="row">
                                <div class="col-md-2 py-2">
                                    <label for="codigoproducto">Descripcion de Producto</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control text-center w-100" name="" value="" placeholder="Ingresar codigo de Producto">
                                </div>
                                <div class="col-md-">
                                    <button type="button" class="btn btn-success">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
                <div class="col-lg-12 ">
                    <p class="font-weight-bold text-center pt-2">Lista de Productos Tienda</p>
                    
                        <table class=" table text-center px-5" id="dataTable" width="100%" cellspacing="0">
                            <thead class="text-center bg-danger text-light">
                                <tr>
                                    <th>#</th>
                                    <th>Codigo</th>
                                    <th>Descripcion</th>
                                    <th>Marca</th>
                                    <th>Precio Unitario.(s/.)</th>
                                    <th>Cantidad</th>
                                    <th>Categoria</th>
                                    <th>Fecha Retiro</th>
                                    <th>Fecha Vencimiento (P)</th>
                                    <th>Ubicacion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>001</td>
                                    <td>Producto Seleccionado</td>
                                    <td></td>
                                    <td>12.00</td>
                                    <td>2</td>
                                    <td>aceites</td>
                                    <td>25/09/2021</td>
                                    <td>25/09/2021</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubicacionModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>002</td>
                                    <td>Producto Seleccionado</td>
                                    <td></td>
                                    <td>12.00</td>
                                    <td>2</td>
                                    <td>aceites</td>
                                    <td>25/09/2021</td>
                                    <td>25/09/2021</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubicacionModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>003</td>
                                    <td>Producto Seleccionado</td>
                                    <td></td>
                                    <td>12.00</td>
                                    <td>2</td>
                                    <td>aceites</td>
                                    <td>25/09/2021</td>
                                    <td>25/09/2021</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubicacionModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>004</td>
                                    <td>Producto Seleccionado</td>
                                    <td></td>
                                    <td>12.00</td>
                                    <td>2</td>
                                    <td>aceites</td>
                                    <td>25/09/2021</td>
                                    <td>25/09/2021</td>
                                    <td>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubicacionModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                </div>
            </div>
        </div>
    </form>
</section>


<!-- MODAL de visualizacion-->

<div class="modal fade" id="ubicacionModal" tabindex="-1" aria-labelledby="ubicacionModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title py-2" id="exampleModalLabel">Ubicacion</h5>
        <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">Ok</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <table class="table">
            <thead class="text-center text-light bg-warning">
                <th>Pasillo</th>
            </thead>
            <tbody>
                <td> 18</td>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>