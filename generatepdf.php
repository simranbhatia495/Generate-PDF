<?php

require('fpdf.php');
define('FPDF_FONTPATH','fpdf181/font/');
//Create a new PDF file
class PDF extends FPDF

{

// Page header

function Header()

{
    
    // Logo
    //$this->Cell(190,30,'',1,0);

    $this->Image('main_header.jpg',3,10,190,30);

    // Arial bold 15

    $this->SetFont('Arial','B',15);
  // Move to the right

    $this->Cell(80);

    // Title
 // $this->Cell(60,10,'Convert HTML TO PDF',1,0,'C');

    // Line break

    $this->Ln(20);

}

/*function Footer()
{    $this->SetY(-15);

 // $this->SetFont('Arial','I',8);

    // Page number
//29
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

}*/
//31
}

 
//33
// Instanciation of inherited class

$pdf = new PDF();
//35
$pdf->AliasNbPages();

$pdf->AddPage();
//37
$pdf->SetFont('Times','B',16);
$var = 'ashween.jpg';
 
$pdf->Ln(15);
$pdf->Cell(0,5,'Application for Upgradation/Change of Branch in B.Tech Programme',0,1,'C');
$pdf->SetFont('Times','',12);
$pdf->Ln(10);
$pdf->Image('academic\\'.$var,157,60,35,35);
$pdf->Cell(0,10,'Name : '.$_POST["name"].'                                                           Email : '.$_POST["email"],0,1,'center');

$pdf->Cell(0,10,'Email : '.$_POST["email"],0,1);

$pdf->Cell(0,10,'Mobile : '.$_POST["mobile"],0,1);

$pdf->Cell(0,10,'Comment : '.$_POST["comment"],0,1);

$pdf->Rect(8,100,190,30,'');
$pdf->Cell(0,10,'Simran: ',0,1,'C');
$pdf->Cell(0,10,'dgnigfdgiufgfinfjfx9h09jweeru4uep9sdhc vc',0,1,'C');

 

$pdf->Output();

?>
