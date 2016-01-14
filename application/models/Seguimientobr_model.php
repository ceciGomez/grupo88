<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seguimientobr_model extends CI_Model {

	public function insertNewSeguimientoBr($seguimientoBr)
	{
		try {
			$this->db->insert('seguimientobebereceptor', $seguimientoBr);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllSeguimientoBr()
	{
		try {

			return $this->db->get('seguimientobebereceptor', 0, 100000)->result();

		} 	catch (Exception $e) {
			return false;
		}
	}
	public function getUnSeguimBr($idSeguimiento)
	{
		try {
			$this->db->where('idSegBebeReceptor', $idSeguimiento);
			return $this->db->get('seguimientobebereceptor')->result();
		} catch (Exception $e) {
			return false;
		}
	}
	public function deleteSeguimientoBr($idSeguimiento)
	{
		try {
			
			$this->$this->db->where('idSegBebeReceptor', $idSeguimiento);
			return $this->db->delete('seguimientobebereceptor');
		} catch (Exception $e) {
			
		}
	}

	public function updateSeguimientoBr($seguimientoBr, $idSeguimiento)
	{
		try {
			$this->db->where('idSegBebeReceptor', $idSeguimiento);
			return $this->db->update('seguimientobebereceptor', $seguimientoBr);
		} catch (Exception $e) {
			return false;
		}
		
	}
	public function getSeguimientosUnBr($idbebereceptor){
	$consulta = "SELECT * 
				FROM seguimientobebereceptor s 
				WHERE s.BebeReceptor_idBebeReceptor = '".$idbebereceptor."' ";
				return $this->db->query($consulta)->result();
	}
	
	public function ultimoSeguimiento($idbebereceptor){
	$consulta = "SELECT max(fechaSeguimiento) as ultimaFecha
				FROM seguimientobebereceptor sbr
				WHERE sbr.BebeReceptor_idBebeReceptor = '".$idbebereceptor."' ";
				return $this->db->query($consulta)->result();
	}	
	
}

/* End of file Donantes_model.php */
/* Location: ./application/models/Donantes_model.php */