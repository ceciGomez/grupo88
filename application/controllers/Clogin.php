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
			case 'verTodosLosUsuarios':
				$data['usuarios'] = $this->login_model->getUsuarios();
				break;
			case 'editarUsuario':
				$data['unUsuario'] = $this->login_model->getUserById($param);
				break;
			case 'verUnUsuario':
				$data['unUsuario'] = $this->login_model->getUserById($param);
				break;
			case 'eliminarUsuario':
				$data['unUsuario'] = $this->login_model->getUserById($param);
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

	public function altaUsuario(){
		$unUsuario = array(
			'nombre' 	     => $this->input->post('nombre'), 
			'apellido'		 => $this->input->post('apellido'), 
			'nombreUsuario'	 => $this->input->post('nomUsuario') , 
			'password' 		 => $this->input->post('pass'), 
			'email' 		 => $this->input->post('mail'), 
			'tipoUsuario'    => $this->input->post('tipo'), 
			);
		$data['title'] = ucfirst("home");
		var_dump($unUsuario);
		$idLogin = $this->login_model->insertUsuario($unUsuario);
		var_dump($idLogin);
		redirect('clogin/view/verTodosLosUsuarios/','refresh');
	}
	public function editarUsuario()
	{
		$unUsuario = array(
			'nombre' 	     => $this->input->post('nombre'), 
			'apellido'		 => $this->input->post('apellido'), 
			'nombreUsuario'	 => $this->input->post('nomUsuario') , 
			'password' 		 => $this->input->post('pass'), 
			'email' 		 => $this->input->post('email'), 
			'tipoUsuario'    => $this->input->post('tipo'),
			 );
		$data['title'] = ucfirst("home");
		$idUsuario = (int)$this->input->post('idUsuario');
		
		if ($this->login_model->updateUsuario($unUsuario, $idUsuario)) {
			redirect('clogin/view/verTodosLosUsuarios/','refresh');	
		} else {
			redirect('','refresh');
		}
		
	}
	
	public function eliminarUsuario()
	{
		$idUsuario = (int)$this->input->post('idUsuario');
		if ($this->login_model->deleteUsuario($idUsuario)) {
			redirect('clogin/view/verTodosLosUsuarios','refresh');
		} else {
			redirect('','refresh');
		}
	}
	
}

/* End of file Clogin.php */
/* Location: ./application/controllers/Clogin.php */