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
				$data['hojasdeRuta'] = $this->hojaruta_model->getAllhr();
			//var_dump($data['hojasdeRuta']);
			break;
			case 'generarHr':
			$data['fecha'] = $param2;
				if ($param && $param2) {
					$data['consenxzona'] = $this->hojaruta_model->getConsentimientosPorZona($param);
					
					$data['showData'] = true;
				}else {
					if (($param && $param2==1)) {
						$data['consenxzona'] = $this->hojaruta_model->getConsentimientosPorZona($param);
						$data['consenxdia']  = $this->hojaruta_model->getConsentimientosPorZona($param2);
						$data['showData'] = true;
					}
				}
				# code...
			
			break;
			case 'generarHrCons':
				$data['consenxzona'] = $this->hojaruta_model->getConsentimientosPorZona($param);
				$data['hojaderuta'] = $this->hojaruta_model->getUnaHRuta($param);										
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


	
	public function buscarConsxFiltro()
	{
		$diaSeleccionado = $this->input->post("diaSeleccionado");
		$zona = $this->input->post("zona");
		$fechaArray = explode('/', $this->input->post("fecha"));
			$date = new DateTime();
			$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
			$fecha= $date->format('Y-m-d');
		if ($diaSeleccionado == 1) {
			redirect('chojaderuta/view/generarHr/'.$zona.'/'.$fecha,'refresh');
		} else {
			
			redirect('chojaderuta/view/generarHr/'.$zona.'/'.$fecha,'refresh');
		
		}
		
		
	}
	public function generarHRuta()
	{
		//con esta forma se toma el formato de fecha
		$datestring = "%Y-%m-%d";
		//la funcion mdate con un solo parametro da la fecha actual
		$now = mdate($datestring);
		//crear el array que va a ser pasado para la creación de la hr
		$hruta = array(
			//obtener la fecha de  generacion la hoja de ruta
			'fechaCreacionHdR' => $now,
			'zona'             => $zona = $this->input->post("zona"), 
			'chofer'           => $this->input->post("chofer"),
			//obtener la fecha de recorrido en que se quiere generar la hoja de ruta
			'fechaRecorrido'   => $fecha = $this->input->post('fecha'),
			'asistente'        => $this->input->post("asistente"),
			
			);
		//crear la hoja de Ruta
		$idHrCreada = $this->hojaruta_model->newhojaruta($hruta);
		//var_dump($idHrCreada);
		/*foreach ($this->input->post("consSel") as $value) 
		{
			//var_dump($value);
			//$consen = $this->consentimiento_model->getConsentimiento("$value");
			//echo "consentimiento: ";
			//var_dump($consen);
			
		}*/

		redirect('chojaderuta/view/generarHrCons/'.$idHrCreada,'refresh');
		
		
	}

	
}


	

/* End of file Chojaderuta.php */
/* Location: ./application/controllers/Chojaderuta.php */