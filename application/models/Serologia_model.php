<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serologia_model extends CI_Model {

	public function insertNewSerologia($serologia)
	{
		try {
			$this->db->insert('serologia', $serologia);

			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllserologia()
	{
		try {

			return $this->db->get('serologia', 0, 10)->result();

		} catch (Exception $e) {
			return false;
		}
	}

	public function deleteSerologia($idserologia)
	{
		try {
			
			$this->$this->db->where('idserologia', $idserologia);
			return $this->db->delete('serologia');
		} catch (Exception $e) {
			
		}
	}

	public function updateSerologia($serologia, $nroSerologia)
	{
		try {
			$this->db->where('nroSerologia', $nroSerologia);
			return $this->db->update('serologia', $serologia);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getSerologia($idSerologia)
	{
		try {
			$this->db->where('idSerologia', $idSerologia);
			return $this->db->get('serologia')->result();
		} catch (Exception $e) {
			return false;
		}
	}

// Trae todos las serologias de un consentimiento
	public function getSerologiasConsentimiento($idConsentimiento)
	{
		try {
			$this->db->where('Consentimiento_nroConsentimiento', $idConsentimiento);
			return $this->db->get('serologia')->result();
		} catch (Exception $e) {
			return false;
		}
	}


}

/* End of file Serologia_model.php */
/* Location: ./application/models/Serologia_model.php */