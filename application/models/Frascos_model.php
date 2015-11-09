<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frascos_model extends CI_Model {

	public function insertNewFrasco($frascos)
	{
		try {
			$this->db->insert('frascos', $frascos);

			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllFrascos()
	{
		try {	
		$this->db->select('*');
	    $this->db->order_by("nroFrasco","desc");
	    $this->db->from('frascos');
	    $query=$this->db->get();
	      return $query->result();

		} catch (Exception $e) {
			return false;
		}
	}

	public function deleteFrasco($nroFrasco)
	{
		try {
			$this->db->delete('frascos', $nroFrasco);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	public function updateDonante($frascos, $nroFrasco)
	{
		try {
			$this->db->where('nroFrasco', $nroFrasco);
			return $this->db->update('frascos', $frascos);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getFrasco($nroFrasco)
	{
		try {
			$this->db->where('nroFrasco', $nroFrasco);
			return $this->db->get('frascos')->result();
		} catch (Exception $e) {
			return false;
		}
	}

	

}

/* End of file Frascos_model.php */
/* Location: ./application/models/Frascos_model.php */