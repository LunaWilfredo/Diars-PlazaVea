<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 col-md-12 col-ms-12 text-center">
                    <div class="py-2">
                        <h1 class="border-botton">Generar Exchange</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-12 col-md-12 col-sm-12 py-2">
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#terminosModal">
                        Ejecutar
                    </button>
                    <a href="" class="text-secondary">Imprimir Exchange</a>
                </div>

                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-lg col-md col-sm">
                            <form action="" method="post">
                                <label for="comprobante">N° Comprobante</label>
                                <input type="text" class="form-control text-center" name="" value="" placeholder="COMP00000">
                                <label for="codigoproducto">Correo:</label>
                                <input type="text" class="form-control text-center" name="" value="" placeholder="correo@mail.com">
                            </form>
                        </div> 
                        <div class="col-lg col-md col-sm">
                            <label for="codigoproducto">Descripcion de Compra:</label>
                            <ol class="text-primary">
                                <li class="lead">Aceite SAO</li>
                                <li class="lead">Leche Gloria</li>
                            </ol>
                        </div>
                    </div>                   
                </div>

                <div class="col-lg col-md col-sm text-center mt-2">
                    <p class="font-weight-bold">Productos de Cambio</p>
                    <div class="col-sm col-md col-lg mb-2">
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

                    <form action="" method="post">
                        <table class="table" id="dataTable" width="100%" cellspacing="0">
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
                                    <td><a href="" class="text-dark text-decoration-none">1</a></td>
                                    <td>000001</td>
                                    <td>Producto Seleccionado</td>
                                    <td>2</td>
                                    <td>aceites</td>
                                    <td>
                                        <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                        <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="" class="text-dark text-decoration-none">1</a></td>
                                    <td>000001</td>
                                    <td>Producto Seleccionado</td>
                                    <td>2</td>
                                    <td>aceites</td>
                                    <td>
                                        <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                        <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="" class="text-dark text-decoration-none">1</a></td>
                                    <td>000001</td>
                                    <td>Producto Seleccionado</td>
                                    <td>2</td>
                                    <td>aceites</td>
                                    <td>
                                        <a href="" class="btn btn-danger"><i class="far fa-minus-square"></i></a>
                                        <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="" class="text-dark text-decoration-none">1</a></td>
                                    <td>000001</td>
                                    <td>Producto Seleccionado</td>
                                    <td>2</td>
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
        </div>
    </form>
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

<!-- Modal Busqueda de productos -->
<div class="modal fade" id="ListaProductos" tabindex="-1" aria-labelledby="ListaProductos" aria-hidden="true">
    <div class="modal-dialog modal-lg">
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
                                    <th>Descripcion Producto</th>
                                    <th>Cantidad</th>
                                    <th>Añadir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>0001</td>
                                    <td>Arroz costeño</td>
                                    <td>
                                        <input type="text" class="form-control" name="" value="1" maxlength="3" minlength="1">
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-danger btn-sm">
                                            <i class="fas fa-plus"></i>
                                        </button>
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