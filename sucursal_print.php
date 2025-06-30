<?php
include './tcpdf/tcpdf.php';
include 'clases/conexion.php';
class MYPDF extends TCPDF {
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('helvetica','I',8);
        $this->Cell(0,0,'Pag. '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(),0,false,'R',0,'',0,false,'T','M');
    }
}
$pdf=new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor(PDF_AUTHOR);
$pdf->SetTitle('Reporte de sucursales');
$pdf->SetSubject('TCPDF TUTORIAL');
$pdf->SetKeywords('TCPDF, PDF, EXAMPLE, TEST, GUIDE');
$pdf->setPrintFooter(false);
$pdf->setHeaderData(PDF_HEADER_LOGO,PDF_HEADER_LOGO_WIDTH,PDF_HEADER_TITLE,PDF_HEADER_STRING);
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->setHeaderMargin(PDF_MARGIN_HEADER);
$pdf->setFooterMargin(PDF_MARGIN_FOOTER);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//TIPO DE LETRA
$pdf->SetFont('times','B',14);
$pdf->AddPage('P','LEGAL');
$pdf->Cell(0,0,"Reporte de sucursales",0,1,'C');
$pdf->Ln();
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0);
$pdf->SetDrawColor(0,0,0);
$pdf->SetLineWidth(0.2);
$pdf->SetFont('','B',12);
$pdf->SetFillColor(180,180,180);
$pdf->Cell(10,5,'ID',1,0,'C',1);
$pdf->Cell(50,5,'Nombres',1,0,'C',1);
$pdf->Cell(70,5,'Dirección',1,0,'C',1);
$pdf->Cell(50,5,'Ciudad',1,0,'C',1);
$pdf->Ln();
$pdf->SetFont('','');
$pdf->SetFillColor(255,255,255);
$sucursal = consultas::get_datos("select * from sucursal order by id_sucursal");
foreach ($sucursal as $suc):;
$pdf->Cell(10,5,$suc['id_sucursal'],1,0,'C',1);
$pdf->Cell(50,5,$suc['nombre'],1,0,'C',1);
$pdf->Cell(70,5,$suc['dirección'],1,0,'C',1);
$pdf->Cell(50,5,$suc['ciudad'],1,0,'C',1);
        $pdf->Ln();
        endforeach;
        $pdf->Output('reporte_sucursal.pdf','I');
?>