<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bebereceptor_model extends CI_Model {

	public function insertNewBebereceptor($bebereceptor)
	{
		try {
			$this->db->insert('bebereceptor', $bebereceptor);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllBebereceptor()
	{
		try {

			return $this->db->get('bebereceptor', 0, 10)->result();

		} 	catch (Exception $e) {
			return false;
		}
	}

	public function deleteBebereceptor($idBebeReceptor)
	{
		try {
			
			$this->$this->db->where('idBebeReceptor', $idBebeReceptor);
			return $this->db->delete('bebereceptor');
		} catch (Exception $e) {
			
		}
	}

	public function updateBebereceptor($bebereceptor, $bebeR)
	{
		try {
			$this->db->where('idBebeReceptor', $bebeR);
			return $this->db->update('bebereceptor', $bebereceptor);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getBebereceptor($idBebeReceptor)
	{
		try {
			$this->db->where('idBebeReceptor', $idBebeReceptor);
			return $this->db->get('bebereceptor')->result();
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

}

/* End of file Donantes_model.php */
/* Location: ./application/models/Donantes_model.php */