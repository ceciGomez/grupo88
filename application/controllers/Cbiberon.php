<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cbiberon extends CI_Controller {

	public function view($page="home", $param="")
	{
		
		if ( ! file_exists(APPPATH.'/views/biberones/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
     switch ($page) {
			case 'administrarBiberones':
				$data["biberones"] = $this->biberon_model->getAllBiberones();
				break;
		/*case 'cargaCultivoBiberon':
				$data["biberones"] = $this->biberon_model->getBiberonesSinCultivo();
				break;*/		
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('biberones/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}
	public function cargaAnalisis()
	{

	}

}

/* End of file Cpmedica.php */
/* Location: ./application/controllers/Cpmedica.php */