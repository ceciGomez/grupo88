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
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $this->Cell(50,10,'Fecha: '.date('d-m-Y').'',0);
    $this->Ln(5);
    $this->Cell(150);
    $this->Cell(50,10,'Operador: '.$GLOBALS['nomyap']);
    $this->Ln(10);
    $this->Cell(45);
    //setea fuente de titulo
    $this->SetFont('Arial','B',15);
    $this->Cell(100,10,'Lista de Leche Recolectada desde: '.$this->sanitizarFecha($_GET['fechaInicio']).' Fecha hasta: '.$this->sanitizarFecha($_GET['fechaFin']),0,0,'C');

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
    return date_format($date,'d-m-Y');
}

public function sanitizarFechaBDA($fecha)
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
$pdf->SetFont('Times','B',8);
$pdf->Cell(10,8,'',0,0,'C');
$pdf->Cell(25,8,'Hoja de Ruta',1,0,'C');
$pdf->Cell(25,8,'Nro de Frasco',1,0,'C');
$pdf->Cell(30,8,'Fecha de Recoleccion',1,0,'C');
$pdf->Cell(20,8,'Tipo de Leche',1,0,'C');
$pdf->Cell(25,8,'Volumen',1,0,'C');
$pdf->Cell(22,8,'Estado',1,0,'C');
$pdf->Cell(27,8,'Apellido y Nombre',1,0,'C');
$pdf->SetFont('Times','',8);



$pdf->Ln(8);
//fin cabecera de tabla




$query="SELECT idHojaDeRuta, nroFrasco, fechaRecorrido, tipoDeLeche, volumenDeLeche, estadoDeFrasco, nombre, apellido
FROM frascos f, consentimiento_por_hojaderuta hc, hojaderuta h, consentimiento c, donante d
WHERE c.Donante_nroDonante = d.nroDonante and h.idHojaDeRuta = hc.HojaDeRuta_idHojaDeRuta and
c.nroConsentimiento = hc.Consentimiento_nroConsentimiento
and f.Consentimiento_por_HojaDeRuta_HojaDeRuta_idHojaDeRuta = hc.HojaDeRuta_idHojaDeRuta
and c.nroConsentimiento = hc.Consentimiento_nroConsentimiento
and f.HRVuelta <> 'NULL'
 and h.fechaRecorrido between '".$pdf->sanitizarFechaBDA($_GET['fechaInicio'])."' AND '".$pdf->sanitizarFechaBDA($_GET['fechaFin'])."'";

$consulta = mysqli_query($conexion,$query);
//inicializar variables
$volrec=0;
$lrecha=0;
$lok=0;
$porc=0;
$totf=0;
$tcalo=0;
$tmad=0;
$tcrud=0;


while($fila = mysqli_fetch_array($consulta)){
    $pdf->Cell(10,8,'',0,0,'C');
    $pdf->Cell(25,8,$fila['idHojaDeRuta'],1,0,'C');
    $pdf->Cell(25,8,$fila['nroFrasco'],1,0,'C');
    $pdf->Cell(30,8,$pdf->sanitizarFecha($fila['fechaRecorrido']),1,0,'C');
    $pdf->Cell(20,8,$fila['tipoDeLeche'],1,0,'C');
    $pdf->Cell(25,8,$fila['volumenDeLeche'],1,0,'C');
    if ($fila['estadoDeFrasco'] == 'ConSerologiaOk') {
      $pdf->Cell(22,8,'Serologia Ok',1,0,'C');
    }else {
    $pdf->Cell(22,8,$fila['estadoDeFrasco'],1,0,'C');
    }
    $pdf->Cell(27,8,$fila['apellido'].', '.$fila['nombre'],1,0,'C');
    
    $totf++;
    $volrec=$volrec+$fila['volumenDeLeche'];
   
    $tipo=$fila['estadoDeFrasco'];
    switch ($tipo) {
        case 'Rechazada':
            $lrecha=$lrecha+$fila['volumenDeLeche'];
            break;
            case 'OK':
                $lok=$lok+$fila['volumenDeLeche'];
                break;
        
        
    }
    $esta=$fila['tipoDeLeche'];
    switch ($esta) {
        case 'Calostro':
           $tcalo=$tcalo+$fila['volumenDeLeche'];
            break;
            case 'Madura':
                $tmad=$tmad+$fila['volumenDeLeche'];
                break;
                default:
                    $tcrud=$tcrud+$fila['volumenDeLeche'];
                    break;
        
        
    }

    $pdf->Ln(8);
}
 if($totf!=0){
   $porc=($lrecha / $totf) * 100;   
 }
 else{$porc=0;}
 // totales

$pdf->Ln(15);

  $pdf->SetFont('Times','B',10);
  $pdf->Cell(75,8,'TOTALES: ',0,1);
  $pdf->Cell(75,8,'Total de leche Recolectada',1,0);
  $pdf->SetFont('Times','',10);
  $pdf->Cell(15,8,$volrec,1,1,'C');
 
  $pdf->SetFont('Times','B',10);
  $pdf->Cell(75,8,'Porcentaje de leche Rechazada',1,0);
  $pdf->SetFont('Times','',10);
  $pdf->Cell(15,8,$porc,1,1,'C');
 
 $pdf->SetFont('Times','B',10);
  $pdf->Cell(75,8,'Total de leche Utilizada',1,0);
  $pdf->SetFont('Times','',10);
  $pdf->Cell(15,8,$lok,1,1,'C');
  

  $pdf->SetFont('Times','B',10);
  $pdf->Cell(75,8,'Total de leche Cruda ',1,0);
  $pdf->SetFont('Times','',10);

  $pdf->Cell(15,8,$tcrud,1,1,'C');

  $pdf->SetFont('Times','B',10);
  $pdf->Cell(75,8,'Total de leche Madura',1,0);
  $pdf->SetFont('Times','',10);
  $pdf->Cell(15,8,$tmad,1,1,'C');

 $pdf->SetFont('Times','B',10);
  $pdf->Cell(75,8,'Total de leche Calostro',1,0);
  $pdf->SetFont('Times','',10);
  $pdf->Cell(15,8,$tcalo,1,1,'C');




//contenido de tabla



//fin contenido de tabla

$pdf->Output();
?>