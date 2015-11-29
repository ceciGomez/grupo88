<?php
require('fpdf/fpdf.php');
class Reportes extends FPDF {
	function crearHeader($hojaDeRuta){ 
		$this->AliasNbPages();
		$this->AddPage();
	    //$varHR = 10;
		// Logo
	    $this->Image('logo_pb.png',10,8,33);
	    // Arial bold 15
	    $this->SetFont('Arial','B',15);
	    // Movernos a la derecha
	    $this->Cell(80);
	    // Título
	    //$this->Cell(30,10,'Title',1,0,'C');
	    $this->SetX(-50);
	    $this->SetFont('Arial','',9);
	    $this->Cell(50,10,'Fecha: '.date('d-m-Y').'',0);
	    $this->Ln(5);
	    $this->SetX(-50);
	    $this->Cell(50,10,'Operador: Cuzziol');
	    $this->Ln(10);
	    $this->Cell(45);
	    //setea fuente de titulo
	    $this->SetFont('Arial','U',20);
	    $this->SetFont('','B');
	    $titulo = 'HOJA DE RUTA';
	    $w = $this->GetStringWidth($titulo);
	   // $this->SetX((210-$w)/2);
	    $this->SetX((297-$w)/2);
	    $this->Cell($w,10,$titulo,0,0,'C');
	    
	    // Salto de línea
	    $this->Ln(12);
	}
	// Pie de página
   	function Footer()  {
        // Posición: a 1,5 cm del final
	    $this->SetY(-15);
	    // Arial italic 8
	    $this->SetFont('Arial','I',8);
	    // Número de página
	    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }

    public function GenerarFecha($hojaDeRuta, $fecha, $fechaEspaniol,$fechaCreacionHdR)
    {
    	$this->SetLineWidth(1);
    	$this->Rect(10, 35, 277, 30, 'D');
    	$this->SetLineWidth(0);
    	$this->SetFont('Arial','U',12);
    	$this->Cell(45, 6, utf8_decode('Número de Hoja de Ruta: '), 0,0 );
    	$this->SetFont('','');
    	$this->Cell(20, 6, $hojaDeRuta, 0,0,'C' );
    	$this->Ln(10);
    	$this->SetFont('Arial','U',12);
    	$this->Cell(35,6,'Fecha Recorrido:',0,0);
    	$this->SetFont('','');
    	$this->Cell(40,6, $fechaEspaniol.', '.$fecha,0,0);
    	$this->SetFont('Arial','U',12);
    	$this->Cell(45,6,utf8_decode('Fecha de Creación: '),0,0,'C');
    	$this->SetFont('','');
    	$this->Cell(35,6, $fechaCreacionHdR,0,0);
    	$this->SetFont('Arial','U',12);
		$this->Cell(45,6,utf8_decode('Fecha Efectivización:'),0,0);
		$this->SetFont('','');
		$this->Cell(30,6,'___/___/_____',0,0);
    }

    public function generaZona($zona, $cabecera)
    {
    	$this->Ln(10);
    	$this->SetFont('Arial','U',12);
    	$this->Cell(12,6,'Zona: ',0,0);
    	$this->SetFont('','');
		$this->Cell(36,6,$zona['nombreZona'],0,0);
		$this->SetFont('Arial','U',12);
		$this->Cell(17,6,'Chofer: ',0,0,'L');
		$this->SetFont('','');
		$this->Cell(45,6,$cabecera['chofer'],0,0,'L');
		$this->SetFont('Arial','U',12);
		$this->Cell(20,6,'Asistente: ',0,0,'C');
		$this->SetFont('','');
		$this->Cell(40,6,$cabecera['asistente'],0,0,'C');
		$this->Ln(15);
		$this->SetFont('Times','B',10);
		$this->Cell(15,8,'Nro Cons',1,0,'C');
		$this->Cell(40,8,'Apellido y Nombre',1,0,'C');
		$this->Cell(70,8,utf8_decode('Dirección'),1,0,'C');
		$this->Cell(45,8,'Indicaciones',1,0,'C');
		$this->Cell(20,8,'Telefono',1,0,'C');
		$this->Cell(20,8,'Entregas',1,0,'C');
		$this->Cell(24,8,'Recolecciones',1,0,'C');
		$this->Cell(43,8,'Observaciones',1,0,'C');
		$this->Ln(8);
		$this->SetFont('Times','',10);

    }

    public function generaConsentimiento($consentimientos, $con)
    {

    	$this->Cell(15,8,$consentimientos['Consentimiento_nroConsentimiento'],1,0,'C');
		$this->Cell(40,8,$con['apellido'].' '.$con['nombre'],1,0,'C');

		//realizar validacion de pc mz y demas.. para colocar en 
		$domiCompleto = $con['calle'].' '.$con['altura'].' ';
		if ($con['barrio'] != NULL) {
		    $domiCompleto .= utf8_decode('B°: ').$con['barrio'].' ';
		}
		if ($con['mz'] != NULL & $con['mz'] != 0) {
		    $domiCompleto .= 'Mz: '.$con['mz'].' ';
		}
		if ($con['pc'] != NULL & $con['pc'] != 0) {
		    $domiCompleto .= 'Pc: '.$con['pc'].' ';
		}
		if ($con['piso'] != NULL & $con['piso'] != 0) {
		    $domiCompleto .= 'Piso: '.$con['piso'].' ';
		}
		if ($con['departamento'] != NULL & $con['departamento'] != 0) {
		    $domiCompleto .= 'Dpto: '.$con['departamento'];
		}

		$this->Cell(70,8,$domiCompleto,1,0,'C');
		$this->Cell(45,8,$con['indicaciones'],1,0,'C');
		$this->Cell(20,8,$con['telefonoDonante'],1,0,'C');
		$this->Cell(20,8,$consentimientos['cantFrascosEntregados'],1,0,'C');
		$this->Cell(24,8,'',1,0,'C');
		$this->Cell(43,8,$consentimientos['observaciones'],1,1,'C');
    }    
}