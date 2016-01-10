<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Centros_model extends CI_Model {

	public function insertNewCentro($centro)
	{
		try {
			$this->db->insert('centrorecoleccion', $centros);

			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllCentros()
	{
		try {
			return $this->db->get('centrorecoleccion', 0, 100)->result();
		} 	catch (Exception $e) {
			return false;
		}
	}

	public function deleteCentro($idCentro)
	{
		try {
			$this->db->delete('centrorecoleccion', $idCentro);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	public function updateCentro($donantes, $nroDonante)
	{
		try {
			$this->db->where('idCentroRecoleccion', $nroDonante);
			return $this->db->update('centrorecoleccion', $donantes);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getCentro($idCentro)
	{
		try {
			$this->db->where('idCentroRecoleccion', $idCentro);
			return $this->db->get('centrorecoleccion')->result();
		} catch (Exception $e) {
			return false;
		}
	}


}

/* End of file Donantes_model.php */
/* Location: ./application/models/Donantes_model.php */