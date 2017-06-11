<?php
session_start();
require 'projekt_polaczenie.php';
require 'funkcja_sprawdzid.php';
require 'nietaklatwo.php';
require 'sprawdzadmina.php';
require('tfpdf.php');

$sql = "select * from uzytkownicy";
$wynik = $polaczenie -> query($sql);

$pdf = new tFPDF();
$pdf->AddPage();
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->AddFont('DejaVu','B','DejaVuSans-Bold.ttf',true);
$pdf->SetTitle('Lista użytkowników', true);

$pdf->SetFont('DejaVu','',25);
$pdf->SetX(30);
$pdf->Cell (200,10,'Lista użytkowników z datą rejestracji',0,1);
$pdf->SetFont('DejaVu','',20);
$pdf->SetX(67);
$pdf->Cell (200,10,'w aplikacji Notesso 2.0',0,1);
$pdf->Ln(1);
$pdf->Image('image.jpg',25);
$pdf->Ln(1);
$pdf->SetFont('DejaVu','',8);
$pdf->SetX(77);
$pdf->SetTextColor(0,0,255);
$pdf->Write(5, 'Grafika pobrana z http://www.freepik.com/','http://www.freepik.com/free-vector/user-avatars-pack_762498.htm');
$pdf->SetFont('DejaVu','',15);
$pdf->SetTextColor(0,0,0);
$pdf->Ln(10);

	$pdf->SetX(30);
	$pdf->SetFillColor(108,150,38);
	$pdf->Cell(10,15,'Lp','TBL',0,'C',true);
	$pdf->Cell(10,15,'ID','TBL',0,'C',true);
	$pdf->Cell(65 ,15,'Login','TB',0,'C',true);
	$pdf->Cell(65,15,'Data rejestracji','TBR',1,'C',true);
	
	$i = 1;
	
	$pdf->SetFillColor(140,196,49);

while (($rekord=$wynik -> fetch_assoc()) != null)
{	
if ($i%2==0)
{
	$pdf->SetX(30);
	$pdf->Cell(10,10,$i,'TBL',0,'C',true);
	$pdf->Cell(10,10,$rekord['id_uzytk'],'TBL',0,'C',true);
	$pdf->Cell(65 ,10,$rekord['login'],'TB',0,'C',true);
	$pdf->Cell(65,10,$rekord['data_rejestracji'],'TBR',1,'C',true);
	$i=$i+1;
}
else
{
	$pdf->SetX(30);
	$pdf->Cell(10,10,$i,'TBL',0,'C');
	$pdf->Cell(10,10,$rekord['id_uzytk'],'TBL',0,'C');
	$pdf->Cell(65 ,10,$rekord['login'],'TB',0,'C');
	$pdf->Cell(65,10,$rekord['data_rejestracji'],'TBR',1,'C');
	$i=$i+1;
	
}
	
}
$pdf->SetTextColor(255,0,0);
$pdf->SetFont('DejaVu','B',10);
$pdf->Ln(3);
$pdf->SetX(57,5);
$pdf->Cell(95,10,'Wygenerowano przez '.$_SESSION['log'].' w dniu '.date('d-m-Y'),0,1,'L');

$pdf->Output();
?>