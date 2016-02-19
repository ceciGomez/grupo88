<?php
require('fpdf.php');
require('conexion.php');

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
    $this->Cell(50,10,'Operador: Cuzziol');
    $this->Ln(10);
    $this->Cell(45);
    //setea fuente de titulo
    $this->SetFont('Arial','B',15);
    $this->SetFont('','U');
    $this->Cell(100,10,'Lista de Contactos de Madres Donantes',0,0,'C');
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
$pdf->Cell(25,8,'Apellido',1,0,'C');
$pdf->Cell(30,8,'Nombre',1,0,'C');
$pdf->Cell(15,8,'DNI',1,0,'C');
$pdf->Cell(20,8,'Fecha Nacimiento',1,0,'C');
$pdf->Cell(27,8,'Telefono',1,0,'C');
$pdf->Cell(50,8,'Correo Electronico',1,0,'C');
$pdf->Ln(8);
//fin cabecera de tabla

$consulta = mysqli_query($conexion,"
SELECT *
FROM donante order by apellido asc");

while($fila = mysqli_fetch_array($consulta)){
    $pdf->Cell(15,8,$fila['nroDonante'],1,0,'C');
    $pdf->Cell(25,8,$fila['apellido'],1,0,'C');
    $pdf->Cell(30,8,$fila['nombre'],1,0,'C');
    $pdf->Cell(15,8,$fila['dniDonante'],1,0,'C');
    $pdf->Cell(20,8,$fila['fechaNacDonante'],1,0,'C');
    $pdf->Cell(27,8,$fila['telefonoDonante'],1,0,'C');
    $pdf->Cell(50,8,$fila['emailDonante'],1,0,'C');
    $pdf->Ln(8);
}


$pdf->Output();
?>