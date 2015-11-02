<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reportes extends CI_Controller {

	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/reportes/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
			switch ($page) {
			case 'repor_donante':
			$data["donante"] = $this->donantes_model->getAllDonante();
			break;
			default:
				# code...
			break;
		}

		
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('reportes/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}


}

/* End of file Reportes.php */
/* Location: ./application/controllers/Reportes.php */