<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frascos_model extends CI_Model {

	public function insertNewFrasco($frascos)
	{
		try {
			$this->db->insert('frascos', $frascos);

			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllFrascos()
	{
		try {	
		$this->db->select('*');
	    $this->db->order_by("nroFrasco","desc");
	    $this->db->from('frascos');
	    $query=$this->db->get();
	      return $query->result();

		} catch (Exception $e) {
			return false;
		}
	}

	public function deleteFrasco($nroFrasco)
	{
		try {
			$this->db->delete('frascos', $nroFrasco);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	public function updateDonante($frascos, $nroFrasco)
	{
		try {
			$this->db->where('nroFrasco', $nroFrasco);
			return $this->db->update('frascos', $frascos);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getFrasco($nroFrasco)
	{
		try {
			$this->db->where('nroFrasco', $nroFrasco);
			return $this->db->get('frascos')->result();
		} catch (Exception $e) {
			return false;
		}
	}

	function buscarDonanteFrasco($idfrasco)
  	{
  		$query = $this->db->query("SELECT DISTINCT d.nombre, d.apellido 
  									FROM frascos f, consentimiento_por_hojaderuta cphr, consentimiento c, donante d, hojaderuta h 
  									WHERE cphr.Consentimiento_nroConsentimiento = f.Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento AND cphr.HojaDeRuta_idHojaDeRuta = f.Consentimiento_por_HojaDeRuta_HojaDeRuta_idHojaDeRuta AND cphr.Consentimiento_nroConsentimiento = c.nroConsentimiento AND c.Donante_nroDonante = d.nroDonante AND f.nroFrasco = ".$idfrasco."");
  		return $query->result();
  	}

}

/* End of file Frascos_model.php */
/* Location: ./application/models/Frascos_model.php */