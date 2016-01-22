<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasteurizacion_model extends CI_Model {

	public function getUnaPasteurizacion($idPast)
	/*Trae una pasteurizacion que coincida con el parametro especificado */
	{
			try {
				$this->db->where('idPasteurizacion', $idPast);
				return $this->db->get('pasteurizacion')->result();
			} catch (Exception $e) {
				return FALSE;
			}
	}

	//arregla el formato de las fechas
	public function arreglarFecha($fechaParametro){
		if (isset($fechaParametro)) {
			$fechaArray = explode('-', $fechaParametro);
                         $date = new DateTime();
                         $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                         $fecha= $date->format('d/m/Y');
		} else {
			$fecha = '';
		}
		return $fecha;
	}
	//fin arreglo de formato de fechas

	public function getAllPasteurizacion()
	{
		try {
			return $this->db->get('pasteurizacion',0 ,10 )->result();
		} 	catch (Exception $e) {
			return false;
		}
	}

	public function deletePasteurizacion($nroPasteurizacion)
	{
		try {
			$this->db->where('idPasteurizacion', $nroPasteurizacion);
			$this->db->delete('pasteurizacion');
			return TRUE;
		} catch (Exception $e) {
			return FALSE;
		}
	}

	public function updatePasteurizacion($pasteurizacion, $nroPasteurizacion)
	{
		try {
			$this->db->where('idPasteurizacion', $nroPasteurizacion);
			return $this->db->update('pasteurizacion', $pasteurizacion);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getPasteurizacion($nroPasteurizacion)
	{
		try {
			$this->db->where('idPasteurizacion', $nroPasteurizacion);
			return $this->db->get('pasteurizacion')->result();
		} catch (Exception $e) {
			return false;
		}
	}

	





}

/* End of file Pasteurizacion_model.php */
/* Location: ./application/models/Pasteurizacion_model.php */