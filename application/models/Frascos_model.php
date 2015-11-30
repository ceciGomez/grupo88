<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Frascos_model extends CI_Model {
	public function insertNewFrasco($frascos)
	{
		try {
			$this->db->insert('frascos', $frascos);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}
	public function getAllFrascos()
	{
		try {	
		$this->db->select('*');
	    $this->db->order_by("nroFrasco","desc");
	    $this->db->from('frascos');
	    $query=$this->db->get();
	      return $query->result();
		} catch (Exception $e) {
			return false;
		}
	}
	public function deleteFrasco($nroFrasco)
	{
		try {
			$this->db->delete('frascos', $nroFrasco);
			return true;
		} catch (Exception $e) {
			return false;
		}
	}

	public function deleteFrascoHrCons($idHr,$idCon)
	{
		try {
			$this->db->where('Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento',$idCon,
				'Consentimiento_por_HojaDeRuta_HojaDeRuta_idHojaDeRuta',$idHr);
			$this->db->delete('frascos');
			return TRUE;
		} catch (Exception $e) {
			return FALSE;
		}
	}
	public function updateFrasco($frascos, $nroFrasco)
	{
		try {
			$this->db->where('nroFrasco', $nroFrasco);
			return $this->db->update('frascos', $frascos);
		} catch (Exception $e) {
			return false;
		}
		
	}
	public function getFrasco($nroFrasco)
	{
		try {
			$this->db->where('nroFrasco', $nroFrasco);
			return $this->db->get('frascos')->result();
		} catch (Exception $e) {
			return false;
		}
	}

	//obtener frasco por consentimiento y hoja de ruta
	public function getFrascosPorConsyHr($idHr,$idCon)
	{
		try {
			$this->db->where('Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento',$idCon,
				'Consentimiento_por_HojaDeRuta_HojaDeRuta_idHojaDeRuta',$idHr);
			return $this->db->get('frascos')->result();
		} catch (Exception $e) {
			return FALSE;
		}
	}

	function buscarDonanteFrasco($idfrasco)
  	{

  		$query = $this->db->query("SELECT DISTINCT d.nombre, d.apellido, d.dniDonante FROM frascos f, consentimiento_por_hojaderuta cphr, consentimiento c, donante d, hojaderuta h 
  									WHERE cphr.Consentimiento_nroConsentimiento = f.Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento AND cphr.HojaDeRuta_idHojaDeRuta = f.Consentimiento_por_HojaDeRuta_HojaDeRuta_idHojaDeRuta AND cphr.Consentimiento_nroConsentimiento = c.nroConsentimiento AND c.Donante_nroDonante = d.nroDonante AND f.nroFrasco = '".$idfrasco."'  ");
  		if ($query->num_rows() > 0 ){
	      return $query->result();
  		}else{
  			return FALSE;
	    }
  	}
  	//Devuelve el numero de frascos que tiene un consentimiento.
	public function getNumeroFrascosPorCon($Cons)
	{
		$query = $this->db->query("SELECT COUNT(*) as Num
			FROM frascos
			WHERE Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento = '".$Cons."'");
		$var = $query->result();
		return $var[0]->Num;
	}

	//Devuelve los fracos de un consentimiento
	public function getFrascosPorCon($Cons)
	{
		$query = $this->db->query("SELECT *
			FROM frascos
			WHERE Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento = '".$Cons."'");
		return $query->result();
	}
	//Devuelve los frascos vacios de un IDconsentimiento
	public function getFrascosVaciosPorCon($Cons)
	{
		$query = $this->db->query("SELECT *
			FROM frascos
			WHERE Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento = '".$Cons."' AND fechaExtraccion IS NULL");
		return $query->result();
	}
	
	
	public function getEstadoSerologia($idF){
  		
  		$query = $this->db->query("SELECT MAX(s.fechaSerologia), s.estadoSerologia
				FROM frascos f, serologia s, consentimiento c 
				WHERE f.Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento = c.nroConsentimiento 
				AND c.nroConsentimiento = s.Consentimiento_nroConsentimiento 
				AND f.nroFrasco = '".$idF."'");
		$var = $query->result();
		if ($var[0]->estadoSerologia != NULL) {
			return $var[0]->estadoSerologia;
		}else{
			return ' ';
		}
  	}


}