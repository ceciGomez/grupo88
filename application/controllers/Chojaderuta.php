<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chojaderuta extends CI_Controller {

	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/hojaruta/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
			case 'verhrSemanal':
			$data['hojasdeRuta'] = $this->hojaruta_model->getWeekhr();
			//var_dump($data['hojasdeRuta']);
			break;
			case 'generarHrCons':
			$zona = $this->input->post("zona");
			$data['consenxzona'] = $this->hojaruta_model->getConsentimientosPorZona($zona);
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
		
		redirect('chojaderuta/view/generarHrCons','refresh');
		
	}
}


	

/* End of file Chojaderuta.php */
/* Location: ./application/controllers/Chojaderuta.php */