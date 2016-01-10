<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpmedica extends CI_Controller {

	public function view($page="home", $param1="", $param2="",$param3="")
	{
		
		if ( ! file_exists(APPPATH.'/views/pmedica/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
     switch ($page) {
			case 'verTodasLasPmedicas':
				$data["pmedicas"] = $this->pmedica_model->getAllPmedica();
				break;
			
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('pmedica/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

}

/* End of file Cpmedica.php */
/* Location: ./application/controllers/Cpmedica.php */