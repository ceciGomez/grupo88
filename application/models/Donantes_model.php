<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donantes_model extends CI_Model {

	public function insertNewDonante($donantes)
	{
		try {
			$this->db->insert('donante', $donantes);

			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllDonante()
	{
		try {

			return $this->db->get('donante', 0, 10)->result();

		} catch (Exception $e) {
			return false;
		}
	}

	public function deleteDonante($idDonante)
	{
		try {
			return $this->db->delete('donante', $idDonante)->result();
		} catch (Exception $e) {
			return false;
		}
	}

	public function updateDonante($donantes, $nroDonante)
	{
		try {
			$this->db->where('nroDonante', $nroDonante);
			return $this->db->update('donante', $donantes);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getDonante($idDonante)
	{
		try {
			$this->db->where('nroDonante', $idDonante);
			return $this->db->get('donante')->result();
		} catch (Exception $e) {
			return false;
		}
	}
	public function getNAD($unIdDonante){
	
   			$this->db->select('nombre,apellido,dniDonante');
   			$this->db->from('donante');
		   $this->db->where('nroDonante', $unIdDonante);
		   $consulta = $this->db->get();
		   $resultado = $consulta->row(2);
		   return $resultado;
			}

	
	

}

/* End of file Donantes_model.php */
/* Location: ./application/models/Donantes_model.php */