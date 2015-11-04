<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hojaruta_model extends CI_Model {

	public function newhojaruta($hojaruta)
	{
		try {
			$this->db->insert('hojaderuta', $hojaruta);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}
	

	//Obtiene las hojas de ruta del mismo numero de semana del año.
	public function getWeekhr(){
		
		//SELECT *, DAYNAME(`fechaRecorrido`) as dia FROM `hojaderuta` WHERE (WEEK(`fechaRecorrido`)) = WEEK(CURRENT_DATE())
		$query = $this->db->query("SELECT *, DAYOFWEEK(`fechaRecorrido`) as dia FROM `hojaderuta` WHERE (WEEK(`fechaRecorrido`)) = WEEK(CURRENT_DATE())");
		return $query->result();
	}
	

	//transforma el numero de dia de la semana a nombre del dia de la semana
	public function transformarNumeroDia($diaIngles){
		switch ($diaIngles) {
			case '1': 
				$diaCaste = 'Domingo';
				break;
			case '2': 
				$diaCaste = 'Lunes';
				break;
			case '3': 
				$diaCaste = 'Martes';
				break;
			case '4': 
				$diaCaste = 'Miercoles';
				break;
			case '5': 
				$diaCaste = 'Jueves';
				break;
			case '6': 
				$diaCaste = 'Viernes';
				break;
			case '7': 
				$diaCaste = 'Sabado';
				break;
			
			
			default:
				# code...
				break;
		}
		return $diaCaste;
	}
	//arregla el formato de las fechas
	public function arreglarFecha($fechaParametro){
		if (isset($fechaParametro)) {
			$fechaArray = explode('-', $fechaParametro);
                         $date = new DateTime();
                         $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                         $fecha= $date->format('d-m-Y');
		} else {
			$fecha = '';
		}
		return $fecha;
	}
	//fin arreglo de formato de fechas

	//obtiene los consentimientos por dia, el dia es por parametro
	//dps controlar los resulados nulos
	public function getConsentimientosPorDia($diaParametro){  

		$this->db->where('dia',$diaParametro);
			return $this->db->get('hojaderuta')->result();

	}
	//fin

	//Obtiene los consentimientos por zona, la zona se pasa por parametro
	//dps controlar los resulados nulos
	public function getConsentimientosPorZona($idZonaParametro){
		$this->db->where('zona_idzona',$idZonaParametro);
			return $this->db->get('consentimiento')->result();
	}


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

	//devuelve todos los consentimientos de una zona determinada mas los de acorde al nombre del dia seleccionado menos los de esa zona seleccionada
	public function getConsentimientosPorZonaYDia($zonaParam, $diaParametro)
	{
		$query = "SELECT * FROM consentimiento WHERE Zona_idZona = '".$zonaParam."' UNION SELECT * FROM consentimiento WHERE dia LIKE '".$diaParametro."%' AND Zona_idZona <> '".$zonaParam."'";
		return $this->db->query($query)->result();
	}
	//devuelve el nombre del dia de una fecha pasada por parametro
	public function getNumerDay($diaParametro)
	{
		$query = "SELECT DAYOFWEEK('".$diaParametro."') as dia";
		$dia = $this->db->query($query)->result();
		
		$nombreDia = $this->transformarNumeroDia($dia[0]->dia);
		return $nombreDia;
	}
	public function getUnaHRuta($idHRuta)
	{
		# code...
	}

}

/* End of file Hojaruta_model.php */
/* Location: ./application/models/Hojaruta_model.php */