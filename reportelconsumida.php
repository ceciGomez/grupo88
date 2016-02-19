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
    $this->Cell(100,10,'Lista de Lechec Consumida desde:'.$this->sanitizarFecha($_GET['fechaInicio']).' Fecha hasta: '.$this->sanitizarFecha($_GET['fechaFin']),0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

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
$pdf->Cell(25,8,'Apellido Bebe',1,0,'C');
$pdf->Cell(30,8,'Nombre Bebe',1,0,'C');
$pdf->Cell(15,8,'Nro.Biberon',1,0,'C');
$pdf->Cell(20,8,'Consumido',1,0,'C');
$pdf->Cell(20,8,'idFraccionamiento',1,0,'C');
$pdf->Cell(20,8,'Cantidad de Tomas',1,0,'C');
$pdf->Cell(27,8,'Volumen',1,0,'C');
$pdf->Cell(23,8,'Tipo de Leche',1,0,'C');

$pdf->Ln(8);
//fin cabecera de tabla
$query="select b.apellidoBebeReceptor, b.nombreBebeReceptor,f.Biberon_idBiberon, 
             f.consumido, f.idFraccionamiento, p.cant_tomas,p.volumen,p.tipoDeLecheBanco, f.fechaFraccionamiento
             from bebereceptor b, fraccionamiento f
              inner join prescripcionmedica p
             on
             f.PrescripcionMedica_idPrescripcionMedica=p.idPrescripcionMedica
             and f.fechaFraccionamiento between '".$pdf->sanitizarFecha($_GET['fechaInicio'])."' AND '".$pdf->sanitizarFecha($_GET['fechaFin'])."'
             order by b.apellidoBebeReceptor asc, b.nombreBebeReceptor asc";

$consulta = mysqli_query($conexion,$query);

while($fila = mysqli_fetch_array($consulta)){
    $pdf->Cell(25,8,$fila['apellidoBebeReceptor'],1,0,'C');
    $pdf->Cell(30,8,$fila['nombreBebeReceptor'],1,0,'C');
    $pdf->Cell(15,8,$fila['Biberon_idBiberon'],1,0,'C');
    $pdf->Cell(20,8,$fila['consumido'],1,0,'C');
    $pdf->Cell(27,8,$fila['cant_tomas'],1,0,'C');
    $pdf->Cell(23,8,$fila['volumen'],1,0,'C');
    $pdf->Cell(20,8,$fila['tipoDeLecheBanco'],1,0,'C');
    $pdf->Ln(8);
}

//contenido de tabla



//fin contenido de tabla


/*for($i=1;$i<=40;$i++)
    $pdf->Cell(0,10,'Imprimiendo línea número '.$i,0,1);
    */
$pdf->Output();
?>