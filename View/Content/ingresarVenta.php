<?php 

    $cajero = LoginController::usuarioLogin($_SESSION['usuario']);
    $metodo = PagosCajaController::metodos_pago();
    $local = PagosCajaController::local();

    $venta = PagosCajaController :: listaVentas();
    foreach($venta as $idVenta){
        $idSecret = $idVenta['id'];
    }
      
    if(isset($_POST['buscar']) && !empty($_POST['buscar'])){
        $producto = PagosCajaController::buscarProducto();
    }else{
        $producto = PagosCajaController::buscarProducto();
    }

    if(isset($_POST['agregar'])){
        // $pdt =$_POST['producto']; 
        // $cantidad=$_POST['cantidad'];
        // $vta=$_POST['idventa'];
        $registro = PagosCajaController::registroDetalleVenta();
        if($registro == 'ok'){
            echo "<div class='alert alert-success'>Producto Registrado</div>";
        }
    }
    if(!empty($idSecret)){
        $detalle = PagosCajaController::listaDetalleVenta($idSecret);
        $subtotal = PagosCajaController::subtotal($idSecret);
        $total = PagosCajaController::total($idSecret);
    }

    if(isset($_GET['dlt']) && !empty($_GET['dlt'])){
        $delete = PagosCajaController::eliminarProductoDetalleVenta();
    }

    if(isset($_POST['btn-operaciones'])){
        $orden = PagosCajaController::ordenDetalleVenta();
        $mail = MailController::mailBoletaventa();
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
                            <input type="hidden" value="<?=$idVenta['id']?>" class="form-control" name="idventa" id="idventa">
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
                                    <?php foreach($producto as $key => $pro):?>
                                    <tr>
                                        <td>
                                            <?=$pro['lote']?>
                                            <input type="text" value="<?=$pro['id']?>" name='producto'>
                                        </td>
                                        <td><?=$pro['nombre_producto']?> <?=$pro['marca']?></td>
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
                        <?php 
                        foreach($detalle as $key => $det):             
                        ?>
                            <tr>
                                <td><?=$det['lote']?></td>
                                <td><?=$det['producto']?> <?=$det['marca']?></td>
                                <td><?=$det['cantidad']?></td>
                                <td><?=$det['precio']?></td>
                                <td><a href="body.php?pagina=ingresarVenta&dlt=<?=$det['idpv']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-lg-12 col-md col-sm mb-5">
                    <div class="row">
                        <!-- Monto de Pago -->
                        <div class="col-lg col-md col-sm-12">
                        <?php foreach($subtotal as $key => $sub):?>
                            <h5 class="text-dark">SubTotal (s/.): <span class="lead"><?=$sub['subtotal'].'.00' ?></span></h5>
                        <?php endforeach;?>
                            <h5 class="text-dark">IGV (s/.): <span class="lead">0.18</span></h5>
                        </div>
                        <div class="col-lg col-md col-sm-12">
                        <?php foreach($total as $key => $total):?>
                            <h2 class="text-left text-dark">Total (s/.):</h2>
                            <h1 class="text-left text-primary"><?=$total['total']?></h1>
                        <?php endforeach;?>
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
<!-- Modal  venta -->
<form action="" method="POST">
<div class="modal fade" id="datosVenta" tabindex="-1" aria-labelledby="datosVenta" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="refund">Detalle de Venta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg col-md col-sm">
                    <input type="text" value="<?=$idVenta['id']?>" class="form-control" name="idventa" id="idventa">
                        <div class="form-group">
                            <label for="cliente">Cliente</label>
                            <input type="text" class="form-control" id="cliente" name="cliente" placeholder="DNI Cliente" required>
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="fecha">Fecha</label>
                            <input type="text" class="form-control" id="fecha" value="<?= date('d/m/Y') ?>" name="fecha" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="local">Local</label>
                            <?php foreach($local as $local):?>
                            <input type="text" class="form-control" value="<?=$local['nombre_local']?>" readonly>
                            <input type="text" class="form-control" id="local" value="<?=$local['id']?>" name="local">
                            <?php endforeach;?>
                        </div>
                    </div>
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="cajero">Cajero</label>
                            <?php foreach($cajero as $key => $cajero):?>
                            <input type="text" class="form-control" value="CJ<?=$cajero['username']?>" readonly>  
                            <input type="text" class="form-control" id="cajero" value="<?=$cajero['id']?>" name="cajero" readonly>
                            <?php endforeach;?> 
                        </div>
                    </div>
                </div>

                <div class="row border p-2 mb-2">
                    <!-- Monto de Pago -->
                    <div class="col-lg col-md col-sm">
                        <?php foreach($subtotal as $key => $sub):?>
                            <h6 class="text-dark">SubTotal(s/.):</h6>
                            <h6 class=""><?=$sub['subtotal'].'.00' ?></h6>

                            <input type="text" value="<?=$sub['subtotal']?>" name="subtotal" class="form-control">
                        <?php endforeach;?>    
                    </div>
                    <div class="col-lg col-md col-sm">
                        <h6 class="text-dark">IGV (s/.):</h6>
                        <h6 class="">0.18</h6>
                        <input type="text" value="0.18" name="igv" class="form-control">
                    </div>
                    <div class="col-lg col-md col-sm">
                        <h6 class="text-dark">Total (s/.):</h6>
                        <h5 class="text-primary"><?=$total['total']?></h5>
                        <input type="text" value="<?=$total['total']?>" name="total" class="form-control">
                    </div>
                </div>

                <div class="row">
                    <!-- Metodo de Pago-->
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="metodopago">Metodo Pago</label>
                            <select name="metodopago" id="metodopago" class="form-control" value="">
                            <?php foreach($metodo as $metodo):?>
                                <option value="<?=$metodo['id']?>"><?=$metodo['nombre_metodo']?></option>
                            <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 col-md col-sm">
                        <!-- Condicion de Tarjeta credito/debito-->
                        <div class="form-group">
                            <label for="tarjeta">N° Tarjeta</label>
                            <input type="text" class="form-control" id="tarjeta" value="192-000-1222-000" name="tarjeta">
                        </div>
                    </div>
                    <!-- Condicion de tarjeta credito cuotas -->
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="cuotas">Metodo</label>
                            <select name="metodo" id="cuotas" class="form-control" value="">
                                <option value="directo">Directo</option>
                                <option value="cuotas">Cuotas</option>
                            </select>
                        </div>
                    </div>
                    <!-- Numero de Cuotas -->
                    <div class="col-lg col-md col-sm">
                        <div class="form-group">
                            <label for="cuotas">Cuotas</label>
                            <input type="text" class="form-control" id="cuotas" value="1" name="cuotas">
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
                        <h1 class="h6 ">Correo</h1>
                        <input type="text" name="correo" class=" form-control rounded text-center w-100 mb-2" value="" placeholder="correo@gmail.com">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success" name="btn-operaciones">Enviar</button>
            </div>
        </div>
    </div>
</div>
</form>