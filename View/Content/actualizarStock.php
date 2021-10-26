<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <!-- Alerta de Exito -->
            <div class="alert alert-success" role="alert">
                Actualizacion Exitosa
            </div>
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 col-md-12 col-sm-12 text-center py-2">
                    <h1 class="border-botton">Actualizar Stock</h1>
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
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">1</a></td>
                                <td>LT001</td>
                                <td>Producto Seleccionado</td>
                                <td>
                                    <?php if(isset($_POST["btneditar"])):?>
                                    <input type="text" class="form-control" value="12" name="" maxlength="3">
                                    <?php else:?>
                                    12
                                    <?php endif;?>
                                </td>
                                <td>aceites</td>
                                <td>25/09/2021</td>
                                <td>25/09/2021</td>
                                <td>
                                    <?php if(isset($_POST["btneditar"])):?>
                                        <button type="submit" class="btn btn-warning" name="btncambios" id="btncambios">
                                            <i class="fas fa-save"></i> Guardar Cambios
                                        </button>
                                        <?php else:?>
                                            <button type="submit" class="btn btn-primary" name="btneditar" id="btneditar">
                                                <i class="fas fa-pen-square"></i> Actualizar Stock
                                            </button>
                                    <?php endif;?>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">2</a></td>
                                <td>LT001</td>
                                <td>Producto Seleccionado</td>
                                <td>
                                    <input type="text" class="form-control" value="12" name="" maxlength="3">
                                    12
                                </td>
                                <td>aceites</td>
                                <td>25/09/2021</td>
                                <td>25/09/2021</td>
                                <td>
                                    <button type="submit" class="btn btn-warning" name="btncambios" id="btncambios">
                                        <i class="fas fa-save"></i> Guardar Cambios
                                    </button>
                                    <button type="submit" class="btn btn-primary" name="btneditar" id="btneditar">
                                        <i class="fas fa-pen-square"></i> Actualizar Stock
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">3</a></td>
                                <td>LT001</td>
                                <td>Producto Seleccionado</td>
                                <td>
                                    <input type="text" class="form-control" value="12" name="" maxlength="3">
                                    12
                                </td>
                                <td>aceites</td>
                                <td>25/09/2021</td>
                                <td>25/09/2021</td>
                                <td>
                                    <button type="submit" class="btn btn-warning" name="btncambios" id="btncambios">
                                        <i class="fas fa-save"></i> Guardar Cambios
                                    </button>
                                    <button type="submit" class="btn btn-primary" name="btneditar" id="btneditar">
                                        <i class="fas fa-pen-square"></i> Actualizar Stock
                                    </button>
                                </td>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">4</a></td>
                                <td>LT001</td>
                                <td>Producto Seleccionado</td>
                                <td>
                                    <input type="text" class="form-control" value="12" name="" maxlength="3">
                                    12
                                </td>
                                <td>aceites</td>
                                <td>25/09/2021</td>
                                <td>25/09/2021</td>
                                <td>
                                    <button type="submit" class="btn btn-warning" name="btncambios" id="btncambios">
                                        <i class="fas fa-save"></i> Guardar Cambios
                                    </button>
                                    <button type="submit" class="btn btn-primary" name="btneditar" id="btneditar">
                                        <i class="fas fa-pen-square"></i> Actualizar Stock
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
