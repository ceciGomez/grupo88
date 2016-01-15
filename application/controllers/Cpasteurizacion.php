<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpasteurizacion extends CI_Controller {

	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/pasteurizacion/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
			case 'nuevaPasteurizacion':
			$data["frascos"] = $this->frascos_model->getAllFrascos();
			break;
			case '':
			//$data["unBebeR"] = $this->bebereceptor_model->getBebereceptor($param);
			break;
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('pasteurizacion/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}


}
/* End of file Page.php */
/* Location: ./application/controllers/Page.php */