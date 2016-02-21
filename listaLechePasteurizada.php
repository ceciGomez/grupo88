<?php
require('fpdf.php');
require('conexionRepor.php');

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
    $this->Cell(100,10,'Lista de Pasteurizada desde: '.$this->sanitizarFecha($_GET['fechaInicio']).' Fecha hasta: '.$this->sanitizarFecha($_GET['fechaFin']),0,0,'C');
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
$pdf->Cell(20,8,'Pasteurizacion',1,0,'C');
$pdf->Cell(25,8,'Responsable',1,0,'C');
$pdf->Cell(25,8,'Biberon',1,0,'C');
$pdf->Cell(15,8,'Volumen',1,0,'C');
$pdf->Cell(20,8,'Estado',1,0,'C');
$pdf->Cell(27,8,'Tipo de Leche',1,0,'C');
//$pdf->Cell(23,8,'Cant de donaciones',1,0,'C');
$pdf->Cell(20,8,'Frasco',1,0,'C');
//$pdf->Cell(20,8,'F Fin de Cons',1,0,'C');
$pdf->Ln(8);
//fin cabecera de tabla


$consulta = mysqli_query($conexion,"
(SELECT idBiberon, volFraccionado,estadoBiberon,tipoDeLeche,frasco_idfrasco,idPasteurizacion,fechaPasteurizacion,responsable
            FROM biberon b, pasteurizacion p WHERE (b.Pasteurizacion_idPasteurizacion = p.idPasteurizacion )
            AND (p.fechaPasteurizacion BETWEEN '".$pdf->sanitizarFecha($_GET['fechaInicio'])."' AND '".$pdf->sanitizarFecha($_GET['fechaFin'])."') order by d.apellido asc)
            UNION
            (SELECT idBiberon, volFraccionado,estadoBiberon,tipoDeLeche,frasco_idfrasco,idPasteurizacion,fechaPasteurizacion,responsable FROM biberon b, pasteurizacion p
            WHERE (b.Pasteurizacion_idPasteurizacion = p.idPasteurizacion) AND (p.fechaPasteurizacion IS NULL )order by p.idPasteurizacion asc  )");
///defini cont
$volac=0;
$lrecha=0;
$lok=0;

while($fila = mysqli_fetch_array($consulta)){
    $pdf->Cell(20,8,$fila['idPasteurizacion'],1,0,'C');
    $pdf->Cell(25,8,$fila['responsable'],1,0,'C');
    $pdf->Cell(25,8,$fila['idBiberon'],1,0,'C');
    $pdf->Cell(15,8,$fila['volFraccionado'],1,0,'C');
    $pdf->Cell(20,8,$fila['estadoBiberon'],1,0,'C');
    $pdf->Cell(27,8,$fila['tipoDeLeche'],1,0,'C');
    $pdf->Cell(20,8,$fila['frasco_idfrasco'],1,0,'C');
   // $pdf->Cell(20,8,$fila['fechaDesde'],1,0,'C');
   // $pdf->Cell(20,8,$fila['fechaHasta'],1,0,'C');
    $volac=$volac+$fila['volFraccionado'];
    $totb++;
   
    $est=$fila['estadoBiberon'];
    switch($est){
     case 'Rechazado':
         $lrecha++;
         break;
     case 'ok':
         $lok++;
    break;

    }

    


    $pdf->Ln(8);
}
 $porc=($lrecha / $totb)*100;
 $porc=round($porc,3);
//TOTALES
$pdf->Ln(10);
$pdf->SetFont('Times','B',10);
//consulta

$pdf->Cell(75,8,'Total de Leche Pasteurizada',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(20,8,$volac,1,1,'C');


$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Porcentaje de leche Rehazada',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(20,8,$porc,1,1,'C');


$pdf->SetFont('Times','B',10);
$pdf->Cell(75,8,'Total de Leche a Utilizar',1,0);
$pdf->SetFont('Times','',10);
$pdf->Cell(20,8,$lok,1,1,'C');



$pdf->Output();
?>