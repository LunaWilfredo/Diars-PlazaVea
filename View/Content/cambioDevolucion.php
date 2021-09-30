<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row my-2 mb-2">
                <!-- Title -->
                <div class="col-lg-12 text-center py-4">
                    <div class="mx-5 px-5 py-2">
                        <h1 class="border-botton">Proceso de Cambio / Devolucion</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-2">
                    <!-- Title -->
                    <p class="text-center my-2">Lista de productos</p>
                    <!-- Registro de producto entregado por cliente -->
                    <div class="text-center my-2">
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#registrarProductoRecibido">
                            <i class="fas fa-barcode"></i> Registrar Producto recibido
                        </button>
                    </div>
                    <!--  -->
                    <!-- Buscar Productos de cambio-->
                    <div class="text-center my-2">
                        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#ListaProductos">
                            <i class="fas fa-search"></i> Buscar Producto de cambio
                        </button>
                    </div>
                    <!--  -->
                    <div class="text-left">
                        <p class="lead">Cliente:</p>
                        <input type="text" class="rounded text-center w-100 mb-2" placeholder="Nombre de cliente">
                        <p class="lead">Operacion: <span class="font-weight-bold">001</span></p>
                        <p class="lead">Fecha: <span class="font-weight-bold">24/09/2021</span></p>
                        <p class="lead">Local: <span class="font-weight-bold">Comas</span></p>
                        <p class="lead">Caja: <span class="font-weight-bold">007</span></p>
                        <p class="lead">Tipo de Operacion:</p>
                        <select name="" id="" value="" class="w-100 border rounded" selected>
                            <option value="">SELECCIONAR</option>
                            <option value="cambio">CAMBIO</option>
                            <option value="devolucion">DEVOLUCION</option>
                        </select>
                    </div>
                </div>

                <div class="col-lg border-left-danger text-center">
                        <p class="font-weight-bold">Productos Recibidos</p>
                        <div class="container-fluid">
                            <table class="table-responsive table" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-center bg-danger text-light">
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
                                        <td>
                                            <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                            <a href="" class="btn btn-primary"><i class="far fa-edit"></i></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">2</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>4</td>
                                        <td>12.00</td>
                                        <td>
                                            <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                            <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        </td>
                                    </tr>          
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <p class="font-weight-bold">Productos Entregados</p>
                        <div class="container-fluid">
                            <table class="table-responsive table" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-center bg-danger text-light">
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
                                        <td>
                                            <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                            <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><a href="" class="text-dark text-decoration-none">2</a></td>
                                        <td>Producto Seleccionado</td>
                                        <td>4</td>
                                        <td>12.00</td>
                                        <td>
                                            <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                            <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                        </td>
                                    </tr>
             
                                </tbody>
                            </table>
                        </div>
                </div>
                <div class="col-lg border-left-danger">
                    <!-- Motivo de cambio o devolucion -->
                    <div class="">
                        <h2 class="my-2 text-center text-dark">Descripcion de motivo</h1>
                        <textarea name="" id="" cols="80" rows="5" value="" class="border p-2" placeholder="En esta area escriba el motivo del cambio / devolucion del producto o productos registrados "></textarea>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                        <h6 class="">¿Desea Devolucion de Dinero?</h2>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                                <label class="form-check-label" for="exampleRadios1">Si</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                <label class="form-check-label" for="exampleRadios1">No</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="monto">Monto(s/.):</label>
                            <input type="text" value="" name="" class="form-control" placeholder="Monto de Devolucion">
                            <label for="monto">Metodo de Devolucion:</label>
                            <select name="" id="" value="" class="form-control" selected> 
                                <option value="">Efectivo</option>
                                <option value="">Deposito</option>
                            </select>
                            <label for="monto">Numero de Tarjeta:</label>
                            <input type="text" value="" name="" class="form-control" placeholder="Numero de Tarjeta">
                        </div>
                    </div>
                    <!-- Boton de accion -->
                    <div class="text-center mt-5">
                        
                        <button type="button" class="btn btn-danger btn-rounded btn-lg" data-toggle="modal" data-target="#confirmacion">
                            <i class="fas fa-barcode"></i> Realizar Operacion
                        </button>
                        <!-- <input type="submit" value="Realizar Operacion" class="btn btn-danger btn-rounded btn-lg"> -->
                    </div>
                    <div class="text-center">
                        <a href="" class="text-decoration-none text-secondary">Imprimir comprobante</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>


<!-- Modals -->
<!--Busqueda de productos -->
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
                <div class="d-flex py-2">
                    <input type="text" value="" name="" placeholder="Ingresar nombre o codigo de producto"  class="rounded mr-2 w-100 px-2">
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
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

<!-- Metodo de Pago -->
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

  <!-- Modal Registro de producto entregado -->
<div class="modal fade" id="registrarProductoRecibido" tabindex="-1" aria-labelledby="registrarProductoRecibido" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de Productos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Formulario de registro -->
            <form action="" method="post">
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="codigo">Codigo</label>
                            <input type="text" class="form-control" name="" placeholder="Codigo de producto">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control" placeholder="Nombre de producto" name="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="marca">Marca</label>
                            <input type="text" class="form-control" name="" placeholder="Marca de producto">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="descripcion">Precio(s/.)</label>
                            <input type="text" class="form-control" placeholder="Precio de producto" name="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="marca">Categoria</label>
                            <select name="" id="" value="" class="form-control" selected>
                                <option value="">Categoria 1</option>
                            </select>
                        </div>
                    </div>             
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success">Registrar</button>
                </div>
            </form>  
            <!-- Fin de formulario de buesqueda de productos -->
        </div>
    </div>
</div>

<!-- Modal confirmacion de proceso -->
<div class="modal fade" id="confirmacion" tabindex="-1" aria-labelledby="confirmacion" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmacion de Proceso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- Formulario de registro -->
            <form action="" method="post">
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="text-center">
                            <h1 class="h6 ">¿Desea Realizar $TipoOperacion?</h1>
                            <button type="button" class="btn btn-danger btn-lg" data-dismiss="modal">No</button>
                            <button type="button" class="btn btn-success btn-lg">Si</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="">Nota: Este mensaje es para confirmacion el proceso a realizar</p>
                </div>
            </form>  
            <!-- Fin de formulario de buesqueda de productos -->
        </div>
    </div>
</div>