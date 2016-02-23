<?php
require('fpdf.php');
require('conexionRepor.php');

$usuarioQuery = "select u.nombre, u.apellido
                from usuarios u 
                where u.idUsuario = '".$_GET['idUsuario']."'
                ";
$usuario = mysqli_query($conexion,$usuarioQuery);
$nomyap = mysqli_fetch_assoc($usuario);
$nomyap = $nomyap['apellido'].', '.$nomyap['nombre'];
$GLOBALS['nomyap'] = $nomyap;

class PDF extends FPDF
{
// Cabecera de página
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
    $this->Cell(50,10,'Operador: '.$GLOBALS['nomyap']);
    $this->Ln(10);
    $this->Cell(45);
    //setea fuente de titulo
    $this->SetFont('Arial','B',15);
    $this->SetFont('','U');
    $this->Cell(100,10,'Lista de Consentimientos desde: '.$this->sanitizarFecha($_GET['fechaInicio']).' Fecha hasta: '.$this->sanitizarFecha($_GET['fechaFin']),0,0,'C');
    $this->SetFont('','');
    // Salto de línea
    $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}

public function sanitizarFecha($fecha)
{
    //$date = date_create_from_format('d-m-Y', $fecha);
    $date = date_create($fecha);
    return date_format($date,'Y-m-d');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

//cabecera de tabla
$pdf->SetFont('Times','',8);
$pdf->Cell(15,8,'Donante',1,0,'C');
$pdf->Cell(30,8,'Apellido y Nombre',1,0,'C');

$pdf->Cell(17,8,'DNI',1,0,'C');
$pdf->Cell(20,8,'Frascos(Und.)',1,0,'C');
$pdf->Cell(27,8,'Leche donada(Lts.)',1,0,'C');
//$pdf->Cell(23,8,'Donaciones(Und.)',1,0,'C');
$pdf->Cell(22,8,'F Inicio de Cons',1,0,'C');
$pdf->Cell(22,8,'F Fin de Cons',1,0,'C');
$pdf->Ln(8);
//fin cabecera de tabla

$consulta = mysqli_query($conexion,"
(SELECT *
FROM consentimiento c, donante d
WHERE (c.Donante_nroDonante = d.nroDonante) 
AND (c.fechaHasta BETWEEN '".$pdf->sanitizarFecha($_GET['fechaInicio'])."' AND '".$pdf->sanitizarFecha($_GET['fechaFin'])."') order by d.apellido asc)

UNION

(SELECT *
FROM consentimiento c, donante d
WHERE (c.Donante_nroDonante = d.nroDonante) AND c.fechaHasta IS NULL order by d.apellido asc)");

$totFrascos=0;$lecheind=0.25;$lecheTot=0.00;
while($fila = mysqli_fetch_array($consulta)){
    $pdf->Cell(15,8,$fila['nroDonante'],1,0,'C');
    $pdf->Cell(30,8,$fila['apellido'].', '.$fila['nombre'],1,0);
    
    $pdf->Cell(17,8,$fila['dniDonante'],1,0,'C');
    $pdf->Cell(20,8,$fila['cantFrascos'],1,0,'C');$lecheind=$lecheind*$fila['cantFrascos'];
    $pdf->Cell(27,8,$lecheind,1,0,'C');
   // $pdf->Cell(23,8,'',1,0,'C');
    $pdf->Cell(22,8,$fila['fechaDesde'],1,0,'C');
    $pdf->Cell(22,8,$fila['fechaHasta'],1,0,'C');
    $pdf->Ln(8);
    $totFrascos=$totFrascos+$fila['cantFrascos'];
    $lecheTot=$lecheTot+$lecheind;
    $lecheind=0.25;
}

//TOTALES
$pdf->Ln(10);
$pdf->SetFont('Times','B',10);
//consulta
$consulta = mysqli_query($conexion, "SELECT COUNT(*) as Num FROM consentimiento WHERE fechaHasta IS NULL");
$consulta = mysqli_fetch_array($consulta);
$pdf->Cell(75,8,'Madres activas',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(15,8,$consulta['Num'],1,1,'C');

$consulta = mysqli_query($conexion,"SELECT COUNT(*) as Num FROM `consentimiento` WHERE fechaHasta BETWEEN '".$pdf->sanitizarFecha($_GET['fechaInicio'])."' AND '".$pdf->sanitizarFecha($_GET['fechaFin'])."'");
$consulta = mysqli_fetch_array($consulta);
$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Madres que pasan a estado inactivo',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(15,8,$consulta[0],1,1,'C');

/*$consulta = mysqli_query($conexion,"SELECT SUM(cantFrascos) as Suma FROM `consentimiento` WHERE fechaHasta BETWEEN '".$pdf->sanitizarFecha($_GET['fechaInicio'])."' AND '".$pdf->sanitizarFecha($_GET['fechaFin'])."'");
$consulta = mysqli_fetch_array($consulta);*/
$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Total de frascos(Und.)',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(15,8,$totFrascos,1,1,'C');

$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Cantidad de leche donada(Lts.)',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(15,8,$lecheTot,1,1,'C');

$consulta = mysqli_query($conexion,"SELECT COUNT(*) as Num FROM `consentimiento` WHERE fechaDesde BETWEEN '".$pdf->sanitizarFecha($_GET['fechaInicio'])."' AND '".$pdf->sanitizarFecha($_GET['fechaFin'])."'");
$consulta = mysqli_fetch_array($consulta);
$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Nuevos consentimientos',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(15,8,$consulta[0],1,1,'C');

$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Nuevas madres donantes ',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(15,8,'',1,1,'C');

$pdf->Output();
?>