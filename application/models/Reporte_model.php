<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporte_model extends CI_Model {

	public function repo_madresActivas(){
		$consulta = "
			SELECT *
			FROM consentimiento c, donante d
			WHERE c.Donante_nroDonante = d.nroDonante AND (c.fechaHasta BETWEEN '2015-10-1' AND '2015-11-1')

			UNION

			SELECT *
			FROM consentimiento c, donante d
			WHERE c.Donante_nroDonante = d.nroDonante AND c.fechaHasta IS NULL
		";
		$this->db->query($consulta);
		return $this->db->query($consulta)->result();
	}

}

/* End of file Reporte_model.php */
/* Location: ./application/models/Reporte_model.php */