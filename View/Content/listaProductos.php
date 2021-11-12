<?php 
    if(isset($_POST['buscar']) && !empty($_POST['buscar'])){
        $listar = AlmacenController::listarProductos();
    }else{
        $listar = AlmacenController::listarProductos();
    }
    
    $categorias = AlmacenController::listaCategorias();

    if(isset($_POST['lote']) && !empty($_POST['lote'])){
        $registro = AlmacenController::registroProductos();
        if($registro == 'ok'){
            echo '
            <div class="alert alert-success" role="alert">
                Registro Exitoso
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
                <div class="col-lg-12 col-md-12 col-sm-12 text-center py-2">
                    <h1 class="border-botton">Lista de Productos</h1>
                </div>
                <!-- Body content -->
                <div class="col-lg-12 col-md-12 col-sm-12 pb-2">
                    <form action="" method="post">
                        <!-- Busqueda de producto -->
                        <div class="row border py-2">
                            <div class="col-lg col-md col-sm d-flex">
                                <input type="text" class="form-control m-2" name="buscar" value="" placeholder="Ingresar codigo de Productoa buscar" onclick="submit">
                                <!-- boton de buscar -->
                                <button type="submit" class="btn btn-success p-2">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <div class="text-center p-2">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registroProducto">
                                    <i class="fas fa-pen-square"></i> Registrar Productos
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
                                <th>Marca</th>
                                <th>Stock</th>
                                <th>Categoria</th>
                                <th>Fecha Vencimiento</th>
                                <th>Fecha Registro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  
                                $i=0; 
                                foreach($listar as $lista => $value):
                                $i++;
                            ?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$value['lote']?></td>
                                <td><?=$value['nombre_producto']?></td>
                                <td><?=$value['marca']?></td>
                                <td><?=$value['cantidad']?></td>
                                <td><?=$value['categoria']?></td>
                                <td><?=$value['fecha_vencimiento']?></td>
                                <td><?=$value['fecha_registro']?></td>
                            </tr> 
                            <?php endforeach; ?>                                  
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </form>
</section>

<!-- Modal registro Producto -->
<form action="" method="post">
    <div class="modal fade" id="registroProducto" tabindex="-1" aria-labelledby="registroProducto" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Registro de Producto</h5>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-lg col-md col-sm">
                    <div class="form-group">
                        <label for="cliente">Lote</label>
                        <input type="text" class="form-control" id="" name="lote" value="L">
                    </div>
                </div>
                <div class="col-lg col-md col-sm">
                    <div class="form-group">
                        <label for="operacion">Descripcin</label>
                        <input type="text" class="form-control" id="" value="" name="producto">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg col-md col-sm">
                    <div class="form-group">
                        <label for="fecha">Marca</label>
                        <input type="text" class="form-control" id="" value="" name="marca">
                    </div>
                </div>
                <div class="col-lg col-md col-sm">
                    <div class="form-group">
                        <label for="fecha">Cantidad</label>
                        <input type="text" class="form-control" id="" value="" name="cantidad">
                    </div>
                </div>
                <div class="col-lg col-md col-sm">
                    <div class="form-group">
                        <label for="caja">Precio</label>
                        <input type="text" class="form-control" id="" value="" name="precio">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg col-md col-sm">
                    <div class="form-group">
                        <label for="local">Categoria</label>
                        <select name="categoria" id="" value="" class="form-control">
                            <option value="">Seleccionar</option>
                                <?php foreach($categorias as $key => $cat): ?>
                            <option value="<?=$cat['id']?>"><?=$cat['nombre_categoria']?></option>
                                <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg col-md col-sm">
                    <div class="form-group">
                        <label for="caja">Vencimiento</label>
                        <input type="date" class="form-control" id="" value="" name="fecha">
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success" name="nuevoProducto">Registrar Producto</button>
        </div>
        </div>
    </div>
    </div>
</form>