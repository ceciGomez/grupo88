<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consentimiento_model extends CI_Model {

	public function insertNewConsentimiento($consentimientos)
	{
		try {
			$this->db->insert('Consentimiento', $consentimientos);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllConsentimiento()
	{
		try {
			return $this->db->get('Consentimiento')->result();
		} catch (Exception $e) {
			return false;
		}
	}

	public function deleteConsentimiento($nroConsentimiento)
	{
		try {
			
			$this->$this->db->where('nroConsentimiento', $nroConsentimiento);
			return $this->db->delete('Consentimiento');
		} catch (Exception $e) {
			
		}
	}

	public function updateConsentimiento($consentimientos)
	{
		try {
			$this->db->where('nroConsentimiento', $consentimientos["nroConsentimiento"]);
			return $this->db->update('Consentimiento', $consentimientos);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getConsentimiento($nroConsentimiento)
	{
		try {
			$this->db->where('nroConsentimiento', $nroConsentimiento);
			return $this->db->get('Consentimiento');
		} catch (Exception $e) {
			return false;
		}
	}
	

}

/* End of file Consentimiento_model.php */
/* Location: ./application/models/Consentimiento_model.php */