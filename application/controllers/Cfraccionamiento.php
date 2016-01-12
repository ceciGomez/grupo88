<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cfraccionamiento extends CI_Controller {

	public function view($page="home", $param1="", $param2="",$param3="")
	{
		
		if ( ! file_exists(APPPATH.'/views/fraccionamiento/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
     switch ($page) {
			
			case 'verBiberonesPorTipo':
				$data['biberonesPorTipo'] =$this->fraccionamiento_model->getBiberonesTipoLeche($param1);
				//var_dump($data['biberonesPorTipo'] );
				$data['tipoLeche'] = $param1;
				break;
			case 'verPmedicasPorTipo':
				$data['pmedicasPorTipo']= $this->fraccionamiento_model->getPmedicasPorTipo($param1);
				$data['tipoLeche'] = $param1;
				break;
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('fraccionamiento/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}
	public function registrarFrac_sel()
	/* Funcion que capta el valor elegido del tipo de leche a buscar
	para obtener biberones y realiza la busqueda  */
	{
		$tipoLeche = $this->input->post('tipoLeche');
		redirect('Cfraccionamiento/view/verPmedicasPorTipo/'.$tipoLeche,'refresh');
	}

	public function fraccionarBiberon($idBiberon)
	/*  */	
	{
		
	}
	public function agregarPmedicas()
	{ 
		$volTotal= 0;
		$tipoLeche = $this->input->post('tipoLeche');
		
			foreach ($this->input->post("consSel") as $value) {
				$pMedica = $this->pmedica_model->getUnaPmedica("$value");
				if ($pMedica) {
					/*Suma el volumen total entre las prescripcioes seleccionadas */
					$volTotal = $volTotal + $pMedica[0]->cant_tomas * $pMedica[0]->volumen;
					//var_dump($volTotal);
				} else {
					# code...
				}
			} //end foreach

			/*Busca los biberones que coincidan con el tipo de leche de la prescripciones 
			seleccionadas */
			$biberones = $this->fraccionamiento_model->getBiberonesTipoLeche("$tipoLeche");
			
			/*Volumen fraccionado, sera utilizado para controlar que se cumplan todas
			las fracciones de prescripciones medicas */
			$volFraccionado = 0;
			
			//numero de orden en el arreglo de biberones
			$orden = 0;
			foreach ($this->input->post("consSel") as $value) {
				$pMedica = $this->pmedica_model->getUnaPmedica("$value");
				if ($volTotal == $volFraccionado) {
				//se cumplio las demandas de las prescripciones medicas
				} else {
					//Se elige un biberon y se fracciona.
					$unBiberon = $this->biberon_model->getUnBiberon($biberones[$orden]->idBiberon);
					var_dump($unBiberon);
				}
			} //end foreach

			
	}

}

/* End of file Cfraccionamiento.php */
/* Location: ./application/controllers/Cfraccionamiento.php */