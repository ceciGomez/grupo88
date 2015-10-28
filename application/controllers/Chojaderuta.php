<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chojaderuta extends CI_Controller {


	public function view($page="home", $param="", $param2="")
	{
		if ( ! file_exists(APPPATH.'/views/hojaruta/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		$data['showData']= false;
		switch ($page) {
			case 'verhrSemanal':
				$data['hojasdeRuta'] = $this->hojaruta_model->getWeekhr();
			//var_dump($data['hojasdeRuta']);
			break;
			case 'verTodashr':
				$data['hojasdeRuta'] = $this->hojaruta_model->getWeekhr();
			//var_dump($data['hojasdeRuta']);
			break;
			case 'generarHr':
				if ($param && $param2) {
					$data['consenxzona'] = $this->hojaruta_model->getConsentimientosPorZona($param);
					$data['consenxdia']  = $this->hojaruta_model->getConsentimientosPorZona($param2);
					$data['showData'] = true;
				}
				# code...
			
			break;
			case 'verTodashr':
				$data['hojasdeRuta'] = $this->hojaruta_model->getWeekhr();
			//var_dump($data['hojasdeRuta']);
			break;	
			
			default:
				# code...
				break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('hojaruta/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

	public function buscar() {
		$data = array();

		$query = $this->input->get('query', TRUE);

		if ($query) {
			$result = $this->donantes_model->buscar(trim($query));
			$total = $this->donantes_model->totalResultados(trim($query));
			if ($result != FALSE){
				$data = array(
					'result' => $result,
					'total'  => $total
				);
			}else {
				$data = array('result' => '', 'total' => $total);
			}	
		}else{
			$data = array('result' => '', 'total' => 0);
		}
		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('consentimiento/buscarprueba', $data);
		$this->load->view('templates/pie', $data);
		
	}
	public function generarHR()
	{
		$zona = $this->input->post("zona");
		$dia = $this->input->post("dia");
		redirect('chojaderuta/view/generarHr/'.$zona.'/'.$dia,'refresh');
		
	}

	public function generarHojaDerutaFormatoPDF()
	{

		
		foreach ($this->input->post("ceci") as $value) {
			var_dump($value);
		}
		//Esto va en comentarito
		$pdf = new Reportes();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(40,10,'¡Hola, Mundo!');
		$w = 50;
		$h=10;
		for ($i=0; $i < 10; $i++) { 
			$pdf->Ln(20);
		 	$pdf->Cell($w,10,$i,'c');
		 } 
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(40,10,'¡Hola, Mundo!');
		$w = 50;
		$h=10;
		for ($i=0; $i < 10; $i++) { 
			$pdf->Ln(20);
		 	$pdf->Cell($w,10,$i,'c');
		 } 
		$pdf->Output();	
		
	}

	public function buscarJson($value='')
	{	
		//Hacer Estadisticas
		$datosDB = $this->donantes_model->getEstadisticas();
		$datosEstadisticos = array();
		foreach ($datosDB as $value) {
			# code...
		}
			array_push($datosEstadisticos, array('value' => $value->Cantid,
				'color'=>"#FFC8"+($i*10),
				'label'=>$value->label
				));
		}	
		echo json_encode($datosEstadisticos);
	}
}


	

/* End of file Chojaderuta.php */
/* Location: ./application/controllers/Chojaderuta.php */