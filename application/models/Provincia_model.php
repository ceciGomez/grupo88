<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Provincia_model extends CI_Model {

	public function getUnaProvincia($idProvincia)
	{
		try {
			$this->db->where('idProvincia', $idProvincia);
			return $this->db->get('provincia')->result();
		} catch (Exception $e) {
			return false;
		}
	}

	

}

/* End of file Provincia_model.php */
/* Location: ./application/models/Provincia_model.php */