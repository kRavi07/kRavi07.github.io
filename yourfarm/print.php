<?php
session_start();
require('fpdf/fpdf.php');


$date=Date("jS  F Y");
class PDF extends FPDF
{
function Header()
{
    global $title;

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Calculate width of title and position
    $w = $this->GetStringWidth($title)+6;
    $this->SetX((210-$w)/2);
    // Colors of frame, background and text
    $this->SetDrawColor(0,80,180);
    $this->SetFillColor(0,0,0);
    $this->SetTextColor(255,255,255);
    // Thickness of frame (1 mm)
    $this->SetLineWidth(1);
    // Title
    $this->Cell($w,9,$title,1,1,'C',true);
    // Line break
    $this->Ln(10);
}

function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',10);
    // Text color in gray
    $this->SetTextColor(128);
    // Page number
    $this->Cell(0,10,' All rights reserved.  ©YourFram    ',0,0,'C');
}






}

$pdf = new PDF();

$title = 'YourFram Invoice';
$pdf->SetTitle($title);


$pdf->SetFont('Arial','B',14);
$pdf->AddPage();

$pdf->Line(10,20,200,20);

$pdf->SetFillColor(245, 103, 11 );
$pdf->SetTextColor(255,255,255);
$pdf->Cell(40,6,'Ship To',0,0,'L',true);
$pdf->Cell(40,6,'',0,0,'L',);

$pdf->SetFillColor(255,255,255 );
$pdf->SetTextColor(0,0,0);
$pdf->Cell(30,6,'Order ID',0,0,'L',true);
$pdf->Cell(30,6,'',0,0,'L',);


$pdf->SetFont('Helvetica','',12);
$pdf->Cell(40,6,$_SESSION['ORDERID'],0,1,'L',true);

$pdf->Ln();
//Second Line

$pdf->Cell(40,6,$_SESSION['add1'],0,0,'L',true);
$pdf->Cell(40,6,'',0,0,'L',);

$pdf->SetFont('Arial','B',14);
$pdf->Cell(30,6,'Invoice No.',0,0,'L',true);
$pdf->Cell(30,6,'',0,0,'L',);


$pdf->SetFont('Helvetica','',12);
$pdf->Cell(40,6,'123459',0,1,'L',true);

$pdf->Ln();
//Third Line

$pdf->Cell(40,6,$_SESSION['add2'],0,0,'L',true);
$pdf->Cell(40,6,'',0,0,'L',);

$pdf->SetFont('Arial','B',14);
$pdf->Cell(30,6,'Date',0,0,'L',true);
$pdf->Cell(30,6,'',0,0,'L',);


$pdf->SetFont('Helvetica','',12);
$pdf->Cell(40,6,$date,0,1,'L',true);

$pdf->Ln();
//fourth line

$pdf->Cell(40,6,'Patna,Bihar'.$_SESSION['pin'],0,0,'L',true);
$pdf->Cell(40,6,'',0,0,'L',);

$pdf->SetFont('Arial','B',14);
$pdf->Cell(30,6,'Subsciption Type',0,0,'L',true);
$pdf->Cell(30,6,'',0,0,'L',);


$pdf->SetFont('Helvetica','',12);
$pdf->Cell(40,6,$_SESSION['subscription'],0,1,'L',true);
$pdf->Ln();


//end of fourth

//fifth Line

$pdf->Cell(40,6,$_SESSION['mail'].$_SESSION['mobile'],0,0,'L',true);
$pdf->Cell(40,6,'',0,0,'L',);


$pdf->SetFont('Arial','B',14);
$pdf->Cell(30,6,'Payment Method',0,0,'L',true);
$pdf->Cell(30,6,'',0,0,'L',);


$pdf->SetFont('Helvetica','',12);
$pdf->Cell(40,6,$_SESSION['BANKNAME'],0,1,'L',true);
$pdf->Ln();



//Sixth Line


$pdf->SetFont('Arial','B',14);
$pdf->Cell(30,6,'Transactiom ID',0,0,'L',true);
$pdf->Cell(50,6,'',0,0,'L',);


$pdf->SetFont('Helvetica','',12);
$pdf->Cell(100,6,$_SESSION['TXNID'],0,1,'L',true);
$pdf->Ln();



$pdf->Line(10,115,200,115);
$pdf->Ln();

//line breaking

$pdf->SetFont('Helvetica','',14);
$pdf->Cell(20,5,'',0,0,'L');

$pdf->SetMargins(1,1,30);
$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(245, 103, 11 );
$pdf->Cell(55,7,'ITEM DESCRIPTION',0,0,'L',true);

$pdf->Cell(8,5,'',0,0,'L');

$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(245, 103, 11 );
$pdf->Cell(30,7,'PRICE',0,0,'L',true);

$pdf->Cell(8,5,'',0,0,'L');

$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(245, 103, 11 );
$pdf->Cell(30,7,'QUANTITY',0,0,'L',true);

$pdf->Cell(8,5,'',0,0,'L');

$pdf->SetTextColor(255,255,255);
$pdf->SetFillColor(245, 103, 11 );
$pdf->Cell(25,7,'TOTAL',0,0,'L',true);

//Content
$pdf->SetLeftMargin(10);

$pdf->Ln();
$pdf->Ln();
$pdf->SetTextColor(0, 0,0);
$pdf->SetFillColor(255,255,255);


$pdf->SetFont('Helvetica','',12);




$pdf->Cell(55,7,$_SESSION['box'],0,0,'L',true);

$pdf->Cell(32,5,'',0,0,'L');


$pdf->Cell(30,7,$_SESSION['price'],0,0,'L',true);

$pdf->Cell(8,5,'',0,0,'L');


$pdf->Cell(30,7, $_SESSION['qty'],0,0,'L',true);

$pdf->Cell(8,5,'',0,0,'L');


$pdf->Cell(25,7,$_SESSION['price']*$_SESSION['qty'],0,0,'L',true);

$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->Line(10,175,200,175);

$pdf->SetFont('Arial','B',13);
$pdf->SetLeftMargin(10);

$pdf->Cell(130,5,'',0,0,'L');
$pdf->Cell(30,6,'Subtotal',0,0,'L');
$pdf->Cell(30,6,'Rs  '.$_SESSION['price']*$_SESSION['qty'],0,1,'L');
$pdf->Ln();
$pdf->Cell(130,5,'',0,0,'L');
$pdf->Cell(30,6,'Taxes',0,0,'L');
$pdf->Cell(30,6,'0',0,1,'L');
$pdf->Ln();
$pdf->Cell(130,5,'',0,0,'L');
$pdf->Cell(30,6,'Discount',0,0,'L');
$pdf->Cell(30,6, 'Rs  '.$_SESSION['discount'] ,0,0,'L');


$pdf->Ln();
$pdf->Ln();
$pdf->Cell(130,5,'',0,0,'L');
$pdf->SetFillColor(245, 103, 11 );
$pdf->SetTextColor(255,255,255);

$pdf->Cell(30,6,'TOTAL',0,0,'L',true);
$pdf->Cell(35,6,'Rs  '.$_SESSION['TXNAMOUNT'],0,1,'L',true);


$pdf->Ln();
$pdf->Ln();

$pdf->SetTextColor(0, 0,0);
$pdf->SetFillColor(255,255,255);
$pdf->Cell(20,6,'Note ',0,0,'L',true);

$pdf->SetFont('Helvetica','',11);
$pdf->Cell(100,6,'Order is Non-Refundable & Non-Returnable ',0,1,'L',true);





$pdf->SetFont('Helvetica','',13);





$pdf->Output();


?>