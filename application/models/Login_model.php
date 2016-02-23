<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function getUser($usuario)
	{
		try {
			return $this->db->get_where('usuarios', $usuario)->result();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getUserById($idUser)	
	{
		try {
			$this->db->where('idUsuario', $idUser);
			return $this->db->get('usuarios')->result();
		} catch (Exception $e) {
			return false;
		}
	}
	

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */