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
	function insertUsuario($unUsuario){
		try {
			$this->db->insert('usuarios', $unUsuario);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return FALSE;
		}
	}
	function getUsuarios(){
		try {
			return $this->db->get('usuarios')->result();
		} catch (Exception $e) {
			
		}
	}
	public function updateUsuario($unUsuario, $idUsuario){
		try {
			$this->db->where('idUsuario', $idUsuario);
			return $this->db->update('usuarios', $unUsuario);
		} catch (Exception $e) {
			return FALSE;
		}
	}
	public function deleteUsuario($idUsuario)
	{
		try {
			$this->db->where('idUsuario', $idUsuario);
			$this->db->delete('usuarios');
			return TRUE;
		} catch (Exception $e) {
			return FALSE;
		}
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */