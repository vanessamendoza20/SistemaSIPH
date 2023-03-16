<?php
//llamar ala libreria
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    //logo
    $this->Image('fpdf/logo.png',5,5,70);//imagen,derecha, arriba/abajo, izuierda
    $this->Image('fpdf/escudo.png',180,5,25);//imagen,derecha, arriba/abajo, izuierda
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(60);
    //Colocar color al texto
    $this->SetTextColor	(0,0,0);
    // Título
    $this->Cell(90,40,'Informe Policial Homologado',0,1,'C');
    $this->SetFont('Arial','I',12);
    $this->Cell(210,-20,'Personas Detenidas (informacion Relevante)',0,0,'C');
    // Salto de línea
    $this->Ln(10);
    // Arial bold 12
    $this->SetFont('Arial','I',12);
    
    // Colores de los bordes y texto
    $this->SetDrawColor(47,79,79);
    $this->SetTextColor(25,25,112);
    //formar tabla
    //largo, ancho, titulo, bordes, salto de renglon, centrado
    $this->Cell(40,10,'Primer Apellido',1,0,'C');
    $this->Cell(40,10,'Segundo Apellido',1,0,'C',0);
    $this->Cell(30,10,'Nombre(s)',1,0,'C',0);
    $this->Cell(30,10,'Apodo',1,0,'C',0);
    $this->Cell(30,10,'Nacionalidad',1,0,'C',0);
    $this->Cell(20,10,'Sexo',1,1,'C');

}

// Pie de página
function Footer()
{
    // Posición: a 2 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    //Colocar color al texto
    $this->SetTextColor	(255,255,255);
    //imagen pie de pagina
    $this->Image('fpdf/pie.png',0,257,0);
    // Número de página
    //NOTA: utf8_decode es para caracteres especiales
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

//llamar a la conexion de base de datos
require("conexion_reporte.php");
// seleciionar todo lo que esta en la tabla
$consulta = "SELECT * FROM persona_det";
//llamamos la conexion y la consulta
$resultado = mysqli_query($conn, $consulta);


//indicador de nuevo fichero
$pdf = new PDF();
$title = 'Personas detenidas';
//agrgar pie de pagina
$pdf->AliasNbPages();
//agrega pagiina
$pdf->AddPage();
//Arial
$pdf->SetFont('Arial','B',16);



//recorrer todos los campos que se encuentraan en la tabla
while ($row = $resultado->fetch_assoc()) {
    $pdf->SetFont('Arial','',12);
    //solo compos que se utilizaron
    $pdf->SetDrawColor(47,79,79);
    $pdf->SetTextColor(0,0,0);
	$pdf->Cell(40, 10, $row['ap_pd'], 1, 0, 'C');
    $pdf->Cell(40, 10, $row['am_pd'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['nom_pd'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['apodo'], 1, 0, 'C');
    $pdf->Cell(30, 10, $row['naci'], 1, 0, 'C');
    $pdf->Cell(20, 10, $row['sexo'], 1, 1, 'C');
}


$pdf->Output('Informe de Personas Detenidas.pdf', 'D');//nombreDescarga, Visor(I->visualizar - D->descargar)
?>