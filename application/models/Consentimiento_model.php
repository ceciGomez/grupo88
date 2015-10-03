<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consentimiento_model extends CI_Model {

	public function insertNewConsentimiento($consentimientos)
	{
		try {
			$this->db->insert('consentimiento', $consentimientos);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllConsentimiento()
	{
		try {
			return $this->db->get('consentimiento',0 , 10)->result(); 

		} catch (Exception $e) {
			return false;
		}
	}

	public function deleteConsentimiento($nroConsentimiento)
	{
		try {
			
			$this->$this->db->where('nroConsentimiento', $nroConsentimiento);
			return $this->db->delete('consentimiento');
		} catch (Exception $e) {
			
		}
	}

	public function updateConsentimiento($consentimientos)
	{
		try {
			$this->db->where('nroConsentimiento', $consentimientos["nroConsentimiento"]);
			return $this->db->update('consentimiento', $consentimientos);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getConsentimiento($nroConsentimiento)
	{
		try {
			$this->db->where('nroConsentimiento', $nroConsentimiento);
			return $this->db->get('consentimiento')->result();
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
	



/* End of file Consentimiento_model.php */
/* Location: ./application/models/Consentimiento_model.php */