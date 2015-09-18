<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consentimiento extends CI_Controller {

	public function view($page="home")
	{
		if ( ! file_exists(APPPATH.'/views/consentimiento/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('consentimiento/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}
	
/*
	public function altaDonante()
	{
		$donante =  array(
			'nombre' => $this->input->post("nombre") , 
			'fecha' => $this->input->post("fecha")
			);
		//var_dump($donante["fecha"]);
		//var_dump($donante["nombre"]);

		if ($this->donantes_model->insertNewDonante($donante)) {
			$this->load->view('templates/cabecera', $data);
			$this->load->view('templates/menu', $data);
			$this->load->view('pages/evementira', $data);
			$this->load->view('templates/pie', $data);
		} else {
			$this->load->view('templates/cabecera', $data);
			$this->load->view('templates/menu', $data);
			$this->load->view('errors/html/error_general', $error);
			$this->load->view('templates/pie', $data);
		}
	}
*/
}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */