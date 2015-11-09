<?php 
require('fpdf.php');
require('conexion.php');

$pdf = new FPDF();

/*
$pdf->AddPage();
$pdf->SetFont('Times','',8);
$pdf->Cell(60,40,'Nro frasco - Nro Consentimiento',1,0,'C');
$pdf->Ln(40);
$pdf->Cell(60,8,'Caceres, Marta - F0001',0,0,'C');
$pdf->Ln(5);
$pdf->Cell(60,8,'Fecha Extraccion __/__/____',0,0,'C');

$pdf->Ln(10);

$pdf->Cell(60,40,'Nro frasco - Nro Consentimiento',1,0,'C');
$pdf->Ln(40);
$pdf->Cell(60,8,'Caceres, Marta - F0001',0,0,'C');
$pdf->Ln(5);
$pdf->Cell(60,8,'Fecha Extraccion __/__/____',0,0,'C');
*/

$pdf->AddPage();
$pdf->SetFont('Times','',8);
for ($i=0; $i < 3; $i++) { 
	$pdf->Cell(60,40,'Nro Frasco - Nro Consentimiento',1,0,'C');
    $pdf->Ln(40);
    $pdf->Cell(60,8,'Caceres, Marta Leila - F'.$i,0,0,'C');
    $pdf->Ln(5);
    $pdf->Cell(60,8,'Fecha Extraccion __/__/____',0,0,'C');
    $pdf->Ln();
    $pdf->Cell(60,8,'- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ',0,0,'C');
    $pdf->ln();
}


$pdf->Output();
 ?> 