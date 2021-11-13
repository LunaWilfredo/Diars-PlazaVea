<?php 

include_once 'Controller/ordenDevolucionController.php'; 

if(isset($_POST['code']) && !empty($_POST['code'])){
     $lista = CambioDevolucionController::pdfRefund();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boleta Refund</title>
</head>
<body>
 <div class="">
    <h1 class ="">Vale de Consumo</h1>
    <h2 class ="">Detalles</h2>
    <?php foreach($lista as $lista):?>
    <ul>
        <li>N° Comprobante D: <?=$lista['cod_comp_dev']?></li>
        <li>Fecha : <?=$lista['fecha_dev']?></li>
        <li>Motivo: <?=$lista['motivo_dev']?></li>
        <li>N° Comprobante V: <?=$lista['num_comp']?></li>
        <li>Cajero: <?=$lista['cajero']?></li>
    </ul>
    <h2 class="">Monto de Vale (s/.)</h2>
    <h1 class=""><?=$lista['monto_dev']?></h1>
 </div>
 <?php endforeach ?>
</body>
</html>