<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpasteurizacion extends CI_Controller {

	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/pasteurizacion/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
			case 'nuevaPasteurizacion':
			$data["frascos"] = $this->frascos_model->getFrascosPasteurizar();
			break;
			
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('pasteurizacion/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

		public function registrarPasteurizacion()
		{
			$fechaArray = explode('/', $this->input->post("fpasteurizacion"));
					  $date = new DateTime();
					  $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
					  $fecha= $date->format('Y-m-d');

			$unaPasteurizacion = array(
				'fechaPasteurizacion' =>$fecha, 
				'responsable' =>$this->input->post("responsable"), 
			);

			$idPasteurizacion = $this->pasteurizacion_model->insertPasteurizacion($unaPasteurizacion);
		redirect('Cpasteurizacion/view/nuevaPasteurizacion/','refresh');	

		}

	public function agregarFrascos()
	{
			$dato = (object) array('elemSelec' => $this->input->post("consSel[]"));
			$this->load->view('templates/cabecera', $dato);
			$this->load->view('templates/menu', $dato);
			$this->load->view('pasteurizacion/otraForma', $dato);
			$this->load->view('templates/pie', $dato);
		  }
		  //SOLUCIONO MANU CON JAVASCRIPT
		  /*elseif ($cantFrascos < $b){
			//mensaje de cuantos frascos le falta seleccionar
			echo '<script language="javascript">alert("DEBE SELECCIONAR MAS FRASCOS - ha seleccionado menos de 35 frascos");</script>';
			redirect('Cpasteurizacion/view/nuevaPasteurizacion','refresh');
			
			}elseif ($cantFrascos > $b) {
				//mensaje de cuantos frascos debe deseleccionar
				echo '<script language="javascript">alert("mayor");</script>'; 
				redirect('Cpasteurizacion/view/nuevaPasteurizacion','refresh');
			}*/

	}
	/*public function confirmaFrascos()
	{
		$fselec = $this->input->post("frasSel");
	foreach ($fselec as $value) {
		$unFrasco = $this->frascos_model->getFrasco($value);
		if ($unFrasco[0]->volumenDeLeche < 250) {
			$volumen = $unFrasco[0]->volumenDeLeche;
			$tipoLeche = $unFrasco[0]->tipoDeLeche;
		}
	}



	}
	}
	*/



