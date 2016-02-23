<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cusuarios extends CI_Controller {
	

	public function index()
	{
		
	}
	public function iniciar_sesion()
	{
		$data  = array();
		$data['error'] = $this->session->flashdata('error');
		
		$this->load->view('welcome_message', $data);
	}
	public function loggin()
	{
		$member = array('nombreUsuario' => $this->input->post('username'), 
						'password'=> $this->input->post('pass'));
		$usuarioValido = $this->login_model->getUser($member);
		if ($usuarioValido) {
			$usuario_data = array(
				'nombreUsuario' => $usuarioValido[0]->nombreUsuario, 
				'email' => $usuarioValido[0]->email,
				'is_logged_in' => true,
				'nombreUs' => $usuarioValido[0]->nombre,
				'apellidoUs' => $usuarioValido[0]->apellido,
				'idUsuario' => $usuarioValido[0]->idUsuario
			);
			$this->session->set_userdata($usuario_data);
			
			redirect('page/view','refresh');
		} else{
			$this->session->set_flashdata('error', 'El usuario o la contraseña son incorrectos.');
			redirect( 'cusuarios/iniciar_sesion' ,'refresh');
		}
	}

	public function logOut()
	{
		$this->session->sess_destroy();
		redirect( base_url() ,'refresh');
	}
}

/* End of file cusuarios.php */
/* Location: ./application/controllers/cusuarios.php */