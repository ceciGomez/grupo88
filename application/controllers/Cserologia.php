
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cserologia  extends CI_Controller {

	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/serologia/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
				case 'verSerologias':
				$data["serologia"] = $this->donantes_model->getAllDonante();
				break;
			case 'verDonantes':
				$data["donante"] = $this->donantes_model->getAllDonante();

				break;
				case 'verUnaDonante':

				$data["unaDonante"] = $this->donantes_model->getDonante($param);
				//var_dump($data["unaDonante"]);
				break;
			
			default:
				# code...
				break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('serologia/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */