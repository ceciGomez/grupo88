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
	 		return false;
	 	}
	 }

	

}

/* End of file Fraccionamiento_model.php */
/* Location: ./application/models/Fraccionamiento_model.php */