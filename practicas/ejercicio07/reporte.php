<?php
define('FPDF_FONTPATH',realpath(__DIR__.'/../../font').'/');
include_once(__DIR__.'/../../fpdf.php');
$mypdf = new FPDF();
$mypdf->addPage();
$mypdf->SetFont('Arial','B',16);
$mypdf->Cell(40,10,"hello world('print')");
$mypdf->Output();
?>