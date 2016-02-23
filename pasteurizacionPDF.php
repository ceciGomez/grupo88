<?php 
require('fpdf.php');
require('conexionRepor.php');
//$GET['idPa'] =  1;
$GLOBALS['paste'] = $_GET['idPa'];
$GLOBALS['responsable'] = 'Cuzziol, Eric';

$consulta = mysql_query("SELECT * FROM `pasteurizacion` WHERE `idPasteurizacion` = ".$GLOBALS['paste']." ");
$fila = mysql_fetch_array($consulta);
$GLOBALS['fechaPas'] = $fila['fechaPasteurizacion'];

$usuarioQuery = "select u.nombre, u.apellido
                from usuarios u 
                where u.idUsuario = '".$_GET['idUsuario']."'
                ";
$usuario = mysqli_query($conexion,$usuarioQuery);
$nomyap = mysqli_fetch_assoc($usuario);
$nomyap = $nomyap['apellido'].', '.$nomyap['nombre'];
$GLOBALS['nomyap'] = $nomyap;

if (isset($GLOBALS['fechaPas'])) {
            $fechaArray = explode('-', $GLOBALS['fechaPas']);
                         $date = new DateTime();
                         $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                         $GLOBALS['fecha']= $date->format('d/m/Y');
        }


class PDF extends FPDF
{   
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
    $this->Cell(160);
    $this->SetFont('Arial','',9);
    $this->Cell(50,10,'Fecha: '.$GLOBALS['fecha'],0);
    $this->Ln(5);
    $this->Cell(240);
    $this->Cell(50,10,'Pasteurizacion Nro: '.$GLOBALS['paste']);
    //$this->Ln(10);
    $this->Cell(45);
    //setea fuente de titulo
    $this->SetFont('Arial','B',15);
    // Salto de línea
    $this->Ln(10);
}

function Footer()
{
    // Posición: a 2 cm del final
    $this->SetY(-20);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    $this->SetFont('Arial','',8);
    $this->Ln(4);
    $this->Cell(0,10,'Responsable: '.$GLOBALS['nomyap'],0,0,'L');
}


}
$pdf = new PDF('L','mm','A4');
$pdf->AddPage();
$pdf->AliasNbPages();

$pdf->SetFont('Times','',8);




$pdf->Cell(10,8,'Nro',1,0,'C');
$pdf->Cell(15,8,'FN.RN.',1,0,'C');
$pdf->Cell(35,8,'Nombre Donante',1,0,'C');
$pdf->Cell(20,8,'DNI',1,0,'C');
$pdf->Cell(20,8,'F.E.',1,0,'C');
$pdf->Cell(10,8,'Vol',1,0,'C');
$pdf->Cell(15,8,'T. Leche',1,0,'C');
$pdf->Cell(15,8,'Col Total',1,0,'C');
$pdf->Cell(15,8,'Col Crema',1,0,'C');
$pdf->Cell(15,8,'% Crema',1,0,'C');
$pdf->Cell(15,8,'% Grasa',1,0,'C'); 
$pdf->Cell(10,8,'Kcal/l',1,0,'C');
$pdf->Cell(10,8,'Acidez',1,0,'C');
$pdf->Cell(20,8,'Caldo BGBL',1,0,'C');
$pdf->Cell(20,8,'Cult CLDE AS',1,0,'C');
$pdf->Cell(15,8,'Identif.',1,0,'C');
$pdf->Cell(15,8,'EG',1,0,'C');
$pdf->Ln(8);
$con=1;
$consulta = mysql_query("SELECT nombre, apellido, b1.tipoDeLeche, colCrema, porcenCrema, porcenGrasa, totalCol, kcali, acidezD, caldo, placaclde, PlacaAS, identif, eg, dniDonante, f.fechaExtraccion, b1.volumenDeLeche, bb.fechaNacBebeAsociado
FROM biberon b1, donante d, frascos f, consentimiento c, bebeasociado bb
WHERE b1.frasco_idFrasco = f.nroFrasco AND f.Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento = c.nroConsentimiento AND c.Donante_nroDonante = nroDonante AND bb.Consentimiento_nroConsentimiento = nroConsentimiento AND b1.Pasteurizacion_idPasteurizacion = ".$GLOBALS['paste']." ");
while($fila = mysql_fetch_array($consulta)){
    $pdf->Cell(10,8,$con,1,0,'C');
$pdf->Cell(15,8,$fila['fechaNacBebeAsociado'],1,0,'C');
$pdf->Cell(35,8,$fila['apellido'].', '.$fila['nombre'],1,0,'C');
$pdf->Cell(20,8,$fila['dniDonante'],1,0,'C');
$pdf->Cell(20,8,$fila['fechaExtraccion'],1,0,'C');
$pdf->Cell(10,8,$fila['volumenDeLeche'],1,0,'C');

if ($fila['tipoDeLeche'] == 'Calostro') {
    $letra = "C";
}elseif ($fila['tipoDeLeche'] == 'Madura') {
    $letra = "M";
}elseif ($fila['tipoDeLeche'] == 'Transicion') {
    $letra = "T";
}else{
    $letra = "";
}
$pdf->Cell(15,8,$letra,1,0,'C');
if ($fila['totalCol'] != NULL) {
    $pdf->Cell(15,8,$fila['totalCol'],1,0,'C');
}else{
    $pdf->Cell(15,8,'',1,0,'C');
}

if ($fila['colCrema'] != NULL) {
    $pdf->Cell(15,8,$fila['colCrema'],1,0,'C');
}else{
    $pdf->Cell(15,8,'',1,0,'C');
}

if ($fila['porcenCrema'] != 0) {
    $pdf->Cell(15,8,$fila['porcenCrema'],1,0,'C');
}else{
    $pdf->Cell(15,8,'',1,0,'C');
}
if ($fila['porcenGrasa'] != 0) {
    $pdf->Cell(15,8,$fila['porcenGrasa'],1,0,'C');
}else{
    $pdf->Cell(15,8,'',1,0,'C');
}
if ($fila['kcali'] != 0) {
    $pdf->Cell(10,8,$fila['kcali'],1,0,'C');
}else{
    $pdf->Cell(10,8,'',1,0,'C');
}  
if ($fila['acidezD'] != 0) {
    $pdf->Cell(10,8,$fila['acidezD'],1,0,'C');
}else{
    $pdf->Cell(10,8,'',1,0,'C');
}
if ($fila['caldo'] != 0) {
    $pdf->Cell(20,8,$fila['caldo'],1,0,'C');
}else{
    $pdf->Cell(20,8,'',1,0,'C');
}
if ($fila['placaclde'] != 0) {
    $pdf->Cell(20,8,$fila['placaclde'],1,0,'C');
}else{
    $pdf->Cell(20,8,'',1,0,'C');
}
if ($fila['identif'] != NULL) {
    $pdf->Cell(15,8,$fila['identif'],1,0,'C');
}else{
    $pdf->Cell(15,8,'',1,0,'C');
}
if ($fila['eg'] != NULL) {
    $pdf->Cell(15,8,$fila['eg'],1,0,'C');
}else{
    $pdf->Cell(15,8,'',1,0,'C');
}

$pdf->Ln(8);
$con++;
}

$pdf->Output();
?>