<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function view($page="home")
	{
		if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
			case 'serologia':
				$data["serologia"] = $this->donantes_model->getAllDonante();
				break;
			
			default:
				# code...
				break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}
	

	public function altaDonante()
	{
		$donante =  array(
			'nombre' => $this->input->post("nombre") , 
			'apellido' => $this->input->post("apellido")
			);
		//var_dump($donante["fecha"]);
		//var_dump($donante["nombre"]);
		$data['title'] = ucfirst("home");
		if ($this->donantes_model->insertNewDonante($donante)) {
			redirect('page/view/home','refresh');
		} else {
			redirect('','refresh');
		}
	}
}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */