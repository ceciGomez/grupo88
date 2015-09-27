<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bebeasociado_model extends CI_Model {

	public function insertNewBebeasociado($bebeasociado)
	{
		try {
			$this->db->insert('bebeasociado', $bebeasociado);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllBebeasociado()
	{
		try {

			return $this->db->get('bebeasociado', 0, 10)->result();

		} 	catch (Exception $e) {
			return false;
		}
	}

	public function deleteBebeasociado($idBebeAsociado)
	{
		try {
			
			$this->$this->db->where('idBebeAsociado', $idBebeAsociado);
			return $this->db->delete('bebeasociado');
		} catch (Exception $e) {
			
		}
	}

	public function updateBebeasociado($bebeasociado)
	{
		try {
			$this->db->where('idBebeAsociado', $bebeasociado["idBebeAsociado"]);
			return $this->db->update('bebeasociado', $bebeasociado);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getBebeasociado($idBebeAsociado)
	{
		try {
			$this->db->where('idBebeAsociado', $idBebeAsociado);
			return $this->db->get('bebeasociado')->result();
		} catch (Exception $e) {
			return false;
		}
	}
	
	public function obtenerUltimoId(){
		try {
		return  $this->db->insert_id()->result();
     
		} catch (Exception $e) {
			return false;
		}
	}

}

/* End of file Donantes_model.php */
/* Location: ./application/models/Donantes_model.php */