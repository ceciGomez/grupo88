<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Localidad_model extends CI_Model {

	
	public function getUnaLocalidad($idLocalidad)
	{
		try {
				$this->db->where('idLocalidad', $idLocalidad);
				return $this->db->get('localidad')->result();
			} catch (Exception $e) {
				return FALSE;
			}
	}
	public function getAllLocalidades()
	{
		try {
			return $this->db->get('localidad')->result();
		} catch (Exception $e) {
			return FALSE;
			
		}
	}
}

/* End of file Localidad_model.php */
/* Location: ./application/models/Localidad_model.php */