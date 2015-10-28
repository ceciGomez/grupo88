<?php
	ob_end_clean();
	require('application/third_party/fpdf/fpdf.php');

	class Reportes extends FPDF {

		public function generarEncabezado($value='')
		{
			$this->Line(130,10,130,10);
			$this->Ln(10);
			$this->Cell(30, 6, $value, 0, 0, 'L');
		}
	}