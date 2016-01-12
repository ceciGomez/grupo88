<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biberon_model extends CI_Model {
	public function getUnBiberon($idBiberon)
	/*Obtener un biberon en particular a partir de un id recibido */
	{
		try {
			$this->db->where('idBiberon', $idBiberon);
			return $this->db->get('biberon')->result();
		} catch (Exception $e) {
			return FALSE;
		}
	}


}

/* End of file Biberon_model.php */
/* Location: ./application/models/Biberon_model.php */