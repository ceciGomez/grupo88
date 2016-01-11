<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporte_model extends CI_Model {

	public function repo_madresActivas($fechaInicio,$fechaFin){
		$consulta = "
			SELECT *
			FROM consentimiento c, donante d
			WHERE c.Donante_nroDonante = d.nroDonante 
			AND (c.fechaHasta BETWEEN '".$fechaInicio."' AND '".$fechaFin."')
			UNION
			SELECT *
			FROM consentimiento c, donante d
			WHERE c.Donante_nroDonante = d.nroDonante 
			AND c.fechaHasta IS NULL AND c.fechaDesde <='".$fechaFin."';
			";
		
		$this->db->query($consulta);
		return $this->db->query($consulta)->result();
	}

	public function repo_AllmadresActivas(){
		$consulta = "
			SELECT *
			FROM consentimiento c, donante d
			WHERE c.Donante_nroDonante = d.nroDonante

			UNION

			SELECT *
			FROM consentimiento c, donante d
			WHERE c.Donante_nroDonante = d.nroDonante AND c.fechaHasta IS NULL
		";
		$this->db->query($consulta);
		return $this->db->query($consulta)->result();
	}

	public function buscarHojaDeRuta($hr)
	{
		$consulta = "SELECT * 
					FROM hojaderuta, consentimiento_por_hojaderuta
					WHERE idHojaDeRuta = HojaDeRuta_idHojaDeRuta AND idHojaDeRuta = '".$hr."'";

		try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->row_array();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getDay($fecha)	
	{
		
		setlocale(LC_ALL,"es_RA");
		$date = DateTime::createFromFormat("d-m-Y", $fecha);
		$day = strftime("%A",$date->getTimestamp());
		$dias = array(
				"Sunday" => "Domingo",
				"Monday" => "Lunes",
				"Tuesday" => "Martes",
				"Wednesday" => "Miercoles",
				"Thursday" => "Jueves",
				"Friday" => "Viernes",
				"Saturday" => "Sábado");
		return $dias[$day];
	}

	public function getNombreZona($zona)
	{
		$consulta = "SELECT * FROM zona WHERE idZona = '".$zona."'";
		try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->row_array();
		} catch (Exception $e) {
			return false;
		}	
	}

	public function getConsentimientos($hr)
	{
		$consulta = "SELECT * 
					FROM hojaderuta, consentimiento_por_hojaderuta
					WHERE idHojaDeRuta = HojaDeRuta_idHojaDeRuta AND idHojaDeRuta = '".$hr."'";

		try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->result_array();
		} catch (Exception $e) {
			return false;
		}	
	}

	public function getConsentimiento($consentimiento)
	{
		$consulta = "SELECT * 
					FROM consentimiento, donante
					WHERE Donante_nroDonante = nroDonante AND nroConsentimiento = '".$consentimiento."'";

		try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->row_array();
		} catch (Exception $e) {
			return false;
		}	
	}
}

/* End of file Reporte_model.php */
/* Location: ./application/models/Reporte_model.php */