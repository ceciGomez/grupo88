<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CciSessions2 extends CI_Controller {

	
	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
			case '':
			$data[""] = ;
			$data[""] = ;
			break;
			
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		/*$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('pasteurizacion/'.$page, $data);
		$this->load->view('templates/pie', $data);
		*/
	}

}

/* End of file CciSessions2.php */
/* Location: ./application/controllers/CciSessions2.php */