<?php 
require('fpdf.php');
require('conexion.php');

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


function mostrarEti($nroCon,$nombre,$idFrasco){
	$this->SetFont('Times','',8);

	
        //$this->Cell(60,40,'F'.($idFrasco).' - '.$nroCon,1,0,'C');
        $texto = 'F'.($idFrasco).' - '.$nroCon;
        $this->Cell(60,40,$texto,1,0,'C');
        //$this->Image("<img src='generadorEtiquetas.php?idfrasco=".$idFrasco."&nrocon=".$nroCon." />'",'PNG');
        $this->Ln(40);
        $this->Cell(60,8,$nombre.' - F'.($idFrasco),0,0,'C');
        $this->Ln(5);
        $this->Cell(60,8,'Fecha Extraccion: __/__/____',0,0,'C');
        $this->Ln(5);
        $this->Cell(60,8,'Volumen: _________ cm3',0,0,'C');
        $this->Ln(10);
        $this->Cell(60,8,'----------------------------------------------------------------',0,0,'C');
        $this->Ln(10);
    //$this->SetCol(0);
}

	
	function Header()
{
    global $varHR;
    $varHR = $_GET['idHR'];
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
    $this->Cell(100,10,'Etiquetas Hoja de Ruta Nro '.$varHR,0,0,'C');

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

$consulta = mysql_query("SELECT *
FROM frascos f, consentimiento_por_hojaderuta chr, consentimiento c, donante d
WHERE Consentimiento_por_HojaDeRuta_HojaDeRuta_idHojaDeRuta = HojaDeRuta_idHojaDeRuta AND Consentimiento_por_HojaDeRuta_HojaDeRuta_idHojaDeRuta = '".$varHR."' AND Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento = nroConsentimiento AND Donante_nroDonante = nroDonante");
$posX = 0;
while ($fila = mysql_fetch_array($consulta)) {
    //$pdf->Cell(10,10,' - ',1,1);
    $nroCon = $fila['nroConsentimiento'];
    $nombre = $fila['apellido'].', '.$fila['nombre'];
    $idFrasco = $fila['nroFrasco'];
    $pdf->mostrarEti($nroCon,$nombre,$idFrasco);
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