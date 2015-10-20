
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cseguimiento extends CI_Controller {

	public function view($page="home", $param="", $param1="")
	{
		if ( ! file_exists(APPPATH.'/views/seguimiento/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		
		switch ($page) {
			case 'seguimientoBa1':
			$data["bebeasociado"] = $this->bebeasociado_model->getAllBebeasociado();
			//$data["unConsentimiento"] = $this->consentimiento_model->getAllConsentimiento();
			break;
		/*	case 'verBebereceptor':
			$data["bebereceptor"] = $this->bebereceptor_model->getAllBebereceptor();
			break;*/
			case 'seguimientoBa':
   			$data["unAsociado"] = $this->bebeasociado_model->getBebeasociado($param);
   			//var_dump($data["unAsociado"]);
   			//$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($param1);
			break;
			case 'seguimientoBr':
			$data["unSeguimientoBr"] = $this->seguimientoBr_model->getSeguimientoBr($param);
			//var_dump($data["unBebeR"]);
			break;

			default:
				# code...
			break;	
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('seguimiento/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}


	public function altaSeguimientoBa()
	{
		//$fechaArray = explode('/', $this->input->post("fechabebea"));
		//$date = new DateTime();
		//$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		//$fecha= $date->format('Y-m-d');
		$seguimientoBa =  array(
			//nombre en la bd -----------------------> nombre de name
			'BebeAsociado_idBebeAsociado' 	=> $this->input->post("idba") , 
			'fechaSeguimiento'	 			=> $this->input->post("fechaBa"),
			'medico' 						=> $this->input->post("medicoBa") ,
			'altura'  						=> $this->input->post("alturaBa") ,
			'peso'  						=> $this->input->post("pesoBa") ,
			'perimetroCefalico' 			=> $this->input->post("perCefBa") ,
			'observacionesBebeAsoc'			=> $this->input->post("obsBa"), 

			);
		$data['title'] = ucfirst("home");
		if ($this->seguimientoba_model->insertNewSeguimientoBa($seguimientoBa)) {
			redirect('cseguimiento/view/verSeguimientoBa','refresh');
		} else {
			redirect('','refresh');
		}
	}
	

	public function altaSeguimientoBr()
		{
			//$fechaArray = explode('/', $this->input->post("fnacbr"));
			//$date = new DateTime();
			//$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
			//$fecha= $date->format('Y-m-d');
			$seguimientoBr =  array(
				//nombre en la bd -----------------------> nombre de name
				'BebeReceptor_idBebeReceptor' 	=> $this->input->post("nombrebr") , 
				'altura' 						=> $this->input->post("apellidobr"),
				'peso' 							=> $this->input->post("dnibr") ,
				'perimetroCefalico'  			=> $fecha,
				'observaciones'  				=> $this->input->post("lugarNacbr") ,
				'fechaSeguimiento' 				=> $this->input->post("nombreMbr") ,
				'medico'						=> $this->input->post("nombrePbr"),
			);

			$data['title'] = ucfirst("home");
			if ($this->seguimientoBr_model->insertNewSeguimientoBr($seguimientoBr)) {
				redirect('cseguimiento/view/verSeguimientoBr','refresh');
			} else {
				redirect('','refresh');
			}
		}
	}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */