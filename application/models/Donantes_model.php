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
			//return $this->db->get('donante', 0, 10)->result();
		$this->db->select('*');
	    $this->db->order_by("nroDonante","desc");
	    $this->db->from('donante');
	    $query=$this->db->get();
	      return $query->result();
		} catch (Exception $e) {
			return false;
		}
	}

	public function deleteDonante($idDonante)
	{
		try {
			$this->db->delete('donante', $idDonante);
			return true;
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
	public function getNAD($unIdDonante)
	{
	
   			$this->db->select('nombre,apellido,dniDonante');
   			$this->db->from('donante');
		   $this->db->where('nroDonante', $unIdDonante);
		   $consulta = $this->db->get();
		   $resultado = $consulta->row(2);
		   return $resultado;
	}

	function buscar($query) {
	    $this->db->like('dniDonante', $query);
	   	$this->db->or_like('apellido', $query);
	    $query = $this->db->get('donante');
	    if ($query->num_rows() > 0){
	      return $query->result();
	    }else{
	      return FALSE;
	    }
  	}

   	function totalResultados($query){
	    $this->db->like('dniDonante', $query);
	    $this->db->or_like('dniDonante', $query);
	    $query = $this->db->get('donante');
	    return $query->num_rows();
  	}

}

/* End of file Donantes_model.php */
/* Location: ./application/models/Donantes_model.php */