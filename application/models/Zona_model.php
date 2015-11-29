<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Zona_model extends CI_Model 
{
	public function getNombreZona($idZona)
	{
		try {
			$this->db->select('nombreZona');
   			$this->db->from('zona');
		   	$this->db->where('idZona', $idZona);
		   	$consulta = $this->db->get();
		   	$resultado = $consulta->row(2);
		   return $resultado;
		} catch (Exception $e) {
			return false;
		}
	}
	public function getUnaZona($idZona)
	{
		try {
			$this->db->where('idZona', $idZona);
			return $this->db->get('zona')->result();
		} catch (Exception $e) {
			return false;
		}
	}
	public function getAllZona()
	{		
		try {
		return $this->db->get('zona')->result();
			
		} catch (Exception $e) {
			return FALSE;
		}	

	}
	public function insertZona($zona)
	{
		try {
			$this->db->insert('zona', $zona);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return FALSE;
		}
	}
	public function updateZona($idZona, $zona)
	{
		try {
			$this->db->where('idZona', $idZona);
			return $this->db->update('zona', $zona);
		} catch (Exception $e) {
			return FALSE;
		}
	}
	public function deleteZona($idZona)
	{
		try {
			$this->db->where('idZona', $idZona);
			$this->db->delete('zona');
			return TRUE;
		} catch (Exception $e) {
			return FALSE;
		}
	}
}
/* End of file Zona_model.php */

/* Location: ./application/models/Zona_model.php */
