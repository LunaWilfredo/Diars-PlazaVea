<?php 

include_once 'Controller/ordenDevolucionController.php'; 

if(isset($_POST['code']) && !empty($_POST['code'])){
     $lista = CambioDevolucionController::pdfExchange();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta Exchange</title>
</head>
<body>
 <div class="">
    <h1 class ="">Boleta de Cambio</h1>
    <h2 class ="">Detalles</h2>
    <?php foreach($lista as $lista):?>
    <ul>
        <li>N° Comprobante C: <?=$lista['c_cambio']?></li>
        <li>Fecha : <?=date('d-M-Y')?></li>
        <li>N° Comprobante V: <?=$lista['c_venta']?></li>
        <li>Cajero: <?=$lista['cajero']?></li>
    </ul>
    <h2 class="">Producto de cambio</h2>
    <ol>
        <li><?=$lista['producto']?> | <?=$lista['marca']?> | <?=$lista['cantidad_c']?> | <?=$lista['lote']?> | <?=$lista['precio']?></li> 
    </ol>
 </div>
 <?php endforeach ?>
</body>
</html>