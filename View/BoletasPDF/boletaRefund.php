<?php
 $db="diars";
 $conexion = mysqli_connect('localhost','root','',$db);

// if($_GET['id']){
    $sql= "SELECT * FROM devoluciones";
    $refund = $conexion->prepare($sql);
    $refund->execute();
    $lista = $refund->fetchAll(PDO::FETCH_ASSOC);
// }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<section class="">
    <nav class="navbar navbar-dark bg-danger">
        <a class="navbar-brand " href="#">
            Plaza vea
        </a>
    </nav>
</section>
<section class="p-3">
    <div class="row">
        <div class="col-lg">
            <ul class="list-group">
                <h5 class="card-title">Lista de Productos</h5>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    A list item
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
            </ul>
        </div>
        <div class="col-lg">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Detalles</h5>
                    <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                </div>
                <ul class="list-group list-group-flush">
                    <?php foreach($lista as $lista):?>
                    <li class="list-group-item">N° Comprobante: <?=$refund['num_comp']?></li>
                    <li class="list-group-item">Monto:</li>
                    <li class="list-group-item">Fecha Devolucion:</li>
                    <li class="list-group-item">Motivo:</li>
                    <li class="list-group-item">Codigo Comprobante:</li>
                    <li class="list-group-item">Cajero:</li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- SCRIPT -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>
</html>