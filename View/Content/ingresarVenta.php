<?php 

    $venta = PagosCajaController :: listaVentas();
    foreach($venta as $idVenta){
        echo $idVenta['id'];
    }
      

     if(isset($_POST['buscar']) && !empty($_POST['buscar'])){
         $producto = PagosCajaController::buscarProducto();
     }else{
        $producto = PagosCajaController::buscarProducto();
     }
     if(isset($_POST['agregar'])){
        $pdt =$_POST['producto']; 
        $cantidad=$_POST['cantidad'];
        $vta=$idVenta['id'];
        $registro = PagosCajaController::detalleVenta();
        echo $pdt;
        echo $cantidad;
        echo $vta;
     }

?>
<section class="">
    <form action="" method="post">
        <div class="container-fluid" style="vh:100%">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 col-md col-sm text-center">
                    <h1 class="border-botton">Insertar Venta</h1>
                </div>
                <!-- Body content -->
                <div class="col-lg-12 col-md col-sm mb-2">
                    <!-- registrar Productos -->
                    <div class="row">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Codigo Producto</span>
                            </div>
                            <input type="text" aria-label="First name" class="form-control" name="buscar">
                            <input type="submit" aria-label="First name" class="btn btn-warning" value="Buscar">
                        </div>
                
                        <!-- </div> -->
                        <div class="table text-center">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-center bg-secondary text-light">
                                    <tr>
                                        <th>Codigo</th>
                                        <th>Descripcion Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                        <th>Añadir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <?php 
                                    foreach($producto as $key => $pro):?>
                                    <tr>
                                        <td>
                                            <?=$pro['lote']?>
                                            <input type="text" value="<?=$pro['id']?>" name='producto'>
                                        </td>
                                        <td><?=$pro['nombre_producto']?></td>
                                        <td>
                                            <input type="text" class="form-control" name="cantidad" value="1" maxlength="3" minlength="1">
                                        </td>
                                        <td><?=$pro['precio']?></td>
                                        <td class="text-center">
                                            <button type="submit" class="btn btn-danger btn-sm" name="agregar">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </td>
                                    </tr> 
                                    <?php endforeach; ?>  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-12 col-md col-sm text-center mb-2">
                    <label for="">Productos Seleccionados</label>
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center bg-danger text-light rounded">
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
                                <td><a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="col-lg-12 col-md col-sm mb-5">
                    <div class="row">
                        <!-- Monto de Pago -->
                        <div class="col-lg col-md col-sm-12">
                            <h5 class="text-dark">SubTotal (s/.): <span class="lead">12.00</span></h5>
                            <h5 class="text-dark">IGV (s/.): <span class="lead">0.18</span></h5>
                        </div>
                        <div class="col-lg col-md col-sm-12">
                            <h2 class="text-left text-dark">Total (s/.):</h2>
                            <h1 class="text-left text-primary">12.00</h1>
                        </div>
                    </div>
                    <!-- Metodo de Pago -->
                    <div class="border text-center p-2">
                        <!-- Boton de accion -->
                        <div class="text-center">
                            <!-- <input type="submit" value="Continuar Venta" class="btn btn-danger btn-md btn-rounded "> -->
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#datosVenta">
                                    Continuar Venta
                            </button>
                        </div>
                        <!-- <div class="text-center">
                            <a href="#!" class="text-decoration-none text-secondary">Imprimir voucher</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>


<!-- Modals -->
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
                        <!-- <div class="col-sm col-md col-lg"> -->
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Codigo Producto</span>
                        </div>
                        <input type="text" aria-label="First name" class="form-control" name="buscar">
                        <input type="submit" aria-label="First name" class="btn btn-warning" value="buscar">
                    </div>
                
                        <!-- </div> -->
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
                                <?php 
                                foreach($producto as $key => $pro):?>
                                <tr>
                                    <td><?=$pro['id']?></td>
                                    <td><?=$pro['nombre_producto']?></td>
                                    <td>
                                        <input type="text" class="form-control" name="cantidad" value="1" maxlength="3" minlength="1">
                                    </td>
                                    <td class="text-center">
                                        <button class="btn btn-danger btn-sm" type="">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </td>
                                </tr> 
                                <?php endforeach; ?>  
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


<!-- Modal  venta -->
<div class="modal fade" id="datosVenta" tabindex="-1" aria-labelledby="datosVenta" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="refund">Detalles</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="cliente">Cliente</label>
                            <input type="text" class="form-control" id="cliente" name="" placeholder="DNI Cliente">
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="operacion">N° Operacion</label>
                            <input type="text" class="form-control" id="operacion" value="OP00001" name="" readonly>
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="text" class="form-control" id="fecha" value="<?= date('d/m/Y') ?>" name="" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="local">Local</label>
                            <input type="text" class="form-control" id="local" value="Comas" name="" readonly>
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="caja">Cajero</label>
                            <input type="text" class="form-control" id="caja" value="CJ01" name="" readonly>
                        </div>
                    </div>
                </div>

                <div class="row border p-2 mb-2">
                    <!-- Monto de Pago -->
                    <div class="col-lg col-md col-sm">
                        <h6 class="text-dark">SubTotal(s/.):</h6>
                        <h6 class="">12.00</h6>
                    </div>
                    <div class="col-lg col-md col-sm">
                        <h6 class="text-dark">IGV (s/.):</h6>
                        <h6 class="">0.18</h6>
                    </div>
                    <div class="col-lg col-md col-sm">
                        <h6 class="text-dark">Total (s/.):</h6>
                        <h5 class="text-primary">12.00</h5>
                    </div>
                </div>

                <div class="row">
                    <!-- Metodo de Pago-->
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="metodopago">Metodo Pago</label>
                            <select name="" id="metodopago" class="form-control" value="">
                                <option value="">Efectivo</option>
                                <option value="">Tarjeta Debito</option>
                                <option value="">Tarjeta Credito</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md col-sm">
                        <!-- Condicion de Tarjeta credito/debito-->
                        <div class="form-group">
                            <label for="tarjeta">N° Tarjeta</label>
                            <input type="text" class="form-control" id="tarjeta" value="192-000-1222-000" name="">
                        </div>
                    </div>
                    <!-- Condicion de tarjeta credito cuotas -->
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="cuotas">Metodo</label>
                            <select name="" id="cuotas" class="form-control" value="">
                                <option value="">Directo</option>
                                <option value="">Cuotas</option>
                            </select>
                        </div>
                    </div>
                    <!-- Numero de Cuotas -->
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="cuotas">Cuotas</label>
                            <input type="text" class="form-control" id="cuotas" value="1" name="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#confirmacionVenta">Generar Comprobante de Pago</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirmacion venta -->
<div class="modal fade" id="confirmacionVenta" tabindex="-1" aria-labelledby="confirmacionVenta" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="refund">Impresion de Comprobante de Pago</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md col-sm text-center">
                        <h1 class="h6 ">N° Operacion</h1>
                        <input type="text" name="" class=" form-control rounded text-center w-100 mb-2" value="ORD0001" readonly>
                    </div>
                    <div class="col-md col-sm text-center">
                        <h1 class="h6 ">Correo</h1>
                        <input type="text" name="" class=" form-control rounded text-center w-100 mb-2" value="" placeholder="correo@gmail.com">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Enviar</button>
            </div>
        </div>
    </div>
</div>
