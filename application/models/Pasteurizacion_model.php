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

}

/* End of file Pasteurizacion_model.php */
/* Location: ./application/models/Pasteurizacion_model.php */