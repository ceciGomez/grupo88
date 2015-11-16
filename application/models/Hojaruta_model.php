<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hojaruta_model extends CI_Model {

	public function newhojaruta($hojaruta)
	{
		try {
			$this->db->insert('hojaderuta', $hojaruta);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return FALSE;
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
                         $fecha= $date->format('d/m/Y');
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
			return $this->db->get('consentimiento')->result();

	}
	//fin

	//Obtiene los consentimientos por zona, la zona se pasa por parametro
	//dps controlar los resulados nulos
	public function getConsentimientosPorZona($idZonaParametro){
		$this->db->where('zona_idzona',$idZonaParametro);
			return $this->db->get('consentimiento')->result();
	}

	//devuelve todas las hojas de rutas
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
			return FALSE;
		}
	}
	//fin de obtener todas las hr

	//devuelve todos los consentimientos de una zona determinada mas los de acorde al nombre del dia seleccionado menos los de esa zona seleccionada
	public function getConsentimientosPorZonaYDia($zonaParam, $diaParametro)
	{
		$query = "SELECT * 
		FROM consentimiento 
		WHERE Zona_idZona = '".$zonaParam."' UNION 
		SELECT * FROM consentimiento WHERE dia LIKE '".$diaParametro."%' AND Zona_idZona <> '".$zonaParam."'";
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
	//obtiene una hoja de ruta especifica
	public function getUnaHRuta($idHRuta)
	{
		try {
			$this->db->where('idHojaDeRuta', $idHRuta);
			return $this->db->get('hojaderuta')->result();
		} catch (Exception $e) {
			return FALSE;
		}
	}
	public function getUnaHRutaContar($idHRuta)
	//cuenta cuantas asociaciones tiene en la tabla intermedia
	{
		try {
			$query = "SELECT HojaDeRuta_idHojaDeRuta , COUNT( * ) as cantDonante
			FROM consentimiento_por_hojaderuta
			WHERE HojaDeRuta_idHojaDeRuta = '".$idHRuta."'";
			return $this->db->query($query)->result();
		} catch (Exception $e) {
			return FALSE;
		}
	}
	
	//funcion que va a crear cada registro de consentimiento_por_hojaderuta
	public function newConsxHR($consxHr)
	{
		try {
			$this->db->insert('consentimiento_por_hojaderuta', $consxHr);
			return $this->db->insert_id();			
		} catch (Exception $e) {
			return FALSE;
		}
		
	}
	//obtener todas las consentimientos de una hr , consulta en la tabla de consentimiento_por_hojaderuta
	public function getConsxHr($param)	
	{
		try {
			$this->db->where('HojaDeRuta_idHojaDeRuta', $param);
			return $this->db->get('consentimiento_por_hojaderuta')->result();
		} catch (Exception $e) {
			return FALSE;
		}
	}
	//quitar consentimientos
	public function quitarConsentimiento($idCon, $idHr)	
	{
		try {
			$this->db->where('Consentimiento_nroConsentimiento', $idCon, 'HojaDeRuta_idHojaDeRuta',$idHr );
			$this->db->delete('consentimiento_por_hojaderuta');
			return TRUE;
		} catch (Exception $e) {
			return FALSE;
		}
	}

	//editar una hoja de ruta
	public function updateHR($hojaRuta, $idHr)
	{
		try {
			$this->db->where('idHojaDeRuta', $idHr);
			return $this->db->update('hojaderuta', $hojaRuta);
		} catch (Exception $e) {
			return FALSE;
		}
		
	}
	 //Devuelve los consentimientos activos que no estan incluidos en una HR pasado como parametro
 	public function getConsActivoParaHR($idHRparametro){
 	 $query = $this->db->query("SELECT * 
         FROM consentimiento
         WHERE consentimiento.estadoConsent = 0 AND consentimiento.nroConsentimiento NOT IN(
        	SELECT Consentimiento_nroConsentimiento
            FROM consentimiento_por_hojaderuta
            WHERE HojaDeRuta_idHojaDeRuta = '".$idHRparametro."' )");
 	 return $query->result();
 }

 function buscar($query) {
	    $this->db->like('idHojaDeRuta', $query);
	   	
	    $query = $this->db->get('hojaderuta');
	    if ($query->num_rows() > 0){
	      return $query->result();
	    }else{
	      return FALSE;
	    }
  	}

  function totalResultados($query){
	    $this->db->like('idHojaDeRuta', $query);
	    $this->db->or_like('idHojaDeRuta', $query);
	    $query = $this->db->get('hojaderuta');
	    return $query->num_rows();
  	}
	

}

/* End of file Hojaruta_model.php */
/* Location: ./application/models/Hojaruta_model.php */