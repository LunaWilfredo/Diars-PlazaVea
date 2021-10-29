<?php
    $listar = AlmacenController::listarProductos();
?>
<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 col-md-12 col-sm-12 text-center py-2">
                    <h1 class="border-botton">Consultar Estado de  Productos</h1>
                </div>
                <!-- Body content -->
                <div class="col-lg-12 col-md-12 col-sm-12 pb-2">
                    <!-- Registrar Productos -->
                    <form action="" method="post">
                        <div class="row border py-2">
                            <div class="col-lg col-md col-sm d-flex">
                                <input type="text" class="form-control m-2" name="buscarProducto" value="" placeholder="Ingresar codigo de Producto,stock o fecha">
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
                                <th>Fecha Vencimiento</th>
                                <th>Fecha Registro</th>
                                <th>Estado</th>
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = 0;
                                foreach($listar as $key => $producto):
                                    $i++;
                            ?>
                            <tr>
                                <td><a href="" class="text-dark text-decoration-none"><?=$i?></a></td>
                                <td><?=$producto['lote']?></td>
                                <td><?=$producto['nombre_producto']?></td>
                                <td><?=$producto['cantidad']?></td>
                                <td><?=$producto['categoria']?></td>
                                <td><?=$producto['fecha_vencimiento']?></td>
                                <td><?=$producto['fecha_registro']?></td>
                                <td>
                                    <?php
                                    $fecha_vencimiento = strtotime($producto['fecha_vencimiento']); 
                                    $fecha_actual = strtotime(date("d-m-Y"));

                                    if( $fecha_vencimiento <= $fecha_actual): ?>
                                        <!-- Vencido -->
                                        <div class="alert alert-danger" role="alert">
                                            Vencido
                                        </div>
                                    <?php elseif($fecha_vencimiento > $fecha_actual && $fecha_vencimiento == strtotime("+2 day",$fecha_actual)):?>
                                        <!-- Por vencer -->
                                        <div class="alert alert-warning" role="alert">
                                            Por vencer
                                        </div>
                                    <?php elseif($fecha_vencimiento > $fecha_actual):?>
                                        <!-- Buen estado -->
                                        <div class="alert alert-success" role="alert">
                                            Buen Estado
                                        </div>
                                    <?php endif;?>
                                </td>
                                <td>
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></i></a>
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
