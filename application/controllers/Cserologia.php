<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cserologia  extends CI_Controller {

	public function view($page="home", $param="",$param2="")
	{
		if ( ! file_exists(APPPATH.'/views/serologia/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
				case 'verSerologias':
				$data["serologia"] = $this->donantes_model->getAllDonante();
				$data["consentimiento"] = $this->consentimiento_model->getAllConsentimiento();

				break;
				case 'registrarSerologia':
				$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($param);
				$data["unaDonante"] = $this->donantes_model->getDonante($data["unConsentimiento"][0]->Donante_nroDonante);
				//var_dump($data["unConsentimiento"]);
				//var_dump($data["unaDonante"]);
				break;
				case 'editarSerologia':
				$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($param);
				$data["unaDonante"] = $this->donantes_model->getDonante($data["unConsentimiento"][0]->Donante_nroDonante);
				$data["unaSerologia"] = $this->serologia_model->getSerologia($param2);
				//var_dump($data["unaSerologia"]);
				break;
				case 'verTodasSerologias':
				$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($param);
				$data["unaDonante"] = $this->donantes_model->getDonante($data["unConsentimiento"][0]->Donante_nroDonante);
				$data["todasLasSerologias"] = $this->serologia_model->getSerologiasConsentimiento($data["unConsentimiento"][0]->nroConsentimiento);
				//var_dump($data["todasLasSerologias"]);
			
				case 'verUnaSerologia':
				$data["unaSerologia"] = $this->serologia_model->getSerologia($param);
				//verifica que arroje algun resultado el getSerologia para poder cargar los datos de Consentimiento y Donante
					if (empty($data["unaSerologia"][0])) {
						
					} else {
						$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($data["unaSerologia"][0]->Consentimiento_nroConsentimiento);
						$data["unaDonante"] = $this->donantes_model->getDonante($data["unConsentimiento"][0]->Donante_nroDonante);
						//var_dump($data["unaSerologia"]);
						
					}
				//fin condicional
				break;
				default:
				# code...
				break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('serologia/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}
	public function controlarEstado()
	{
		$estado = "Positivo";
		$vdrl = $this->input->post("opcion1");
	  	$chagas = $this->input->post("opcion2");
	  	$hvc = $this->input->post("opcion3");
	  	$hiv = $this->input->post("opcion4");
	  	$hvb = $this->input->post("opcion5");
	  	$hvbCore = $this->input->post("opcion6");;
	  	$htlvl_ll = $this->input->post("opcion7");;
	  	$medicacion = $this->input->post("opcion8");
	  	$fuma = $this->input->post("opcion9");
	  	$alcohol = $this->input->post("opcion10");
	  	$zonaRural = $this->input->post("opcion11");
	  	$vacunas = $this->input->post("opcion12");
	  	$usaDrogas = $this->input->post("opcion13");
	  	$toxoplasmosis 	= $this->input->post("opcion14");
		if ($vdrl == "No") {
			if ($chagas == "No") {
				if ($hvc == "No") {
					if ($hiv =="No") {
						if ($hvb== "No") {
							if ($hvbCore== "No") {
								if ($htlvl_ll =="No") {
									if ($medicacion =="No") {
										if ($fuma =="No") {
											if ($alcohol =="No") {
												if ($zonaRural =="No") {
													if ($vacunas =="No") {
														if ($usaDrogas =="No") {
															if ($toxoplasmosis =="No") {
																$estado = "Negativo";
															}else{
																$estado = "Positivo";
																}
														}else{
															$estado = "Positivo";
															}
													}else{
														$estado = "Positivo";
														}
												}else{
													$estado = "Positivo";
													}
											}else{
												$estado = "Positivo";
											}
										}else{
											$estado = "Positivo";
										}
									}else{
										$estado = "Positivo";
									}
								}else{
									$estado = "Positivo";
								}
							}else{
								$estado = "Positivo";
							}
						}else{
							$estado = "Positivo";
						}
					}else{
						$estado = "Positivo";
					}
				
				}else{
					$estado = "Positivo";
				}
			}else{
				$estado = "Positivo";
			}
		}else{
			$estado = "Positivo";
		}
		return $estado;
	}


	public function altaSerologia(){
		//fecha de extraccion
		 $fechaArray = explode('/', $this->input->post("fechaex"));
		  $date = new DateTime();
		  $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		  $fecha= $date->format('Y-m-d');
		  //fin fecha de extracción

		// Fecha Carga, es la fecha actual del sistema
		//con esta forma se toma el formato de fecha
        $datestring = "%Y-%m-%d";
        //la funcion mdate con un solo parametro da la fecha actual
        $now        = mdate($datestring);
        $fechaCar= $now;
		  //fin fecha carga
        $estado = $this->controlarEstado();
		  $unaSerologia = array(
		  	//nombre en la bd -------------------> nombre de name
		  	'Consentimiento_nroConsentimiento'=> $this->input->post("nroConsentimiento"), 
		  	'fechaSerologia'	=> $fecha,
		  	'fechaCarga'		=> $fechaCar,
		  	'vdrl'				=> $this->input->post("opcion1"), 
		  	'chagas'			=> $this->input->post("opcion2"),
		  	'hvc'				=> $this->input->post("opcion3"),
		  	'hiv'				=> $this->input->post("opcion4"),
		  	'hvb'				=> $this->input->post("opcion5"),
		  	'hvbCore'			=> $this->input->post("opcion6"),
		  	'htlvl_ll'			=> $this->input->post("opcion7"),
		  	'medicacion'		=> $this->input->post("opcion8"),
		  	'fuma'				=> $this->input->post("opcion9"),
		  	'droga'				=> $this->input->post("droga"),
		  	'dosis'				=> $this->input->post("dosis"),
		  	'alcohol'			=> $this->input->post("opcion10"),
		  	'zonaRural'			=> $this->input->post("opcion11"),
		  	'vacunas'			=> $this->input->post("opcion12"),
		  	'usaDrogas'			=> $this->input->post("opcion13"),
		  	'toxoplasmosis'		=> $this->input->post("opcion14"),
		  	'igM'				=> $this->input->post("igm"),
		  	'igG'				=> $this->input->post("igg"),
		  	'observaciones'		=> $this->input->post("txtsugerencias"),
		  	'estadoSerologia' 	=> $estado,
		  	
		  	);
		$data['title'] = ucfirst("home");
		
		$idSerologia = $this->serologia_model->insertNewserologia($unaSerologia);
		$idCons = $this->input->post("nroConsentimiento");
		$consentimiento = $this->consentimiento_model->getConsentimiento($idCons);
		$solicitud = $consentimiento[0]->solicitudSerologia;
		if ($solicitud == "0") {
			$unConsentimientoArreglado = array(
			    'solicitudSerologia'	=>'1', 
			    );
			
			$this->consentimiento_model->updateConsentimiento($unConsentimientoArreglado, $idCons);
		}
		if ($estado == "positivo") {
			$this->serologia_model->accionSeroligiaPositiva($idCons);
		}
		if ($idSerologia == 0) {
			echo "algo de error";
		} else {
			redirect('cserologia/view/verSerologias/','refresh');
		}
	}

public function editarSerologia()
{
 $fechaArray = explode('/', $this->input->post("fserologia"));
		  $date = new DateTime();
		  $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		  $fecha= $date->format('Y-m-d');
		  //fin fecha de extracción

		// Fecha Carga, es la fecha actual del sistema
		//con esta forma se toma el formato de fecha
        $datestring = "%Y-%m-%d";
        //la funcion mdate con un solo parametro da la fecha actual
        $now        = mdate($datestring);
        $fechaCar= $now;
		  //fin fecha carga
        $estado = $this->controlarEstado();
		  $unaSerologia = array(
		  	//nombre en la bd -------------------> nombre de name
		  	'Consentimiento_nroConsentimiento'=> $this->input->post("nroConsentimiento"), 
		  	'fechaSerologia'	=> $fecha,
		  	'fechaCarga'		=> $fechaCar,
		  	'vdrl'				=> $this->input->post("opcion1"), 
		  	'chagas'			=> $this->input->post("opcion2"),
		  	'hvc'				=> $this->input->post("opcion3"),
		  	'hiv'				=> $this->input->post("opcion4"),
		  	'hvb'				=> $this->input->post("opcion5"),
		  	'hvbCore'			=> $this->input->post("opcion6"),
		  	'htlvl_ll'			=> $this->input->post("opcion7"),
		  	'medicacion'		=> $this->input->post("opcion8"),
		  	'fuma'				=> $this->input->post("opcion9"),
		  	'droga'				=> $this->input->post("droga"),
		  	'dosis'				=> $this->input->post("dosis"),
		  	'alcohol'			=> $this->input->post("opcion10"),
		  	'zonaRural'			=> $this->input->post("opcion11"),
		  	'vacunas'			=> $this->input->post("opcion12"),
		  	'usaDrogas'			=> $this->input->post("opcion13"),
		  	'toxoplasmosis'		=> $this->input->post("opcion14"),
		  	'igM'				=> $this->input->post("igm"),
		  	'igG'				=> $this->input->post("igg"),
		  	'observaciones'		=> $this->input->post("txtsugerencias"),
		  	'estadoSerologia' 	=> $estado,
		  	
		  	);
		$data['title'] = ucfirst("home");
		$idSerologia = $this->input->post("nroSerologia");
		$serologia = $this->serologia_model->updateSerologia($unaSerologia,$idSerologia);
		$idCons = $this->input->post("nroConsentimiento");
		$consentimiento = $this->consentimiento_model->getConsentimiento($idCons);
		$solicitud = $consentimiento[0]->solicitudSerologia;
		if ($solicitud == "0") {
			$unConsentimientoArreglado = array(
			    'solicitudSerologia'	=>'1', 
			    );
			
			$this->consentimiento_model->updateConsentimiento($unConsentimientoArreglado, $idCons);
		}
		if ($estado = "positivo") {
			$this->serologia_model->accionSeroligiaPositiva($idCons);
		}
		if ($idSerologia == 0) {
			echo "algo de error";
		} else {
			redirect('cserologia/view/verSerologias/','refresh');
		}
	}
}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */