<?php 

    if(isset($_POST['buscar']) && $_POST['buscar'] != NULL){
        $lista = CambioDevolucionController::buscarProductoPasillo();
    }else{
        $lista = CambioDevolucionController::listarProductosPasillos();
    }
 
?>
<section class="">
    <form action="" method="post">
        <div class="container-fluid">
            <div class="row my-2 mb-2">
                <!-- Title -->
                <div class="col-lg-12 text-center py-4">
                    <div class="mx-5 px-5 py-2">
                        <h1 class="border-botton">Buscar Productos</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg-12 border px-2 pt-2 text-center">
                    <!-- Buscar Productos -->
                    <form action="" method="post">
                        <div class="form">
                            <div class="row">
                                <div class="col-md-2 py-2">
                                    <label for="codigoproducto">Descripcion de Producto</label>
                                </div>
                                <div class="col-md-9">
                                    <input type="text" class="form-control text-center w-100" name="buscar" value="" placeholder="Ingresar codigo de Producto">
                                </div>
                                <div class="col-md-">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form> 
                </div>
                <div class="col-lg-12 mt-2">                   
                    <table class=" table text-center px-5" id="dataTable" width="100%" cellspacing="0">
                        <thead class="text-center bg-danger text-light">
                            <tr>
                                <th>#</th>
                                <th>Lote</th>
                                <th>Descripcion</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Categoria</th>
                                <th>Fecha Vencimiento</th>
                                <th>Ubicacion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $i=0;
                                foreach($lista as $key => $list):
                                    $i++;
                            ?>
                                <tr>
                                    <td><?=$i?></td>
                                    <td><?=$list['lote']?></td>
                                    <td><?=$list['nombre_producto']?></td>
                                    <td><?=$list['marca']?></td>
                                    <td><?=$list['cantidad']?></td>
                                    <td><?=$list['categoria']?></td>
                                    <td><?=$list['fecha_vencimiento']?></td>
                                    <td>
                                        <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubicacionModal">
                                            <i class="fas fa-eye"></i>
                                        </button> -->
                                        <a href="body.php?pagina=buscarProducto&id=<?=$list['pasillo']?>"  class="btn btn-warning"><i class="fas fa-info-circle"></i></a>
                                        <?php if(isset($_GET['id']) && $_GET['id'] == $list['pasillo']):?>
                                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ubicacionModal">
                                            <i class="fas fa-eye"></i>
                                            </button>
                                        <?php endif;?>
                                    
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

<!-- MODAL de visualizacion-->

<div class="modal fade" id="ubicacionModal" tabindex="-1" aria-labelledby="ubicacionModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title py-2" id="exampleModalLabel">Ubicacion</h5>
        <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">Ok</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <table class="table">
            <thead class="text-center text-light bg-warning">
                <th>Pasillo</th>
            </thead>
            <tbody>
            <?php if(isset($_GET['id'])):?>
                <td>Pasillo <?=$_GET['id'] ?> </td>
            <?php endif;?>
            </tbody>
        </table>
      </div>
    </div>
  </div>
</div>