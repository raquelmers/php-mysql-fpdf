<?php 
    require '../../../fpdf/fpdf/fpdf.php';

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Helvetica','I','16');
    $pdf->Cell(45,5,'detail_employees.php',1,0,'C');
    $pdf->Output('mi-pdf','I');

?>