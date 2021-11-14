<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../imagenes/LogoAppWebB.png',10,6,30);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Move to the right
    $this->Cell(56);
    // Title
    $this->Cell(80,10,'Your appointment information',0,0,'C');
    // Line break
    $this->Ln(20);

    $this->Cell(50,10,'Medic',1,0,'C',0);
	$this->Cell(50,10,'Date',1,0,'C',0);
	$this->Cell(50,10,'Hours',1,1,'C',0);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}


require '../controller/pdf.php';
$datos=$_COOKIE["sesion"];
$datos=json_decode($datos);

$ID=$datos[0]->Id_Paciente;

$ci = $_GET['id'];

$consulta = "SELECT medicos.Nombre, citas.Fecha, citas.Hora FROM citas LEFT JOIN medicos ON citas.Id_Medico=medicos.Id_Medico WHERE Id_Cita=$ci";
$resultado = $conexion->query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);


while($row = $resultado->fetch_assoc()){
	$pdf->Cell(50,10,$row['Nombre'],1,0,'C',0);
	$pdf->Cell(50,10,$row['Fecha'],1,0,'C',0);
	$pdf->Cell(50,10,$row['Hora'],1,1,'C',0);

}


$pdf->Output();
?>
