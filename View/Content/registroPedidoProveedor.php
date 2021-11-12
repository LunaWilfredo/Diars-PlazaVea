<?php
    if(isset($_POST['btnregistrar']) && !empty($_POST['producto'])){
        $registro = ProveedorController::productosRequest();
    }

    $listar = ProveedorController::listaProductosRequest();

    if(isset($_POST['pedido']) && !empty($_GET['ip'])){
        $request = ProveedorController::guardarRequest();
        if($request == 'ok'){
            echo '<script>
                     if(window.history.replaceState){
                          window.history.repaceState(null,null,window.location.href);
                      }
                </script>';
              echo "
              <script>
                  setTimeout(function(){
                      window.location = 'body.php?pagina=pedidosProveedor';
                  },1000);
             </script>
              ";  
        }
    }
    

?>
<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="mx-5 px-5 py-2">
                        <h1 class="border-botton">Generar Request - Productos</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row my-2">
                        <!-- Registrar Productos -->
                        <div class="col-lg col-md col-sm">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registrarProductos">
                                <i class="fas fa-vote-yea"></i> Añadir Producto
                            </button>
                        </div>
                        <div class="col-lg col-md col-sm d-flex justify-content-end">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#registroPedido">
                                <i class="fas fa-save"></i> Guardar Pedido
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-lg col-md col-sm  text-center">
                    <table class="table" id="dataTable" cellspacing="0">
                        <thead class="text-center bg-danger text-light">
                            <tr>
                                <th>N°</th>
                                <th>Producto</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Observaciones</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; foreach ($listar as $listar): $i++;?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$listar['descripcion_p']?></td>
                                <td><?=$listar['marca_p']?></td>
                                <td><?=$listar['cantidad_p']?></td>
                                <td><?=$listar['observaciones']?></td>
                                <td>
                                    <a href="body.php?pagina=registroPedidoProveedor&ip=1&dlt=<?=$listar['id']?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    <!-- <a href="" class="btn btn-primary"><i class="far fa-edit"></i></i></a> -->
                                </td>
                            </tr>   
                            <?php endforeach; ?>                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</section>


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
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoproducto">Marca</label>
                            <input type="text" class="form-control text-center" name="marca_producto" value="">
                        </div>
                        <div class="col-md">
                            <label for="codigoproducto">Cantidad</label>
                            <input type="text" class="form-control text-center" name="cantidad_p" value="">
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoproducto">Observaciones</label>
                            <textarea name="observaciones_p" id="" cols="10" rows="3" class="form-control"></textarea>
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

<!-- Modal confirmacion de pedido y envio -->
<div class="modal fade" id="registroPedido" tabindex="-1" aria-labelledby="registroPedido" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Guardar Request</h5>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoproducto">Correo</label>
                            <input type="text" class="form-control text-center" name="correop" value="">
                        </div>
                    </div>    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success" name="pedido" >Realizar Pedido</button>
                </div>
            </form>
        </div>
    </div>
</div>