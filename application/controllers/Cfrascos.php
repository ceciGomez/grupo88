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
$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('frascos/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

	

}

/* End of file Cfrascos.php */
/* Location: ./application/controllers/Cfrascos.php */