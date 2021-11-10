<?php
    if(isset($_POST['buscar']) && !empty($_POST['buscar_producto'])){
        $lista = AlmacenController::buscarProducto();
    }

    if(isset($_POST['add']) && !empty($_POST['producto_id'])){
        $retiro = AlmacenController::retiroAlmacen();
        echo 'btn presioando '.$_POST['producto_id'].$_POST['cantidad_r'];
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
                                            <input type="text" name="producto_id" class="form-control" value="<?=$lista['id']?>">
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
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none">1</a></td>
                                <td>COD0001</td>
                                <td>Producto Seleccionado</td>
                                <td>20</td>
                                <td>Aceites</td>
                                <td><?= date("d-M-Y")?></td>
                                <td><?=$_SESSION['usuario']?></td>
                                <td>Pendiente</td>
                                <td>
                                    <a href="" class="btn btn-success"><i class="fas fa-clipboard-check"></i></a>
                                    <!-- <a href="" class="btn btn-primary"><i class="far fa-edit"></i></a> -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>
</section>

