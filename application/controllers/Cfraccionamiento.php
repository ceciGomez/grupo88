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
	para obtener biberones y realiza la busqueda  */
	{
		$tipoLeche = $this->input->post('tipoLeche');
		redirect('Cfraccionamiento/view/verPmedicasPorTipo/'.$tipoLeche,'refresh');
	}

	
	//consumo de bebe
	public function consumoDeBeber()
	{
		$bebereceptor              = $this->input->post("BebeReceptor_idBebeReceptor");
		$data['fraccionesDelBebe'] = $this->fraccionamiento_model->getFraccionamientosUnBr($bebereceptor);
		foreach ($data['fraccionesDelBebe'] as $value) {
            //var_dump($value);
            if ($value) {
                //se arma el arreglo para cargar consumo de cada fraccion
                $unFraccionamiento = array(
				'consumido' => $this->input->post('consumo')
				 );

	        } else {
                # code...
                echo 'no hay más fracciones del bebe';
            }   
        }
        $data['title'] = ucfirst("home");
				$idFraccion = (int)$this->input->post('idFraccionamiento');

				if ($this->fraccionamiento_model->updateFraccionConsumo($idFraccion, $unFraccionamiento)) {
					redirect('cfraccionamiento/view/verTodosLosFraccionamientos/','refresh');	
				} else {
					redirect('','refresh');
				}
	}
	public function fraccionar()
	//aca se realizan las fracciones de las prescripciones médicas seleccionadas 
	//en la vista "verPmedicasPorTipo".
	{ 
		$volTotal= 0;
		$tipoLeche = $this->input->post('tipoLeche');
			//El name "conSel" es un arreglo de id, que se utiliza para buscar cada pmedica
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
			seleccionadas y que esten aptos para fraccionar*/
			$biberones = $this->biberon_model->getBiberonesSinFraccionar("$tipoLeche");
			
			/*Volumen fraccionado, sera utilizado para controlar que se cumplan todas
			las fracciones de prescripciones medicas */
			$volFraccionado = 0;
			
			//numero de orden en el arreglo de biberones
			$orden = 0;
			
			//obtengo el primer biberon disponible de los biberones que cumplan las condiciones
			$unBiberon = $this->biberon_model->getUnBiberon($biberones[$orden]->idBiberon);
			$volBiberon = $unBiberon[0]->volumenDeLeche;
			//cantidad de tomas en cada prescripcion
			$cant_tomas = 0;

			//volumen por tomas en cada prescripcion
			$volTomas = 0;

			//con esta forma se toma el formato de fecha
			$datestring = "%Y-%m-%d";
			//la funcion mdate con un solo parametro da la fecha actual
			$now        = mdate($datestring);

			$biberonConDesperdicio = array('id', 'volDesperdiciado' );
			/*
			- siempre toma un mismo biberon
			- no cambia el estado de biberon
			- selecciono un p medica y me cambia el estado a dos.
			 */



			/*Por cada prescripcion medica se hara el fraccionamiento correspondiente */
			foreach ($this->input->post("consSel") as $value) {
				//obtengo una prescripcion medica
				$pMedica = $this->pmedica_model->getUnaPmedica("$value");
				//obtengo el estado de prescripcion medica
				$estadoPmedica = $pMedica[0]->estadoPresMedica;
				$volTotalPmedica = $pMedica[0]->cant_tomas * $pMedica[0]->volumen;

				if (($volTotal == $volFraccionado) 
					&& ($estadoPmedica =='Fraccionado')) {
				//se cumplio las demandas de las prescripciones medicas
					var_dump($biberonConDesperdicio);
				} else {
					/* - las prescripciones medicas todavia no se han fraccionados
					 - se controla que el biberon actualmente seleccionado con el numero 
					de orden cumpla con la demanda de la prescripcion */
					if (($volBiberon < $volTotalPmedica) && ($volBiberon != 0)){
					/*Cuando el volumen del biberon no satisfaga la capacidad de la demanda de la prescripcion
					medica, y esta prescripcion en cuestion tenga que ser satisfecha con dos o mas 
					biberones diferentes*/
						$cant_tomas = $pMedica[0]->cant_tomas;
						//satisfacer todas las tomas de una prescripcion
						for ($toma=0; $toma < $cant_tomas; $toma++) { 
							//si el biberon tiene volumen disponible
							$unFraccionamiento = array(
								'fechaFraccionamiento' =>$now , 
								'volumen' =>$pMedica[0]->volumen ,
								'PrescripcionMedica_idPrescripcionMedica' =>$pMedica[0]->idPrescripcionMedica ,
								'PrescripcionMedica_fechaPrescripcion' =>$pMedica[0]->fechaPrescripcion ,
								'BebeReceptor_idBebeReceptor' =>$pMedica[0]->BebeReceptor_idBebeReceptor ,
								);

							if ($pMedica[0]->volumen <= $volBiberon) {
								$unFraccionamiento = array(
								'Biberon_idBiberon' =>$unBiberon[0]->idBiberon 
								);
								//vaciar biberon
								$volBiberon = $volBiberon - $pMedica[0]->volumen; 
								//contar fraccionamiento
								$volFraccionado = $pMedica[0]->volumen;
								//si el biberon no tiene volumen disponible	
							}else {
								//cambio estado al biberon ya utilizado
								$biberonUtilizado = array('estadoBiberon' => 'Fraccionado');
								$this->biberon_model->updateBiberon($unBiberon[0]->idBiberon, $biberonUtilizado);
								if ($volBiberon != 0) {
									$biberonConDesperdicio[]= array('id'=> $unBiberon[0]->idBiberon,
																'volDesperdiciado'=>$volBiberon);
								}
								//obtengo siguiente biberon disponible a fraccionar
								$orden = $orden +1;
								//var_dump($orden);
								$unBiberon = $this->biberon_model->getUnBiberon($biberones[$orden]->idBiberon);
								if ($unBiberon) {
									$volBiberon = $unBiberon[0]->volumenDeLeche;
									$unFraccionamiento = array(
										'Biberon_idBiberon' =>$unBiberon[0]->idBiberon 
										);
									//vaciar biberon
									$volBiberon = $volBiberon - $pMedica[0]->volumen;
									$idFraccionamiento = $this->fraccionamiento_model->insertFraccionamiento($unFraccionamiento);	
								} else {
									/*no se encuentran biberones disponibles con las 
									caracteristicas seleccionadas */

								}
							} //end if else
						} //end for
					}else{
						/*Cuando se ocupa un biberon cuya capacidad pueda satisfacer la demanda de la
						prescripcion médica entera*/
						$cant_tomas = $pMedica[0]->cant_tomas;
						$volBiberon = $unBiberon[0]->volumenDeLeche;
						//por cada toma se crea una fraccion
						for ($i=0; $i <= $cant_tomas; $i++) { 
							$unFraccionamiento = array(
								'fechaFraccionamiento' =>$now , 
								'volumen' =>$pMedica[0]->volumen ,
								'PrescripcionMedica_idPrescripcionMedica' =>$pMedica[0]->idPrescripcionMedica ,
								'PrescripcionMedica_fechaPrescripcion' =>$pMedica[0]->fechaPrescripcion ,
								'BebeReceptor_idBebeReceptor' =>$pMedica[0]->BebeReceptor_idBebeReceptor ,
								'Biberon_idBiberon' =>$unBiberon[0]->idBiberon 
								);
							//vaciar biberon
							$volBiberon = $volBiberon - $pMedica[0]->volumen;; 
							$idFraccionamiento = $this->fraccionamiento_model->insertFraccionamiento($unFraccionamiento);
						}
					}//end if else 
					//indicar que la prescripcion medica ya fue fraccionada
					$unaPmedica = array('estadoPresMedica' => 'Fraccionado', );
					$idPmedica = $value;
					$this->pmedica_model->updatePmedica($unaPmedica, $idPmedica);
				}//end if else
			} //end foreach
						$data['title'] = ucfirst("home");
						//redirect('cfraccionamiento/view/verTodosLosFraccionamientos/','refresh');	
			
	}

}

/* End of file Cfraccionamiento.php */
/* Location: ./application/controllers/Cfraccionamiento.php */
