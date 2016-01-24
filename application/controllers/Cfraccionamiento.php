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
	
	public function controlarDisp($biberonesOk)
	/*Funcion ocupada por funcion fraccionar para comprobar 
	si existen biberones con la cantidad suficiente para poder cumplir
	las prescripciones medicas */
	{
		/*Controlar que los biberones disponibles con la leche seleccionada y que
		se encuentren en condiciones para ser fraccionados sean suficientes para cumplir 
		con todas las prescripciones medicas seleccionadas */
		//contar el volumen de las prescripciones medicas
		$volPmedicasSel = 0;
		//var_dump($pMedicasSel);
		foreach ($this->input->post('consSel') as $value) {
			$unaPmedica = $this->pmedica_model->getUnaPmedica("$value");
			$tomas = $unaPmedica[0]->cant_tomas;
			$vol = $unaPmedica[0]->volumen;
			$volPmedicasSel = $volPmedicasSel + $tomas*$vol;
		}
		//contar el volumen total de los biberones
		$volBiberonesOK = 0;
		foreach ($biberonesOk as $value) {
			$volBiberonesOK = $volBiberonesOK + $value->volumenDeLeche;
		}
		//comparar volumenes
		echo "pmedicas: ";
		var_dump($volPmedicasSel);
		echo "biberons: ";
		var_dump($volBiberonesOK);
		if ($volPmedicasSel <= $volBiberonesOK) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function fraccionar()
	{
		//obtener tipo de leche
		$tipoLeche = $tipoLeche = $this->input->post('tipoLeche');
		//obtener biberon ok que coincidan con el tipo de leche
		$biberonesOk = $this->biberon_model->getBiberonesSinFraccionar($tipoLeche);
		$orden = 0;
		$unBiberon = $this->biberon_model->getUnBiberon($biberonesOk[$orden]->idBiberon);
		$volBiberon = $unBiberon[0]->volumenDeLeche;
		
		//con esta forma se toma el formato de fecha
		$datestring = "%Y-%m-%d";
		//la funcion mdate con un solo parametro da la fecha actual
		$now = mdate($datestring);

		//verificar disponibilidad
		$disponibilidad = $this->controlarDisp($biberonesOk);
		if ($disponibilidad) {
			foreach ($this->input->post('consSel') as $value) {
				//obtener las prescripciones medicas de una y contar su volumen
				$unaPmedica = $this->pmedica_model->getUnaPmedica("$value");
				$cant_tomas = $unaPmedica[0]->cant_tomas;
				$volToma = $unaPmedica[0]->volumen;
				$volPm = $cant_tomas * $volToma;
				echo "volumen pmedicas: ";
				var_dump($volPm);
				if ($volBiberon>= $volPm) {
					for ($i=0; $i < $cant_tomas; $i++) { 
						//se arma el arreglo de fraccionamiento.
						$unFraccionamiento = array(
							'fechaFraccionamiento' =>$now , 
							'volumen' =>$volToma ,
							'PrescripcionMedica_idPrescripcionMedica' =>$unaPmedica[0]->idPrescripcionMedica ,
							'PrescripcionMedica_fechaPrescripcion' =>$unaPmedica[0]->fechaPrescripcion ,
							'BebeReceptor_idBebeReceptor' =>$unaPmedica[0]->BebeReceptor_idBebeReceptor ,
							'Biberon_idBiberon' => $unBiberon[0]->idBiberon;
							);
						//vaciar biberon 
						$volBiberon = $volBiberon - $volToma;
						//cambio estado al biberon ya utilizado
						$biberonUtilizado = array('estadoBiberon' => 'Fraccionado');
						$this->biberon_model->updateBiberon($unBiberon[$orden]->idBiberon, $biberonUtilizado);
						//insertar Fraccionamiento en la bd
						$idFraccionamiento = $this->fraccionamiento_model->insertFraccionamiento($unFraccionamiento);	
					} //end for
				} else {
					if ($volBiberon < $volToma) {
					/*Si el volumen del biberon no alcanza ni para una toma de la prescripcion
					actual, entonces se cuenta como desperdicio y se busca el siguiente biberon */
						$biberonConDesperdicio[]= array('id'=> $unBiberon[0]->idBiberon,
												'volDesperdiciado'=>$volBiberon);
						//siquiente numero de orden en el arreglo de biberones ok
						$orden = $orden + 1;
						$unBiberon = $this->biberon_model->getUnBiberon($biberonesOk[$orden]->idBiberon);
						$volBiberon = $unBiberon[0]->volumenDeLeche;
						//controlo nuevamente que el biberon tenga volumen suficiente
						if ($volBiberon>= $volPm) {
							for ($i=0; $i < $cant_tomas; $i++) { 
								//se arma el arreglo de fraccionamiento.
								$unFraccionamiento = array(
									'fechaFraccionamiento' =>$now , 
									'volumen' =>$volToma ,
									'PrescripcionMedica_idPrescripcionMedica' =>$unaPmedica[0]->idPrescripcionMedica ,
									'PrescripcionMedica_fechaPrescripcion' =>$unaPmedica[0]->fechaPrescripcion ,
									'BebeReceptor_idBebeReceptor' =>$unaPmedica[0]->BebeReceptor_idBebeReceptor ,
									'Biberon_idBiberon' => $unBiberon[0]->idBiberon;
									);
								//vaciar biberon por toma
								$volBiberon = $volBiberon - $volToma;
								//cambio estado al biberon ya utilizado
								$biberonUtilizado = array('estadoBiberon' => 'Fraccionado');
								$this->biberon_model->updateBiberon($unBiberon[$orden]->idBiberon, $biberonUtilizado);
								//insertar Fraccionamiento en la bd
								$idFraccionamiento = $this->fraccionamiento_model->insertFraccionamiento($unFraccionamiento);		
							}//end for
						}//end if
					} else { // volumen de biberon > volumen de toma
					/*El volumen no utilizado del biberon puede satisfacer
					una o mas tomas de una prescripcion medica, pero no todas */
						$contarTomaSatisfecha = 0;
						while ($volBiberon >= $volToma) {
							$unFraccionamiento = array(
									'fechaFraccionamiento' =>$now , 
									'volumen' =>$volToma ,
									'PrescripcionMedica_idPrescripcionMedica' =>$unaPmedica[0]->idPrescripcionMedica ,
									'PrescripcionMedica_fechaPrescripcion' =>$unaPmedica[0]->fechaPrescripcion ,
									'BebeReceptor_idBebeReceptor' =>$unaPmedica[0]->BebeReceptor_idBebeReceptor ,
									'Biberon_idBiberon' => $unBiberon[0]->idBiberon;
								);
							//vaciar biberon por toma
							$volBiberon = $volBiberon - $volToma;
							//cambio estado al biberon ya utilizado
							$biberonUtilizado = array('estadoBiberon' => 'Fraccionado');
							$this->biberon_model->updateBiberon($unBiberon[$orden]->idBiberon, $biberonUtilizado);
							//insertar Fraccionamiento en la bd
							$idFraccionamiento = $this->fraccionamiento_model->insertFraccionamiento($unFraccionamiento);
							$contarTomaSatisfecha = $contarTomaSatisfecha + 1;
						} // end while
						//contar cuantas tomas faltan satisfacer
						$tomasSinSatisfacer = $cant_tomas - $contarTomaSatisfecha;
						//siquiente numero de orden en el arreglo de biberones ok
						$orden = $orden + 1;
						$unBiberon = $this->biberon_model->getUnBiberon($biberonesOk[$orden]->idBiberon);
						$volBiberon = $unBiberon[0]->volumenDeLeche;
						/*Con el siguiente for se buscar satisfacer las demas tomas con
						otro biberon disponible */
						for ($i=0; $i < $tomasSinSatisfacer; $i++) { 
						//se arma el arreglo de fraccionamiento.
							$unFraccionamiento = array(
								'fechaFraccionamiento' =>$now , 
								'volumen' =>$volToma ,
								'PrescripcionMedica_idPrescripcionMedica' =>$unaPmedica[0]->idPrescripcionMedica ,
								'PrescripcionMedica_fechaPrescripcion' =>$unaPmedica[0]->fechaPrescripcion ,
								'BebeReceptor_idBebeReceptor' =>$unaPmedica[0]->BebeReceptor_idBebeReceptor ,
								'Biberon_idBiberon' => $unBiberon[0]->idBiberon;
								);
							//vaciar biberon 
							$volBiberon = $volBiberon - $volToma;
							//cambio estado al biberon ya utilizado
							$biberonUtilizado = array('estadoBiberon' => 'Fraccionado');
							$this->biberon_model->updateBiberon($unBiberon[$orden]->idBiberon, $biberonUtilizado);
							//insertar Fraccionamiento en la bd
							$idFraccionamiento = $this->fraccionamiento_model->insertFraccionamiento($unFraccionamiento);	
						}//end for
					}//end else
				}//end else
			} //end foreach de pemdica
		} else { //end if disponibilidad
			echo "no se puede satisfacer la demanda";
		}
		

	} //end function fraccionar
}

/* End of file Cfraccionamiento.php */
/* Location: ./application/controllers/Cfraccionamiento.php */
