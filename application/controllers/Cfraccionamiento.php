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
	public function agregarPmedicas($pmedicas)
	{ 
		$volTotal= 0;
		$tipoLeche = $this->input->post('tipoLeche');
		foreach ($this->input->post("conSel") as $value) {
			$pMedica = $this->pmedica_model->getUnaPmedica("$value");
			if ($pmedica) {
				$volTotal = $volTotal + $pMedica[0]->cant_tomas * $pMedica[0]->volumen;
				$biberones = $this->input->fraccionamiento_model->getBiberonesTipoLeche($tipoLeche);
				var_dump($volTotal);
				var_dump($biberones);

			} else {
				# code...
			}
			
			
		}
	}

}

/* End of file Cfraccionamiento.php */
/* Location: ./application/controllers/Cfraccionamiento.php */