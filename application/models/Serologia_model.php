<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Serologia_model extends CI_Model {

	public function insertNewSerologia($serologia)
	{
		try {
			$this->db->insert('serologia', $serologia);

			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllserologia()
	{
		try {

			return $this->db->get('serologia', 0, 10)->result();

		} catch (Exception $e) {
			return false;
		}
	}

	public function deleteSerologia($idserologia)
	{
		try {
			
			$this->$this->db->where('idserologia', $idserologia);
			return $this->db->delete('serologia');
		} catch (Exception $e) {
			
		}
	}

	public function updateSerologia($serologia, $nroSerologia)
	{
		try {
			$this->db->where('nroSerologia', $nroSerologia);
			return $this->db->update('serologia', $serologia);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getSerologia($nroSerologia)
	{
		try {
			$this->db->where('nroSerologia', $nroSerologia);
			return $this->db->get('serologia')->result();
		} catch (Exception $e) {
			return false;
		}
	}

// Trae todos las serologias de un consentimiento
	public function getSerologiasConsentimiento($idConsentimiento)
	{
		try {
			$this->db->where('Consentimiento_nroConsentimiento', $idConsentimiento);
			return $this->db->get('serologia')->result();
		} catch (Exception $e) {
			return false;
		}
	}
	public function serologiaConsentimiento($idConsentimiento){
	$consulta = "SELECT max(fechaSerologia) as ultimaFecha
				FROM serologia s, consentimiento c
				WHERE s.Consentimiento_nroConsentimiento = c.nroConsentimiento AND s.Consentimiento_nroConsentimiento = '".$idConsentimiento."' ";
				return $this->db->query($consulta)->result();
				}

	
// FUNCION A LLAMAR CUANDO LA SEROLOGIA ES POSITIVA.
// CAMBIA EL ESTADO DE LOS FRASCOS MENORES A 30 DIAS DE LA FECHA ACTUAL
public function accionSeroligiaPositiva($nroCons){
				$consulta = "SELECT datediff(now(),`fechaExtraccion`) as ffee, nroFrasco
								FROM `frascos` 
								WHERE `Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento` = ".$nroCons." ";
				$tabla = $this->db->query($consulta)->result();
				//return $this->db->query($consulta)->result();
				//segunda parte, hace el tratamiento de la tabla resultado de la primera parte, evalua si es menor a 30 dias y cambia los estados del frasco.
				foreach ($tabla as $value) {
					if ($value->ffee <= 30) {
						//echo "frasco nro".$value->nroFrasco."dias: ".$value->ffee."<br>";
						$this->frascos_model->actualizarEstado($value->nroFrasco);

					}
				}
	}




}

/* End of file Serologia_model.php */
/* Location: ./application/models/Serologia_model.php */