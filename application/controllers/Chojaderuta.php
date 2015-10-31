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
				if ($param && $param2==0) {
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
		if ($diaSeleccionado == 1) {
			$fechaArray = explode('/', $this->input->post("fecha"));
			$date = new DateTime();
			$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
			$fecha= $date->format('Y-m-d');
			redirect('chojaderuta/view/generarHr/'.$zona.'/'.$fecha,'refresh');
		} else {
			
			redirect('chojaderuta/view/generarHr/'.$zona,'refresh');
		
		}
		
		
	}
	public function generarHRuta()
	{
		foreach ($this->input->post("consSel") as $value) 
		{
			var_dump($value);
			$consen = $this->consentimiento_model->getConsentimiento("$value");
			echo "consentimiento: ";
			var_dump($consen);
			
		}	
		$zona = $this->input->post("zona"); 
		//redirect('chojaderuta/view/generarHrCons/'.$zona,'refresh');
		echo "zona: ";
		var_dump($zona);
		
	}

	
}


	

/* End of file Chojaderuta.php */
/* Location: ./application/controllers/Chojaderuta.php */