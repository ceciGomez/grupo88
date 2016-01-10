<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pmedica_model extends CI_Model {
	public function insertPmedica($unaPmedica)
	{
		try {
			$this->db->insert('prescripcionmedica', $unaPmedica);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return FALSE;
		}
	}
}

/* End of file Pmedica_model.php */
/* Location: ./application/models/Pmedica_model.php */