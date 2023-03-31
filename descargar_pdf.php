<?php

include("/xampp/htdocs/web5/db/db.php");
require('/xampp/htdocs/web5/fpdf185/fpdf.php');

// Obtener los datos del formulario
$fecha = $_POST['fecha'];
$proveedor = $_POST['proveedor'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$precio_unitario = $_POST['precio_unitario'];

// Calcular el total
$total = $cantidad * $precio_unitario;

// Crear el objeto PDF
$pdf = new FPDF();
$pdf->AddPage();

// Agregar el título y los datos de la tabla al PDF
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Orden de compra');
$pdf->Ln();
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(40, 10, 'Fecha: ' . $fecha);
$pdf->Ln();
$pdf->Cell(40, 10, 'Proveedor: ' . $proveedor);
$pdf->Ln();
$pdf->Cell(40, 10, 'Producto: ' . $producto);
$pdf->Ln();
$pdf->Cell(40, 10, 'Cantidad: ' . $cantidad);
$pdf->Ln();
$pdf->Cell(40, 10, 'Precio unitario: ' . $precio_unitario);
$pdf->Ln();
$pdf->Cell(40, 10, 'Total: ' . $total);

// Descargar el archivo PDF
$pdf->Output();
