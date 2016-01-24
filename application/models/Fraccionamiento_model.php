<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fraccionamiento_model extends CI_Model {

	/*Obtener biberones por tipo de leche pasada por parametro */
	 public function getBiberonesTipoLeche($tipoLeche)
	 {
	 	try {
	 		$this->db->where('tipoDeLeche', $tipoLeche);
	 		return $this->db->get('biberon')->result();
	 	} catch (Exception $e) {
	 		return FALSE;
	 	}
	 }
	 
	public function insertFraccionamiento($fraccionamiento)
	{
		try {
			$this->db->insert('fraccionamiento', $fraccionamiento);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return FALSE;
		}
	}
	public function getAllFraccionamientos()
	{
		try {
			return $this->db->get('fraccionamiento')->result();
		} catch (Exception $e) {
			return FALSE;
		}
	}
	//obtiene un fraccionamineto para ver detalles 
	public function getUnFraccionamiento($idFraccionamiento)
	{
		try {
			$this->db->where('idFraccionamiento', $idFraccionamiento);
			return $this->db->get('fraccionamiento')->result();
		} catch (Exception $e) {
			return false;
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
	/*Obtener fracciones para un bebe */
	public function getFraccionamientosUnBr($idbebereceptor){
	$consulta = "SELECT * 
				FROM fraccionamiento f 
				WHERE f.BebeReceptor_idBebeReceptor = '".$idbebereceptor."' ";
				return $this->db->query($consulta)->result();
	}
	//modificar un fraccionamiento para cargar el consumo del bebe
	public function updateFraccionConsumo($idFraccion, $unFraccionamiento)
	{
		try {
			$this->db->where('idFraccionamiento', $idFraccion);
			return $this->db->update('fraccionamiento', $unFraccionamiento);
		} catch (Exception $e) {
			return FALSE;
		}
	}	

}

/* End of file Fraccionamiento_model.php */
/* Location: ./application/models/Fraccionamiento_model.php */