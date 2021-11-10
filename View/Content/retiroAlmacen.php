<?php
    if(isset($_POST['buscar']) && !empty($_POST['buscar_producto'])){
        $lista = AlmacenController::buscarProducto();
    }

    if(isset($_POST['add']) && !empty($_POST['producto_id'])){
        $retiro = AlmacenController::solicitarProductos();
        if($retiro == 'ok'){
            $id = $_POST['producto_id'];
            $cantidad = $_POST['cantidad_r'];
            $stock = AlmacenController::actualizarStockRetiro($id,$cantidad);
        }
    }

    $solicitado = AlmacenController::listaProductoSolicitado();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $estado = AlmacenController::actualizarEstado();
        if($estado == 'ok'){
            echo '<script>
                    if(window.history.replaceState){
                        window.history.repaceState(null,null,window.location.href);
                    }
                </script>';
            echo "
            <script>
                setTimeout(function(){
                    window.location = 'body.php?pagina=retiroAlmacen';
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
                <div class="col-lg-12 text-center">
                    <div class="py-2">
                        <h1 class="border-botton">Solicitar Productos</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-12">
                    <!-- Registrar Productos -->
                    <div class="row">
                        <div class="col-lg d-flex justify-content-start">
                            <input type="text" class="form-control text-center" name="buscar_producto" value="" placeholder="Codigo de Producto, nombre ">
                            <button type="submit" class="btn btn-success" name="buscar">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <?php if(isset($_POST['buscar']) && !empty($_POST['buscar_producto'])):?>
                    <div class="row">
                        <div class="col-lg  text-center mt-2">
                            <table class="table" id="dataTable" width="100%" cellspacing="0">
                                <thead class="text-center bg-danger text-light">
                                    <tr>
                                        <th>#</th>
                                        <th>Cod. Producto</th>
                                        <th>Producto</th>
                                        <th>Cantidad Retiro</th>
                                        <th>Categoria</th>
                                        <th>Accion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; foreach($lista as $lista): $i++;?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td>
                                            <?=$lista['lote']?>
                                            <input type="text" name="producto_id" class="form-control" value="<?=$lista['idpro']?>">
                                        </td>
                                            
                                        <td><?=$lista['nombre_producto']?></td>
                                        <td>
                                            <input type="text" name="cantidad_r" class="form-control">
                                        </td>
                                        <td><?=$lista['nombre_categoria']?></td>
                                        <td>
                                            <button type="submit" name="add" class="btn btn-danger">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php endif;?>
                </div>

                <div class="col-lg  text-center mt-2">
                    <p class="font-weight-bold">Lista de Productos Solicitados</p>
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center bg-danger text-light">
                            <tr>
                                <th>#</th>
                                <th>Cod. Producto</th>
                                <th>Producto</th>
                                <th>Cantidad Retiro</th>
                                <th>Categoria</th>
                                <th>Fecha Retiro</th>
                                <th>Encargado</th>
                                <th>Estado</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=0; foreach ($solicitado as $solicitado): $i++;?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$solicitado['lote']?></td>
                                <td><?=$solicitado['nombre_producto']?></td>
                                <td><?=$solicitado['cantidad_r']?></td>
                                <td><?=$solicitado['nombre_categoria']?></td>
                                <td><?=$solicitado['fecha_retiro']?></td>
                                <td><?=$solicitado['usuario_e']?></td>
                                <td><?=$solicitado['estado_r']?></td>
                                <?php if($solicitado['estado_r'] == 'PENDIENTE'): ?>
                                <td>
                                    <a href="body.php?pagina=retiroAlmacen&id=<?=$solicitado['idabastecimiento']?>" class="btn btn-success"><i class="fas fa-clipboard-check"></i></a>
                                </td>
                                <?php else: ?>
                                    <td><i class="fas fa-check-circle text-success"></i></td>
                                <?php endif; ?>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</section>

