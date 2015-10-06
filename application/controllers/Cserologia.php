
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cserologia  extends CI_Controller {

	public function view($page="home", $param="")
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
				case 'verTodasSerologias':
				$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($param);
				$data["unaDonante"] = $this->donantes_model->getDonante($data["unConsentimiento"][0]->Donante_nroDonante);
				$data["todasLasSerologias"] = $this->serologia_model->getSerologiasConsentimiento($data["unConsentimiento"][0]->nroConsentimiento);
				var_dump($data["todasLasSerologias"]);
			
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
	public function altaSerologia(){
		//echo 'se carga una serologia';

		//fecha de extraccion
		 $fechaArray = explode('/', $this->input->post("fechaex"));
		  $date = new DateTime();
		  $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		  $fecha= $date->format('Y-m-d');
		  //fin fecha de extracción

		  // Fecha Carga
		  	$fechaArray = explode('/', $this->input->post("fechacar"));
		  $date = new DateTime();
		  $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		  $fechaCar= $date->format('Y-m-d');
		  //fin fecha carga

		  $unaSerologia = array(
		  	//nombre en la bd -------------------> nombre de name
		  	'Consentimiento_nroConsentimiento'=> $this->input->post("nroConsentimiento"), 
		  	'fechaSerologia'=> $fecha,
		  	'fechaCarga'=> $fechaCar,
		  	'vdrl'=> $this->input->post("opcion1"), 
		  	'chagas'=> $this->input->post("opcion2"),
		  	'hvc'=> $this->input->post("opcion3"),
		  	'hiv'=> $this->input->post("opcion4"),
		  	'hvb'=> $this->input->post("opcion5"),
		  	'hvbCore'=> $this->input->post("opcion6"),
		  	'htlvl_ll'=> $this->input->post("opcion7"),
		  	'medicacion'=> $this->input->post("opcion8"),
		  	'fuma'=> $this->input->post("opcion9"),
		  	'droga'=> $this->input->post("droga"),
		  	'dosis'=> $this->input->post("dosis"),
		  	'alcohol'=> $this->input->post("opcion10"),
		  	'zonaRural'=> $this->input->post("opcion11"),
		  	'vacunas'=> $this->input->post("opcion12"),
		  	'usaDrogas'=> $this->input->post("opcion13"),
		  	'toxoplasmosis'=> $this->input->post("opcion14"),
		  	'igM'=> $this->input->post("igm"),
		  	'igG'=> $this->input->post("igg"),
		  	'observaciones'=> $this->input->post("txtsugerencias"),
		  	);
		$data['title'] = ucfirst("home");
		
		$idDonante = $this->serologia_model->insertNewserologia($unaSerologia);
		if ($idDonante == 0) {
			# code...
			echo "algo de error";
		} else {
			# code...
			redirect('cserologia/view/verSerologias/','refresh');
		}
		


	}

}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */