<?php
require_once 'PDF/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;


ob_start();
require_once './BoletasPDF/boletaExchange.php';
$html = ob_get_clean();

$html2pdf = new Html2Pdf('P','A4','es','true','UTF-8');
$html2pdf->writeHTML($html);
$html2pdf->output();

?>