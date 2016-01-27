<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cusuarios extends CI_Controller {

	public function index()
	{
		
	}
	public function loggin()
	{
		$member = array('nombreUsuario' => $this->input->post('username'), 
						'password'=> $this->input->post('pass'));
		$usuarioValido = $this->login_model->getUser($member);
		if ($usuarioValido) {
			$data = array(
				'nombreUsuario' => $usuarioValido[0]->nombreUsuario, 
				'email' => $usuarioValido[0]->email,
				'is_logged_in' => true,
				'nombre' => $usuarioValido[0]->nombre,
				'apellido' => $usuarioValido[0]->apellido
			);
			$this->session->set_userdata($data);
			redirect('page/view','refresh');
		} else{
			redirect( base_url() ,'refresh');
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