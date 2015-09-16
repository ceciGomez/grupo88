<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donantes_model extends CI_Model {

	public function insertNewDonante($donantes)
	{
		try {
			$this->db->insert('Donante', $donantes);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllDonante()
	{
		try {
			return $this->db->get('Donante', 20, 10)->result();
		} catch (Exception $e) {
			return false;
		}
	}

	public function deleteDonante($idDonate)
	{
		try {
			
			$this->$this->db->where('idDonate', $idDonate);
			return $this->db->delete('Donante');
		} catch (Exception $e) {
			
		}
	}

	public function updateDonante($donantes)
	{
		try {
			$this->db->where('idDonante', $donantes["idDonante"]);
			return $this->db->update('Donante', $donantes);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getDonante($idDonante)
	{
		try {
			$this->db->where('nroDonante', $idDonante);
			return $this->db->get('Donante')->result();
		} catch (Exception $e) {
			return false;
		}
	}
	
	

}

/* End of file Donantes_model.php */
/* Location: ./application/models/Donantes_model.php */