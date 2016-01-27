<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biberon_model extends CI_Model {
	public function getUnBiberon($idBiberon)
	/*Obtener un biberon en particular a partir de un id recibido */
	{
		try {
			$this->db->where('idBiberon', $idBiberon);
			return $this->db->get('biberon')->result();
		} catch (Exception $e) {
			return FALSE;
		}
	}

	/*Obtener biberones que no esten fraccionados 
	y que esten en condiciones de ser fraccionados */
	public function getBiberonesSinFraccionar($tipoDeLeche)
	{
		try {		
			$this->db->where('estadoBiberon', 'ok');
			$this->db->where('tipoDeLeche', $tipoDeLeche);
			return $this->db->get('biberon')->result();
			
		} catch (Exception $e) {
			return FALSE;
		}
	}

	public function updateBiberon($idBiberon, $biberon)
	{
		try {
			$this->db->where('idBiberon', $idBiberon);
			return $this->db->update('biberon', $biberon);
		} catch (Exception $e) {
			return FALSE;
		}
	}
	public function insertNewDonante($biberones)
{
	try {
		$this->db->insert('biberon', $biberones);
		return $this->db->insert_id();
	} catch (Exception $e) {
		return false;
	}
}

}
