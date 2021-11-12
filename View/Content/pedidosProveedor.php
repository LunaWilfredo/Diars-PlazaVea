<?php 

if(isset($_POST['generar'])){
    $generar  = ProveedorController::generarRequest();
    echo '<div class="alert alert-success" role="alert">
            <i class="fas fa-check-circle"></i> Request realizada con exito.
        </div>';
}
$lista = ProveedorController::listaRequest();


?>
<section class="">
    <form action="" method="post">
        <div class="container-fluid" style="height:700px ; width:85.5vw;" >
            <div class="row" >
                <!-- Title -->
                <div class="col-lg-12 text-center">
                    <div class="py-2">
                        <h1 class="border-botton">Generar Request</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-12">
                    <div class="row d-flex mb-2">
                        <div class="col-lg p-3">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registrarRequest">
                                <i class="fas fa-shopping-cart"></i> Nuevo Pedido
                            </button>

                            <!-- <a href="body.php?pagina=registroPedidoProveedor" class="text-decoration-none text-light btn btn-secondary"> <i class="fas fa-shopping-cart"></i> Nuevo Pedido</a> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg col-md col-sm  text-center">
                            <table class="table" id="dataTable" cellspacing="0">
                                <thead class="text-center bg-danger text-light">
                                    <tr>
                                        <th>N°</th>
                                        <th>Codigo Request</th>
                                        <th>Proveedor</th>
                                        <th>Fecha de Pedido</th>
                                        <th>Estado Pedido</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=0; foreach ($lista as $lista ): $i++; ?>
                                    <tr>
                                        <td><?=$i?></td>
                                        <td><?=$lista['codigo_rq']?></td>
                                        <td><?=$lista['proveedor']?></td>
                                        <td><?=$lista['fecha_rq']?></td>
                                        <td>
                                            <?php if($lista['estado_rq'] == 'pendiente'):?>
                                                <i class="fas fa-user-clock"></i> <?=STRTOUPPER($lista['estado_rq'])?>
                                            <?php else: ?>
                                                <i class="fas fa-clipboard-check"></i> <?=STRTOUPPER($lista['estado_rq'])?>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if($lista['estado_rq'] == 'pendiente'):?>
                                            <!-- agregar productos -->
                                            <a href="body.php?pagina=registroPedidoProveedor&ip=<?=$lista['id']?>" class="btn btn-info"><i class="fas fa-cart-plus"></i></a>

                                            <!-- <button class="btn btn-info" name="addproductos">
                                                <i class="fas fa-cart-plus"></i>
                                            </button> -->
                                            <?php else: ?>
                                            <!-- cambiar de estado -->
                                            <a href="" class="btn btn-primary"><i class="fas fa-clipboard-check"></i></a>
                                            <!-- estado realizado -->
                                            <h2 class="h3 text-success"><i class="fas fa-check-circle"></i></h2>
                                            <!-- ver detalles de pedido -->
                                            <a href="" class="btn btn-success"><i class="fas fa-eye"></i></i></a>
                                            <!-- eliminar pedido -->
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                            <?php endif; ?>
                                        </td>
                                    </tr>    
                                    <?php endforeach; ?>                              
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

<div class="modal fade" id="registrarRequest" tabindex="-1" aria-labelledby="registrarRequest" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registro de Productos</h5>
            </div>
            <form action="" method="post">
                <div class="modal-body">
                <!-- Formulario de registro de productos -->
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoProducto">Codigo Request</label>
                            <input type="text" class="form-control text-center" name="code" value="RQ<?=rand()?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <label for="codigoProducto">Proveedor</label>
                            <input type="text" class="form-control text-center" name="proveedor" value="">
                        </div>
                    </div>
                    <!-- Fin de formulario de buesqueda de productos -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success" name="generar">Generar Pedido</button>
                </div>
            </form>
        </div>
    </div>
</div>
