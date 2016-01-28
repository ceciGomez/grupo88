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
				$data['pmedicasPorTipo']= $this->pmedica_model->getPmedicasPorTipo($param1);
				$data['tipoLeche'] = $param1;
				break;
			case 'verTodosLosFraccionamientos':
				$data['fraccionamientos'] = $this->fraccionamiento_model->getAllFraccionamientos();
				break;
			case 'registrarConsumoBr':
				$data["bebereceptor"] = $this->bebereceptor_model->getAllBebereceptor();
				break;
			case 'verFraccionesUnbr':
				$data['fraccionesUnbebe']=$this->fraccionamiento_model->getFraccionamientosUnBr($param1);
				$data['unReceptor'] = $this->bebereceptor_model->getBebereceptor($param1);
				//var_dump($data['fraccionesUnbebe'] );
				//var_dump($data['unReceptor'] );
				break;
			//la idea de ver un fraccionamiento es ver nombre por lo menos del bebe que tomó
			case 'verUnFraccionamiento':
				$data["unFraccionamiento"]=$this->fraccionamiento_model->getUnFraccionamiento($param1);
				$data["unReceptor"] = $this->bebereceptor_model->getBebereceptor($param1);
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
	para obtener prescripciones medicas y realiza la busqueda  */
	{
		$tipoLeche = $this->input->post('tipoLeche');
		redirect('cfraccionamiento/view/verPmedicasPorTipo/'.$tipoLeche,'refresh');
	}

	
	//consumo de bebe
	public function consumoDeBeber()
	{
		$bebereceptor              = $this->input->post("BebeReceptor_idBebeReceptor");
		$data['fraccionesDelBebe'] = $this->fraccionamiento_model->getFraccionamientosUnBr($bebereceptor);
		foreach ($data['fraccionesDelBebe']){
            //var_dump($data);
            $unConsumo= array($this->input->post('consumo'));
			$idFraccion = $this->input->post('idFraccionamiento');
			$this->fraccionamiento_model->updateFraccionConsumo($idFraccion, $unConsumo); 
		}
		redirect('cfraccionamiento/view/verTodosLosFraccionamientos/','refresh');	

	}
	
	
	public function guardarFracc($idPm, $idBi)
	/*Se crea el fraccionamiento que se inserta en la bd */
	{
		//con esta forma se toma el formato de fecha
		$datestring = "%Y-%m-%d";
		//la funcion mdate con un solo parametro da la fecha actual
		$now = mdate($datestring);
		$unaPmedica = $this->pmedica_model->getUnaPmedica("$idPm");
		$volToma = $unaPmedica[0]->volumen;
		$unBiberon = $this->biberon_model->getUnBiberon($idBi);
		$unFraccionamiento = array(
			'fechaFraccionamiento' =>$now , 
			'volumen'=> $unaPmedica[0]->volumen,
			'PrescripcionMedica_idPrescripcionMedica' =>$unaPmedica[0]->idPrescripcionMedica ,
			'PrescripcionMedica_fechaPrescripcion' =>$unaPmedica[0]->fechaPrescripcion ,
			'BebeReceptor_idBebeReceptor' =>$unaPmedica[0]->BebeReceptor_idBebeReceptor ,
			'Biberon_idBiberon' => $unBiberon[0]->idBiberon
			);
		$idFraccionamiento = $this->fraccionamiento_model->insertFraccionamiento($unFraccionamiento);
		//cambio estado al biberon ya utilizado
		$biberonUtilizado = array('estadoBiberon' => 'Fraccionado');
		$this->biberon_model->updateBiberon($unBiberon[0]->idBiberon, $biberonUtilizado);
		//insertar Fraccionamiento en la bd
		return $idFraccionamiento;
	}

	
	public function mostrarPmedicas()
	/*Se muestran cuales son las prescripciones médicas seleccionadas y los biberones
	disponibles para que el usuario elija.
	El usuario deebe elegir por cada toma que tengan las prescripciones médicas selecionadas
	el biberon con cual va a satisfacer dicha toma */
	{
		$data = array();
		foreach ($this->input->post('consSel') as $value) {
			$unaPm = $this->pmedica_model->getUnaPmedica("$value");
			$pmSelecc[] = array($unaPm[0]);
		}
		$data["pmSelec"] = $pmSelecc;
		$data['tipoLeche'] = $this->input->post('tipoLeche');
		$data['biberonesOk'] = $this->biberon_model->getBiberonesSinFraccionar($data['tipoLeche']);
		/* 
		Se carga la pagina encargada de mostrar los datos
		*/
			$this->load->view('templates/cabecera', $data);
			$this->load->view('templates/menu', $data);
			$this->load->view('fraccionamiento/verPmSeleccionadas', $data);
			$this->load->view('templates/pie', $data);
	}
	public function realizarFracc()
	{

		$cantidadElementos = count($this->input->post('bibSel'));
		$biberones = $this->input->post('bibSel');
		$pmedicas = $this->input->post('pmSel');
		$fracciones = array();
		for ($i=0; $i < $cantidadElementos ; $i++) { 
			$biberon = $biberones[$i];
			$pmedica = $pmedicas[$i];
			$idFracc = array('idFracc' => $this->guardarFracc($pmedica, $biberon));
			$fracciones[] = $idFracc;
			//var_dump($fracciones);
		}
		$pmFraccionada = array('estadoPresMedica' => 'Fraccionado');
		$this->pmedica_model->updatePmedica($pmFraccionada, $pmedica);
		

		$data["idFracc"] = $fracciones;
		
		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('fraccionamiento/fraccionamientos', $data);
		$this->load->view('templates/pie', $data);
	}

}

/* End of file Cfraccionamiento.php */
/* Location: ./application/controllers/Cfraccionamiento.php */
