
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cbebe  extends CI_Controller {

	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/bebe/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
				case 'serologia':
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
		$this->load->view('bebe/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}


	//se elimino la funcion alta donante de esta pagina 
	//se puso esa funcion en el controlador Cdonante
}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */