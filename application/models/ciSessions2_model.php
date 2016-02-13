<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CiSessions2_model extends CI_Model {

public function getAllciSessions2()
	{		
		try {
		return $this->db->get('ci_sessions2')->result();
			
		} catch (Exception $e) {
			return FALSE;
		}	

	}

	public function getUnciSessions2($idProceso)
	{
		try {
			$this->db->where('idProceso', $idProceso);
			return $this->db->get('ci_sessions2')->result();
		} catch (Exception $e) {
			return false;
		}
	}

	public function insertciSessions2($sesiones)
	{
		try {
			$this->db->insert('ci_sessions2', $sesiones);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return FALSE;
		}
	}

	public function updateciSessions2($idProceso, $sesiones)
	{
		try {
			$this->db->where('idProceso', $idInsumo);
			return $this->db->update('ci_sessions2', $sesiones);
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
	public function deleteciSessions2($idProceso)
	{
		try {
			$this->db->where('idProceso', $idProceso);
			$this->db->delete('ci_sessions2');
			return TRUE;
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
	

}

/* End of file ciSessions2_model.php */
/* Location: ./application/models/ciSessions2_model.php */