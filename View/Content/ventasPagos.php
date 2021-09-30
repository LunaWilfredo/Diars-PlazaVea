<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row my-2 mb-2">
                <!-- Title -->
                <div class="col-lg-12 text-center py-4">
                    <div class="mx-5 px-5 py-2">
                        <h1 class="border-botton">Proceso de Pagos / Ventas</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-3">
                    <!-- Title -->
                    <p class="text-center my-2">Lista de productos</p>
                    <!-- Buscar Productos -->
                    <div class="text-center my-2">
                        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#ListaProductos">
                            <i class="fas fa-search"></i> Buscar Productos
                        </button>
                    </div>
                    <div class="text-left">
                        <p class="lead">Cliente:</p>
                        <input type="text" class="rounded text-center w-100 mb-2" placeholder="Nombre de cliente">
                        <p class="lead">Operacion: <span class="font-weight-bold">001</span></p>
                        <p class="lead">Fecha: <span class="font-weight-bold">24/09/2021</span></p>
                        <p class="lead">Local: <span class="font-weight-bold">Comas</span></p>
                        <p class="lead">Caja: <span class="font-weight-bold">007</span></p>
                        <p class="lead">Tipo de Moneda: <span class="font-weight-bold">Nuevo Sol</span></p>
                    </div>
                </div>

                <div class="col-lg border-left-danger text-center">
                        <p class="font-weight-bold">Productos Seleccionados</p>
                        <div class="container-fluid">
                            <table class="table-responsive table" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-center bg-danger text-light">
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Descripcion</th>
                                        <th>Cant</th>
                                        <th>P.Unit.(s/.)</th>
                                        <th>Cant.xPU</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">1</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>4</td>
                                        <td>12.00</td>
                                        <td>48.00</td>
                                        <td><a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">2</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>4</td>
                                        <td>12.00</td>
                                        <td>48.00</td>
                                        <td><a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">3</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>4</td>
                                        <td>12.00</td>
                                        <td>48.00</td>
                                        <td><a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">4</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>4</td>
                                        <td>12.00</td>
                                        <td>48.00</td>
                                        <td><a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">5</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>4</td>
                                        <td>12.00</td>
                                        <td>48.00</td>
                                        <td><a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">6</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>4</td>
                                        <td>12.00</td>
                                        <td>48.00</td>
                                        <td><a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">7</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>4</td>
                                        <td>12.00</td>
                                        <td>48.00</td>
                                        <td><a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
                <div class="col-lg border-left-danger">
                    <!-- Monto de Pago -->
                    <div class="">
                        <h5 class="my-2  text-dark">SubTotal (s/.): <span class="lead">12.00</span></h1>
                        <h5 class="my-2  text-dark">IGV (s/.): <span class="lead">0.18</span></h1>
                    </div>
                    <div class="">
                        <h2 class="my-2 text-center text-dark">Total (s/.):</h1>
                        <h1 class=" text-center text-primary">12.00</h1>
                    </div>
                    <!-- Metodo de Pago -->
                    <div class=" border text-center my-4 ">
                        <p class="text-dark my-2 font-weight-bold">Metodo de Pago</p>
                        <h1 class="">Efectivo/Tarjeta</h1>
                        <!---modal de cambio de metodo de pago--->
                        <button type="button" class="btn btn-success my-2" data-toggle="modal" data-target="#metodoPago">
                            Cambiar Metodo de Pago
                        </button>
                    </div>
                    <!-- Boton de accion -->
                    <div class="text-center">
                        <input type="submit" value="Realizar Compra" class="btn btn-danger btn-rounded btn-lg">
                    </div>
                    <div class="text-center">
                        <a href="" class="text-decoration-none text-secondary">Imprimir voucher</a>
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
                <!-- Caja de busqueda -->
                <div class="d-flex py-2">
                    <input type="text" value="" name="bproducto" placeholder="Ingresar descripcion o codigo de producto"  class="rounded mr-2 w-100 px-2">
                    <a href="" class="btn btn-warning"><i class="fas fa-search"></i></a>
                </div>
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

<!-- Metodo de Pago -->
<!-- Modal -->
<div class="modal fade" id="metodoPago" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Metodo de Pago</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Formulario de tipo de pago -->
          <form action="" method="post">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Efectivo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  Tarjeta Devito
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  Tarjeta Credito
                </label>
            </div>
          </form>
          <!-- fin de formulario de forma de pago -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-success">Realizar cambio</button>
        </div>
      </div>
    </div>
  </div>
