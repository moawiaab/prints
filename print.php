<?php

function _pdf($variables = [],$pdftitle){
require_once "vendor/autoload.php";
ob_start();
extract($variables);
extract($pdftitle);
$text = "code.php";
include($text);
$content = ob_get_clean();
$pdf = new HTML2PDF('P','A4','en');
$pdf->writeHTML($content);
$pdf->output("pdf.pdf");
}

$expensesall = [1,2,3];
$pdftitle = "العنوان";
_pdf(compact('expensesall'),compact('pdftitle'));