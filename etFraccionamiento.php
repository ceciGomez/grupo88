<?php 
require('fpdf.php');
require('conexion.php');
date_default_timezone_set("America/Argentina/Buenos_Aires");
// PARAMETROS DE ENTRADA
//$_GET['idU'] = 2;
//$_GET['nroProcF'] = 1;




$cons = mysql_query("select u.nombre, u.apellido from usuarios u where u.idUsuario = '".$_GET['idU']."' ");
//$usuario = mysqli_query($conexion,$usuarioQuery);
$nomyap = mysql_fetch_assoc($cons);
$nomyap = $nomyap['apellido'].', '.$nomyap['nombre'];
$GLOBALS['nomyap'] = $nomyap;



class PDF extends FPDF
{
    // Columna actual
    var $col = 0;
    // Ordenada de comienzo de la columna
    var $y0;


function mostrarEti($nya,$vol,$cant,$kcal,$crema,$fe,$idF,$tipoL){
    $this->SetFont('Times','',6);

        if ($tipoL == 'Calostro') {
            $tipoL = 'C';
        }elseif ($tipoL == 'Madura') {
            $tipoL = 'M';
        }elseif($tipoL == 'Formula') {
            $tipoL = 'F';
        }elseif ($tipoL == 'Transicion') {
            $tipoL = 'T';
        }else{
            $tipoL = '';
        }

        $this->Cell(30,8,'NyA: '.$nya,0,0,'L');
        $this->Ln(2);
        $this->Cell(30,8,'Volumen/Fracc: '.$vol.'x'.$cant,0,0,'L');
        $this->Ln(2);
        $this->Cell(30,8,'Tipo de Leche: '.$tipoL.'- K'.$kcal.' '.$crema.'%',0,0,'L');
        $this->Ln(2);
        $this->Cell(30,8,'Fecha : '.$fe,0,0,'L');
        $this->Ln(2);
        $this->Cell(30,8,'Nro Fraccionamiento : '.$idF,0,0,'L');
        $this->Ln(2);
        $this->Cell(30,8,'----------------------------------------',0,0,'C');
        $this->Ln(8);
    //$this->SetCol(0);
}

    
    function Header()
{
    global $varHR;
    //$varPa = $_GET['idPa'];

    //$varHR = 10;
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
    $this->Cell(100,10,'Fraccionamientos ',0,0,'C');

    // Salto de línea
    $this->Ln(15);
    $this->y0 = $this->GetY();
}


    function Footer()
    {
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

    //
    //sacar si no anda
    function AcceptPageBreak()
{
    // Método que acepta o no el salto automático de página
    if($this->col<2)
    {
        // Ir a la siguiente columna
        $this->SetCol($this->col+1);
        // Establecer la ordenada al principio
        $this->SetY($this->y0);
        // Seguir en esta página
        return false;
    }
    else
    {
        // Volver a la primera columna
        $this->SetCol(0);
        // Salto de página
        return true;
    }
}

function SetCol($col)
{
    // Establecer la posición de una columna dada
    $this->col = $col;
    $x = 10+$col*65;
    $this->SetLeftMargin($x);
    $this->SetX($x);
}




}

$pdf = new PDF();
$pdf->AddPage();
$pdf->AliasNbPages();

$consulta = mysql_query(" SELECT apellidoBebeReceptor, nombreBebeReceptor, fechaFraccionamiento, f.volumen, p.cant_tomas, p.kcal, bb.porcenCrema, f.nroProcesoFracc, p.tipoDeLecheBanco, f.idFraccionamiento
FROM fraccionamiento f, bebereceptor b, prescripcionmedica p, biberon bb
WHERE f.BebeReceptor_idBebeReceptor = b.idBebeReceptor AND p.idPrescripcionMedica = f.PrescripcionMedica_idPrescripcionMedica AND f.Biberon_idBiberon = bb.idBiberon AND f.nroProcesoFracc = '".$_GET['nroProcF']."' ");
$posX = 0;
while ($fila = mysql_fetch_array($consulta)) {
        $nya = $fila['apellidoBebeReceptor'].', '.$fila['nombreBebeReceptor'];
        $vol = $fila['volumen'];
        $cant = $fila['cant_tomas'];
        $kcal = $fila['kcal'];
        $crema = $fila['porcenCrema'];
        $fe = $fila['fechaFraccionamiento'];
        $idF = $fila['idFraccionamiento'];
        $tipoL = $fila['tipoDeLecheBanco'];

    //areglar fecha
    
    $fechaArray = explode('-', $fe);
                         $date = new DateTime();
                         $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                         $fe = $date->format('d/m/Y');


    
    $pdf->mostrarEti($nya,$vol,$cant,$kcal,$crema,$fe,$idF,$tipoL);
    $posX= $posX + 10;
   
}


$pdf->Output();
?>