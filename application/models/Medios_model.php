<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Medios_model extends CI_Model 
{
	public function getAllMedios()
	{		
		try {
		return $this->db->get('medios')->result();
			
		} catch (Exception $e) {
			return FALSE;
		}	

	}

	public function getUnMedio($idMedio)
	{
		try {
			$this->db->where('idMedio', $idMedio);
			return $this->db->get('medios')->result();
		} catch (Exception $e) {
			return false;
		}
	}

	public function insertMedio($medio)
	{
		try {
			$this->db->insert('medios', $medio);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return FALSE;
		}
	}

	public function updateMedio($idMedio, $medio)
	{
		try {
			$this->db->where('idMedio', $idMedio);
			return $this->db->update('medios', $medio);
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
	public function deleteMedio($idMedio)
	{
		try {
			$this->db->where('idMedio', $idMedio);
			$this->db->delete('medios');
			return TRUE;
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
}