<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bebeasociado_model extends CI_Model {

	public function insertNewBebeasociado($bebeasociado)
	{
		try {
			$this->db->insert('bebeasociado', $bebeasociado);
			return $this->db->insert_id();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getAllBebeasociado()
	{
		try {

			return $this->db->get('bebeasociado', 0, 10)->result();

		} 	catch (Exception $e) {
			return false;
		}
	}

	public function deleteBebeasociado($idBebeAsociado)
	{
		try {
			
			//$this->$this->db->where('idBebeAsociado', $idBebeAsociado);
			return $this->db->delete('bebeasociado', $idBebeAsociado);
		} catch (Exception $e) {
			
		}
	}

	public function updateBebeasociado($bebeasociado, $idBA)
	{
		try {
			$this->db->where('idBebeAsociado',  $idBA);
			return $this->db->update('bebeasociado', $bebeasociado);
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function getBebeasociado($idBebeA)
	{
		try {
			$this->db->where('idBebeAsociado', $idBebeA);
			return $this->db->get('bebeasociado')->result();
		} catch (Exception $e) {
			return false;
		}
	}
	
	   //modificado, se agrego un campo mas al select 27-11-2015
	   public function getDatosBebeAsociado($unNumero){
	
   		   $this->db->select('idBebeAsociado,nombreBebeAsociado,apellidoBebeAsociado,edadGestBebAsociado,fechaNacBebeAsociado');
   		   $this->db->from('bebeasociado');
		   $this->db->where('Consentimiento_nroConsentimiento', $unNumero);
		   $consulta = $this->db->get();
		   $resultado = $consulta->row(2);
		   return $resultado;
			}

			
	// Devuelve el tipo de BebeAsociado, si es "prematuro" o "a tiempo" a traves de un idConsentimiento
		public function getTipoBBasociado($idConsenParametro){
				$query = $this->db->query("SELECT edadGestBebAsociado 
											FROM bebeasociado 
											WHERE Consentimiento_nroConsentimiento = '".$idConsenParametro."'");
  				$resultado = $query->result();
  				if ($resultado[0]->edadGestBebAsociado >36) {
  				 	$salida = 'Prematuro';
  				 } else {
  				 	$salida = 'A tiempo';
  				 }
  				return $salida;

			}
	// Devuelve tipo de leche con los parametros de entrad IDConsentimiento y la fecha de extraccion
		public function getTipoDeLeche($idC,$Fext){
			$tipoBB = $this->getTipoBBasociado($idC);
			$dias = $this->getDiasLeche($idC,$Fext);
			
			if ($tipoBB == 'A tiempo') {
				if ($dias <= 7) {
					$tipoLeche = 'Calostro';
				} elseif ($dias > 7 && $dias <= 15) {
					$tipoLeche = 'Transicion';
				} elseif ($dias > 15) {
					$tipoLeche = 'Madura';
				}

			} elseif ($tipoBB == 'Prematuro') {
				if ($dias <= 21) {
					$tipoLeche = 'Calostro';
				} elseif ($dias > 21 && $dias <= 29) {
					$tipoLeche = 'Transicion';
				} elseif ($dias > 29) {
					$tipoLeche = 'Madura';
				}
			}
			//return $tipoLeche;
			return $tipoLeche;
		}

		//Devuelve la diferencia de dias entre la leche extraida y la fecha de nacimiento del bebe asociado
		public function getDiasLeche($idC,$Fext){
			$Fnac = $this->getDatosBebeAsociado($idC);
			$Fnac1 = $Fnac->fechaNacBebeAsociado;
			$query = $this->db->query("SELECT DATEDIFF('".$Fext."','".$Fnac1."') as dias");
  				$var = $query->result();
  				return $var[0]->dias;
		}

}

/* End of file Donantes_model.php */
/* Location: ./application/models/Donantes_model.php */