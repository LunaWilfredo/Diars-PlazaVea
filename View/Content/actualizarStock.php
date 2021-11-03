<?php
if(isset($_POST['buscar']) && $_POST['buscar'] != NULL){
    $listar = AlmacenController::listarProductos();
}else{
    $listar = AlmacenController::listarProductos();
}
// $listar = AlmacenController::listarProductos();

if(isset($_POST['cantidad']) && $_POST['cantidad'] != NULL){
    $cantidad = $_POST['cantidad'];
    $update = AlmacenController::actualizarStock($_GET['id'],$cantidad);
    // <!-- Alerta de Exito -->
    if($update == 'ok'){
        echo '
        <div class="alert alert-success" role="alert">
        Actualizacion Exitosa
        </div>
        ';
    }
}
          

?>
<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 col-md-12 col-sm-12 text-center py-2 px-5">
                    <h1 class="border-botton">Actualizar Stock</h1>
                </div>
                <!-- Body content -->
                <div class="col-lg-12 col-md-12 col-sm-12 pb-2">
                    <!-- Registrar Productos -->
                    <form action="" method="post">
                        <div class="row border py-2">
                            <div class="col-lg col-md col-sm d-flex">
                                <input type="text" class="form-control m-2" name="buscar" value="" placeholder="Ingresar codigo de Producto,stock o fecha">
                                <button type="button" class="btn btn-success p-2">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg col-md col-sm text-center">
                    <table class="table" id="dataTable" width="100%"cellspacing="0">
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
                            <?php $i=0; foreach($listar as $key => $mod): $i++; ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$mod['lote']?></td>
                                <td><?=$mod['nombre_producto']?></td>
                                <?php if(isset($_GET["id"])&& $_GET["id"] == $mod['id']):?>
                                    <td><input type="text" class="form-control" value="" name="cantidad" maxlength="3" placeholder="Ingresar cantidad a añadir"></td>
                                <?php else:?>
                                    <td><?=$mod['cantidad']?></td>
                                <?php endif;?>
                                <td><?=$mod['categoria']?></td>
                                <td><?=$mod['fecha_registro']?></td>
                                <td><?=$mod['fecha_vencimiento']?></td>
                                <td>
                                    
                                <?php if(isset($_GET["id"]) && $_GET["id"] == $mod['id']):?>
                                    <button type="submit" class="btn btn-warning" name="btncambios" id="btncambios">
                                        <i class="fas fa-save"></i> Guardar
                                    </button>
                                    <a href="body.php?pagina=actualizarStock" class="btn btn-danger"><i class="fas fa-window-close"></i></i>Cancelar</a>
                                <?php else :?>
                                    <a href="body.php?pagina=actualizarStock&id=<?=$mod['id']?>" class="btn btn-primary"><i class="fas fa-pen-square"></i> Editar Stock</a>
                                <?php endif;?>
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
