<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguimientoba_model extends CI_Model {

	public function insertNewSeguimientoBa($seguimientoBa)
	{
		try {
			$this->db->insert('seguimientobebeasociado', $seguimientoBa);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllSeguimientoBa()
	{
		try {

			return $this->db->get('seguimientobebeasociado', 0, 100000)->result();

		} 	catch (Exception $e) {
			return false;
		}
	}

	public function deleteSeguimientoBa($idSeguimiento)
	{
		try {
			
			$this->$this->db->where('idSeguimiento', $idSeguimiento);
			return $this->db->delete('seguimientobebeasociado');
		} catch (Exception $e) {
			
		}
	}

	public function updateSeguimientoBa($seguimientoBa)
	{
		try {
			$this->db->where('idSeguimiento', $seguimientoBa["idSeguimiento"]);
			return $this->db->update('seguimientobebeasociado', $seguimientoBa);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getSeguimientoBa($idSeguimiento)
	{
		try {
			$this->db->where('idSeguimiento', $idSeguimiento);
			return $this->db->get('seguimientobebeasociado')->result();
		} catch (Exception $e) {
			return false;
		}
	}
	
	
}

/* End of file Donantes_model.php */
/* Location: ./application/models/Donantes_model.php */