<?php
    if(isset($_POST['btnregistrar']) && !empty($_POST['producto'])){
        $registro = ProveedorController::productosRequest();
        if($registro == 'ok'){
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
                                <th>#</th>
                                <th>Producto</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Observaciones</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Producto Seleccionado</td>
                                <td>Marca</td>
                                <td>4</td>
                                <td>Observaciones</td>
                                <td>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                    <!-- <a href="" class="btn btn-primary"><i class="far fa-edit"></i></i></a> -->
                                </td>
                            </tr>                                   
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
          <h5 class="modal-title" id="exampleModalLabel">Registro de Productos</h5>
        </div>
        <div class="modal-body">
          <!-- Formulario de registro de productos -->
            <form action="" method="post">
                <div class="row">
                    <div class="col-md">
                        <label for="codigoProducto">Proveedor</label>
                        <input type="text" class="form-control text-center" name="" value="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md">
                        <label for="codigoproducto">Correo</label>
                        <input type="text" class="form-control text-center" name="" value="">
                    </div>
                </div>    
                <div class="row">
                    <div class="col-md">
                        <label for="codigoproducto">Fecha Pedido</label>
                        <input type="text" class="form-control" value="<?php echo date("d/M/Y")?>" readonly>
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md">
                        <label for="codigoproducto">Observaciones</label>
                        <textarea name="" id="" cols="10" rows="3" class="form-control"></textarea>
                    </div>
                </div>            
            </form>
          <!-- Fin de formulario de buesqueda de productos -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-success">Realizar Pedido</button>
        </div>
      </div>
    </div>
</div>