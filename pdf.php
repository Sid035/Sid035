<?php

require('fpdf/fpdf.php');
$pdf= new FPDF();
$pdf->AddPage();

$pdf->SetFont('arial','B',16);

$pdf->Cell(0,10,'INVOICE',1,1,'C');

$pdf->Output();


?>