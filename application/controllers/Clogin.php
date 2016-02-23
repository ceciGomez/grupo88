<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clogin extends CI_Controller {

	//Funciones a copiar en todos los controladores
	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in != true) {
			redirect(base_url(),'refresh');
		}
	}
// fin de funciones a copiar en todos los controladores

	public function view($page="home", $param="",$param1="")
	{
		if ( ! file_exists(APPPATH.'/views/login/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
			case 'registrarUsuario':
				//$data["bebeasociado"] = $this->bebeasociado_model->getAllBebeasociado();
			break;
			
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('login/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

	

}

/* End of file Clogin.php */
/* Location: ./application/controllers/Clogin.php */