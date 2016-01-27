<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pmedica_model extends CI_Model {
	public function insertPmedica($unaPmedica)
	{
		try {
			$this->db->insert('prescripcionmedica', $unaPmedica);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return FALSE;
		}
	}

	public function getUnaPmedica($idPmedica)
	{
		try {
			$this->db->where('idPrescripcionMedica',$idPmedica);
			return $this->db->get('prescripcionmedica')->result();
		} catch (Exception $e) {
			return FALSE;
		}
	}


	public function getUnaPrescripcionMedica($idPmedica)
	{
		try {
			$this->db->where('idPrescripcionMedica',$idPmedica);
			return $this->db->get('prescripcionmedica')->row_array();
		} catch (Exception $e) {
			return FALSE;
		}
	}

	public function updatePmedica($unaPmedica, $idPmedica)
	/*Actualizar Una prescripcion medica */
	{
		try {
			$this->db->where('idPrescripcionMedica', $idPmedica);
			return $this->db->update('prescripcionmedica',$unaPmedica);
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
	public function getAllPmedica()
	{
		try {
			return $this->db->get('prescripcionmedica')->result();
		} catch (Exception $e) {
			return FALSE;
		}
	}
	/*Obtener prescripciones medicas discriminadas
	  por tipo de leche pasada por parametro */
	 public function getPmedicasPorTipo($tipoLeche)
	 {
	 	try {
	 		$consulta = "SELECT *
	 					FROM prescripcionmedica p
	 					WHERE p.estadoPresMedica <> 'fraccionado' 
	 						AND p.tipoDeLecheBanco = '".$tipoLeche."'";
	 		return $this->db->query($consulta)->result();
	 	} catch (Exception $e) {
	 		return FALSE;
	 	}
	 }
}

/* End of file Pmedica_model.php */
/* Location: ./application/models/Pmedica_model.php */