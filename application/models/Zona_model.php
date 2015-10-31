<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Zona_model extends CI_Model 
{
	public function getNombreZona($idZona)
	{
		try {
			$this->db->select('nombreZona');
   			$this->db->from('zona');
		   	$this->db->where('idZona', $idZona);
		   	$consulta = $this->db->get();
		   	$resultado = $consulta->row(2);
		   return $resultado;
		} catch (Exception $e) {
			return false;
		}
	}
	

}
/* End of file Zona_model.php */

/* Location: ./application/models/Zona_model.php */
