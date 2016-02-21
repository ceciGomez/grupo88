<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biberon_model extends CI_Model {
	/* Todos los biberones */
	public function getAllBiberones()
	{
	try {
			return $this->db->get('biberon',0 ,100 )->result();
		} 	catch (Exception $e) {
			return false;
		}
	}
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

	public function updateBiberon($unBiberon, $idBib)
	{
		try {
			$this->db->where('idBiberon', $idBib);
			return $this->db->update('biberon', $unBiberon);
		} catch (Exception $e) {
			return FALSE;
		}
	}
	public function insertNewBiberon($unBiberon)
{
	try {
		$this->db->insert('biberon', $unBiberon);
		return $this->db->insert_id();
	} catch (Exception $e) {
		return false;
	}
}

	public function mostrarBiberones($idPasteurizacion)
	{
		try {
			$this->db->where('Pasteurizacion_idPasteurizacion', $idPasteurizacion);
			return $this->db->get('biberon',0 ,100 )->result();
		} 	catch (Exception $e) {
			return false;
		}
	}

	public function buscaPastIncompleta($idPast)
	{
		try {
			$query= $this->db->query("SELECT *
			  	FROM biberon b
			  	WHERE b.Pasteurizacion_idPasteurizacion = $idPast ");
			return $query->result();
		 } catch (Exception $e) {
			return false;
		} 
	}

}
