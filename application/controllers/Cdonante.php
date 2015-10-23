
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdonante extends CI_Controller {

	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/donante/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
			case 'verDonantes':
			$data["donante"] = $this->donantes_model->getAllDonante();
			break;
			case 'verUnaDonante':
			$data["unaDonante"] = $this->donantes_model->getDonante($param);
			//var_dump($data["unaDonante"]);
			break;
			case 'verUnaDonante_cons':
			$data["unaDonante"] = $this->donantes_model->getDonante($param);
			//var_dump($data["unaDonante"]);
			break;
			case 'editarDonante':
			$data["unaDonante"] = $this->donantes_model->getDonante($param);
			//var_dump($data["unaDonante"]);
			break;
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('donante/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}


	public function altaDonante()
	{
		//$dateTime = date_create_from_format('d-m-Y',  $this->input->post("fecha") );
		//$fecha=date_format($dateTime, 'Y-m-d');
		$fechaArray = explode('/', $this->input->post("fecha"));
		$date = new DateTime();
		$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		$fecha= $date->format('Y-m-d');
		$donante =  array(
			//nombre en la bd -----------------------> nombre de name
			
			'nombre' 			=> $this->input->post("nombre") , 
			'apellido' 			=> $this->input->post("apellido"),
			'fechaNacDonante' 	=> $fecha,
			'dniDonante'  		=> $this->input->post("dni") ,
			'emailDonante'  	=> $this->input->post("email") ,
			'ocupacion' 		=> $this->input->post("ocupacion") ,
			'telefonoDonante'	=> $this->input->post("celular"), 
			'nivelEstudio'	=> $this->input->post("estudios"), 
			'tipoDonante'	=> $this->input->post("tipo"), 
			'estadoCivil'		=> $this->input->post("estadoCivil") 
			
			);
		
		//var_dump($this->donantes_model->insertNewDonante($donante));
		//var_dump($donante["nombre"]);
		$data['title'] = ucfirst("home");
		/*if ($this->donantes_model->insertNewDonante($donante)) {
			redirect('cbebe/view/bebeAsociado','refresh');
		} else {
			redirect('','refresh');
		}*/
		$idDonante = $this->donantes_model->insertNewDonante($donante);
		$mama = $this->input->post("nueva");
		if ($idDonante == 0) {
			# code...
			echo "algo de error";
		} else {
			if ($mama == "nueva"){
			redirect('cbebe/view/bebeAsociado/'.$idDonante .'/' .$mama,'refresh');	
		} else {
			$mama = '';
			redirect('cbebe/view/bebeAsociado/'.$idDonante,.'/' .$mama,'refresh');
		}
				
		}
		
		
	}

	public function guardarModificacionesDonante(){
		$fechaArray = explode('/', $this->input->post("fecha"));
		$date = new DateTime();
		$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		$fecha= $date->format('Y-m-d');
		
		$donante =  array(
			//nombre en la bd -----------------------> nombre de name
			'nombre' 			=> $this->input->post("nombre") , 
			'apellido' 			=> $this->input->post("apellido"),
			'fechaNacDonante' 	=> $fecha ,
			'dniDonante'  		=> $this->input->post("dni") ,
			'emailDonante'  	=> $this->input->post("email") ,
			'ocupacion' 		=> $this->input->post("ocupacion") ,
			'telefonoDonante'	=> $this->input->post("celular"), 
			'nivelEstudio'	=> $this->input->post("estudios"), 
			'tipoDonante'	=> $this->input->post("tipo"), 
			'estadoCivil'		=> $this->input->post("estadoCivil") 
			
			);
		$data['title'] = ucfirst("home");
		$nroDonante =(int)$this->input->post("nroDonante");
		if ($this->donantes_model->updateDonante($donante, $nroDonante )) {
			redirect('cdonante/view/verUnaDonante/'.$nroDonante,'refresh');

		} else {
			redirect('','refresh');
		}
	}

	public function borrarDonante()
	{
			$nroDonante =array(
				"nroDonante"=>(int)$this->input->post("nroDonante"));
			if ($this->donantes_model->deleteDonante($nroDonante)) {
				# code...
				redirect('consentimiento/view/buscaconsentimiento/','refresh');
			} else {
				# code...
				redirect('','refresh');
			}

	}
	public function asociarbebe($param="")
	{
		# code...
		$data["unaDonante"] = $this->donantes_model->getDonante($param);
			//var_dump($data["unaDonante"]);
		if ($param == 0) {
			# code...
			echo "algo de error";
		} else {
			# code...

			redirect('cbebe/view/bebeAsociado_cons/'.$param,'refresh');
		}
		
	}
	
}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */