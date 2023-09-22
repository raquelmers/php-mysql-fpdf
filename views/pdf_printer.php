<?php 
require('../../../fpdf/fpdf/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(60,10, $_POST['title'],0,1,'C');
$pdf->Ln(20);
$pdf->Cell(60,10, $_POST['body_text'],0,1,'C');
$pdf->Output();

?>