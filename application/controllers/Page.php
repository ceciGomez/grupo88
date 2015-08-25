<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function view()
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/header', $data);
		$this->load->view('pages/elisa', $data);
		$this->load->view('templates/footer', $data);
	}
	public function ver(){
//ver con Manu :) no anda. 
		$this->load->view('templates/header');
		$this->load->view('views/pages/elisa');
		$this->load->view('templates/footer');
	}

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */