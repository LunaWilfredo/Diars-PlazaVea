<?php
    if(isset($_POST['btnregistrar']) && !empty($_POST['producto'])){
        $productos = ProveedorController::productosCotizacion();
        if($productos == 'ok'){
            echo '<div class="alert alert-success" role="alert">
                <i class="fas fa-check-circle"></i> Request realizada con exito.
            </div>';
        }
    }

    $lista = ProveedorController::listaProductosCotizacion();

    if(isset($_POST['Guardar'])){
        echo '<script>
                     if(window.history.replaceState){
                          window.history.repaceState(null,null,window.location.href);
                      }
                </script>';
        echo "
              <script>
                  setTimeout(function(){window.location = 'body.php?pagina=generarCotizacion';},1000);
             </script>";  
    }

?>
<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="mx-5 px-5 py-2">
                        <h1 class="border-botton">Generar Cotizacion</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row my-2">
                        <!-- Registrar Productos -->
                        <div class="col-lg col-md col-sm">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrarProductos">
                                <i class="fas fa-vote-yea"></i> Registrar Producto
                            </button>
                        </div>
                        <div class="col-lg col-md col-sm d-flex justify-content-end">
                            <!-- <h6 class="m-2 text-dark">Total: <span class="text-primary">12.00</span></h6> -->
                            <button type="submit" class="btn btn-warning" name="Guardar">
                                <i class="fas fa-save"></i> Guardar Cotizacion
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md col-sm  text-center">
                    <table class="table" id="dataTable" cellspacing="0">
                        <thead class="text-center bg-danger text-light">
                            <tr>
                                <th>#</th>
                                <th>Producto</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Precio de Venta</th>
                                <th>Observaciones</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; foreach ($lista as $lista): $i++;?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$lista['producto_c']?></td>
                                <td><?=$lista['marca_c']?></td>
                                <td><?=$lista['cantidad_c']?></td>
                                <td><?=$lista['precio_c'].'.00'?></td>
                                <td><?=$lista['observaciones']?></td>
                                <td>
                                    <a href="body.php?pagina=registroCotizaciones&ic=1&dlt=<?=$lista['id']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    <!-- <a href="" class="btn btn-primary"><i class="far fa-edit"></i></i></a> -->
                                </td>
                            </tr>  
                            <?php endforeach;?>                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</section>


<!-- Modals -->
<!-- Modal registro de productos -->
<div class="modal fade" id="registrarProductos" tabindex="-1" aria-labelledby="registrarProductos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de Productos</h5>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoProducto">Producto</label>
                                <input type="text" class="form-control text-center" name="producto" value="">
                        </div>
                        <div class="col-md">
                            <label for="codigoproducto">Marca</label>
                            <input type="text" class="form-control text-center" name="marca" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoproducto">Cantidad</label>
                            <input type="text" class="form-control text-center" name="cantidad" value="">
                        </div>
                        <div class="col-md">
                            <label for="codigoproducto">Precio de venta</label>
                            <input type="text" class="form-control text-center" name="precio_v" value="">
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoproducto">Observaciones</label>
                            <textarea name="observaciones" id="" cols="10" rows="3" class="form-control"></textarea>
                        </div>
                    </div>            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success" name="btnregistrar">Añadir</button>
                </div>
            </form>
        </div>
    </div>
</div>