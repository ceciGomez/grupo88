<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Insumos_model extends CI_Model 
{
	public function getAllInsumos()
	{		
		try {
		return $this->db->get('insumo')->result();
			
		} catch (Exception $e) {
			return FALSE;
		}	

	}

	public function getUnInsumo($idInsumo)
	{
		try {
			$this->db->where('idInsumo', $idInsumo);
			return $this->db->get('insumo')->result();
		} catch (Exception $e) {
			return false;
		}
	}

	public function insertInsumo($insumo)
	{
		try {
			$this->db->insert('insumo', $insumo);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return FALSE;
		}
	}

	public function updateInsumo($idInsumo, $insumo)
	{
		try {
			$this->db->where('idInsumo', $idInsumo);
			return $this->db->update('insumo', $insumo);
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
	public function deleteInsumo($idInsumo)
	{
		try {
			$this->db->where('idInsumo', $idInsumo);
			$this->db->delete('insumo');
			return TRUE;
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
}