<?php 
require('fpdf.php');
require('conexion.php');

//comentar las lineas de abajo cuando se tenga las sesiones!
$_GET['responsable'] ='Cuzziol, Eric';
$GLOBALS['responsable'] = $_GET['responsable'];

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
    // Columna actual
    var $col = 0;
    // Ordenada de comienzo de la columna
    var $y0;


function mostrarEti($nroBib,$nombre,$az,$crema,$Kcal,$tipo,$fecha){
    $this->SetFont('Times','',8);

    
    
        $this->Cell(40,20,'B '.($nroBib),1,0,'C');
        $this->Ln(25);
        $this->Cell(60,8,$nombre.' - B'.($nroBib),0,0,'L');
        $this->Ln(5);
        $this->Cell(60,8,'Nro Past: '.$_GET['idPa'],0,0,'L');
        $this->Ln(5);
        $this->Cell(60,8,'Fecha Past: '.$fecha,0,0,'L');
        $this->Ln(5);
        $this->Cell(60,8,'Acidez: '.$az,0,0,'L');
        $this->Ln(5);
        $this->Cell(60,8,'% Crema: '.$crema,0,0,'L');
        $this->Ln(5);
        $this->Cell(60,8,'Kcal/l: '.$Kcal,0,0,'L');
        $this->Ln(5);
        $this->Cell(60,8,'Tipo Leche: '.$tipo,0,0,'L');
        $this->Ln(10);
        $this->Cell(60,8,'----------------------------------------------------------------',0,0,'C');
        $this->Ln(10);
    //$this->SetCol(0);
}

    
    function Header()
{
    global $varHR;
    $varPa = $_GET['idPa'];
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
    $this->Cell(100,10,'Etiquetas Biberones de Pasteurizacion Nro '.$_GET['idPa'],0,0,'C');

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

$consulta = mysql_query("SELECT b.idBiberon, b.tipoDeLeche, b.porcenCrema, b.kcali, b.acidezD, b.frasco_idFrasco, p.fechaPasteurizacion, d.apellido, d.nombre  
FROM biberon b, pasteurizacion p, frascos f, consentimiento c, donante d
WHERE b.Pasteurizacion_idPasteurizacion = p.idPasteurizacion AND
f.nroFrasco = `frasco_idFrasco` AND f.Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento = c.nroConsentimiento AND
c.Donante_nroDonante = d.nroDonante
AND b.`Pasteurizacion_idPasteurizacion` =".$_GET['idPa']);
$posX = 0;
while ($fila = mysql_fetch_array($consulta)) {
    //$pdf->Cell(10,10,' - ',1,1);
    $nroBib = $fila['idBiberon'];
    $nombre = $fila['apellido'].', '.$fila['nombre'];
    $az = $fila['acidezD'];
    $crema = $fila['porcenCrema'];
    $kcal= $fila['kcali'];
    if ($fila['tipoDeLeche'] == 'Calostro') {
        $tipo = "C";
        }elseif ($fila['tipoDeLeche'] == 'Madura') {
            $tipo = "M";
        }elseif ($fila['tipoDeLeche'] == 'Transicion') {
            $tipo = "T";
        }else{
            $tipo = "";
        }
    $fecha = $fila['fechaPasteurizacion'];
    //areglar fecha
    $fechaArray = explode('-', $fecha);
                         $date = new DateTime();
                         $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                         $fecha = $date->format('d/m/Y');


    //$pdf->mostrarEti($nroCon,$nombre,$idFrasco);
    $pdf->mostrarEti($nroBib,$nombre,$az,$crema,$kcal,$tipo,$fecha);
    $posX= $posX + 10;
    //$pdf->Image("https://chart.googleapis.com/chart?chs=50x50&cht=qr&chl=Example",$posX,0/2,0,0,'PNG');
}

/*
$cant = 15;
$nroCon = '13123123';
$nombre = 'Perez, Juana';
$ultimoFrasco = 10;


$pdf->mostrarEti($cant,$nroCon,$nombre,$ultimoFrasco);
*/

$pdf->Output();
?>