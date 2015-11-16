<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cfrascos extends CI_Controller {

	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/frascos/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		switch ($page) {
			case 'verFrascos':
			$data["frascos"] = $this->frascos_model->getAllFrascos();
			break;
			case 'ingresoFrascos':
			$query= 'asas';
			$data['result'] = $this->frascos_model->buscarDonanteFrasco(trim($query));
			$data['total']  = $this->frascos_model->totalResultados(trim($query));
			break;
			default:
				# code...
			break;
		}
$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('frascos/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

public function buscar() 
	{
		$data = array();
		$query = $this->input->get('query', TRUE);
		if ($query) {
			$result = $this->frascos_model->buscarDonanteFrasco(trim($query));
			$total  = $this->frascos_model->totalResultados(trim($query));
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
		$this->load->view('consentimiento/buscaconsentimiento', $data);
		$this->load->view('templates/pie', $data);

	}

	

}

/* End of file Cfrascos.php */
/* Location: ./application/controllers/Cfrascos.php */