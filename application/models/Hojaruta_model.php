<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hojaruta_model extends CI_Model {

	public function newhojaruta($hojaruta)
	{
		try {
			$this->db->insert('donante', $hojaruta);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}
	/* Obtener todas las hojas de rutas en una semana en particular

	DBERIA TRAER POR SEMANA LAS HOJAS DE RUTAS QUE SEAN REALIZADAS EN ESA
	MISMA SEMANA
	HACER LUIS :)
	*/
	public function getAllhr()
	{
		try {
			//return $this->db->get('donante', 0, 10)->result();
		$this->db->select('*');
	    $this->db->order_by("idHojaDeRuta","desc");
	    $this->db->from('hojaderuta');
	    $query=$this->db->get();
	      return $query->result();
		} catch (Exception $e) {
			return false;
		}
	}

}

/* End of file Donantes_model.php */
/* Location: ./application/models/Donantes_model.php */