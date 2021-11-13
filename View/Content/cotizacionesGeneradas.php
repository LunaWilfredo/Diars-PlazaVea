<?php 

    $lista = ProveedorController::listaCotizaciones();

?>
<section class="">
    <form action="" method="post">
        <div class="container-fluid" style="height:750px ; width:84.9vw">
            <div class="row">
                <!-- Title -->
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <div class="mx-5 px-5 py-2">
                        <h1 class="border-botton">Cotizaciones Generadas</h1>
                    </div>
                </div>
                <!-- Body content -->
                <div class="col-lg col-md col-sm  text-center">
                    <table class="table" id="dataTable" cellspacing="0">
                        <thead class="text-center bg-danger text-light">
                            <tr>
                                <th>N°</th>
                                <th>Codigo Cotizacion</th>
                                <th>Fecha</th>
                                <th>Proveedor</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php  $i=0; foreach($lista as $lista): $i++?>
                            <tr>
                                <td><?=$i?></td>
                                <td><?=$lista['cod_cotizacion']?></td>
                                <td><?=$lista['fecha']?></td>
                                <td><?=$lista['provedor_c']?></td>
                                <td>
                                    <a href="ct=<?=$lista['id']?>" class="btn btn-primary" target="_blank"><i class="far fa-eye"></i></a>
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