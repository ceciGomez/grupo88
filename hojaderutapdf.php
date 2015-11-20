<?php 
require('fpdf.php');
require('conexion.php');


class PDF extends FPDF
{

/*
function Header()
{
    // Logo
    $this->Image('logo_pb.png',10,8,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    //$this->Cell(30,10,'Title',1,0,'C');
    $this->Cell(70);
    $this->SetFont('Arial','',9);
    $this->Cell(50,10,'Fecha: '.date('d-m-Y').'',0);
    $this->Ln(5);
    $this->Cell(150);
    $this->Cell(50,10,'Operador: Cuzziol');
    $this->Ln(10);
    $this->Cell(45);
    //setea fuente de titulo
    $this->SetFont('Arial','B',15);
    $this->Cell(100,10,'XX',0,0,'C');

    // Salto de línea
    $this->Ln(10);
}
*/


// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf = new FPDF('L','mm','A4');

$pdf->AliasNbPages();
$pdf->AddPage();
$varHR = 49;

//funcion header
// Logo
    $pdf->Image('logo_pb.png',10,8,33);
    // Arial bold 15
    $pdf->SetFont('Arial','B',15);
    // Movernos a la derecha
    $pdf->Cell(80);
    // Título
    //$this->Cell(30,10,'Title',1,0,'C');
    $pdf->Cell(70);
    $pdf->SetFont('Arial','',9);
    $pdf->Cell(50,10,'Fecha: '.date('d-m-Y').'',0);
    $pdf->Ln(5);
    $pdf->Cell(150);
    $pdf->Cell(50,10,'Operador: Cuzziol');
    $pdf->Ln(10);
    $pdf->Cell(45);
    //setea fuente de titulo
    $pdf->SetFont('Arial','B',15);
    $pdf->Cell(100,10,'Hoja de ruta Nro '.$varHR,0,0,'C');

    // Salto de línea
    $pdf->Ln(10);

//fin funcion header

$consulta = mysql_query("SELECT * 
FROM hojaderuta, consentimiento_por_hojaderuta
WHERE idHojaDeRuta = HojaDeRuta_idHojaDeRuta AND idHojaDeRuta = '".$varHR."'");

$cabecera = mysql_fetch_array($consulta);

$pdf->SetFont('Arial','',11);
$pdf->Cell(60,8,'Fecha Recorrido: '.$cabecera['fechaRecorrido'],0,0);
$pdf->Cell(60,8,'Fecha de Creacion: '.$cabecera['fechaCreacionHdR'],0,0);


//consulta zona
$czona = mysql_query("SELECT * FROM Zona WHERE idZona = '".$cabecera['zona']."'");
$NombreZona = mysql_fetch_array($czona);

$pdf->Cell(40,8,'Zona: '.$NombreZona['nombreZona'],0,0,'C');	
$pdf->Cell(70,8,'Fecha Efectivizacion: ___/___/_____',0,1);
$pdf->Cell(45,8,'Chofer: '.$cabecera['chofer'],0,0);
$pdf->Cell(45,8,'Asistente: '.$cabecera['asistente'],0,0,'C');
$pdf->Ln(10);


$pdf->SetFont('Times','B',9);
$pdf->Cell(15,8,'Nro Cons',1,0,'C');
$pdf->Cell(40,8,'Apellido y Nombre',1,0,'C');
$pdf->Cell(55,8,'Direccion',1,0,'C');
$pdf->Cell(45,8,'Indicaciones',1,0,'C');
$pdf->Cell(20,8,'Telefono',1,0,'C');
$pdf->Cell(30,8,'Cant Fr a Entregar',1,0,'C');
$pdf->Cell(32,8,'Cant Fr Recolectados',1,0,'C');
$pdf->Cell(40,8,'Observaciones',1,0,'C');
$pdf->Ln(8);


$pdf->SetFont('Times','',8);
while($fila = mysql_fetch_array($consulta)){
$pdf->Cell(15,8,$fila['Consentimiento_nroConsentimiento'],1,0,'C');
//consulta datos de consentimiento
$con = mysql_query("SELECT * 
FROM consentimiento, donante
WHERE Donante_nroDonante = nroDonante AND nroConsentimiento = '".$fila['Consentimiento_nroConsentimiento']."'");
$con = mysql_fetch_array($con);
//fin consulta

$pdf->Cell(40,8,$con['apellido'].' '.$con['nombre'],1,0,'C');

//realizar validacion de pc mz y demas.. para colocar en direccion 
$pdf->Cell(55,8,$con['calle'].' '.$con['altura'],1,0,'C');
$pdf->Cell(45,8,$con['indicaciones'],1,0,'C');
$pdf->Cell(20,8,$con['telefonoDonante'],1,0,'C');
$pdf->Cell(30,8,$fila['cantFrascosEntregados'],1,0,'C');
$pdf->Cell(32,8,'',1,0,'C');
$pdf->Cell(40,8,$fila['observaciones'],1,1,'C');

/*


*/
}

$pdf->Output();
 ?>