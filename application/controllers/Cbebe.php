
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cbebe extends CI_Controller {

	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/bebe/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
			case 'verBebeasociado':
			$data["bebeasociado"] = $this->bebeasociado_model->getAllBebeasociado();
			break;
			case 'verBebereceptor':
			$data["bebereceptor"] = $this->bebereceptor_model->getAllBebereceptor();
			break;
		/*	case 'verUnBebeasociado':
			$data["unBebeA"] = $this->bebeasociado_model->getDonante($param);
			//var_dump($data["unBebeR"]);
			break;
	*/		default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('bebe/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}


	public function altaBebeasociado()
	{
		$fechaArray = explode('/', $this->input->post("fecha"));
		$date = new DateTime();
		$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		$fecha= $date->format('Y-m-d');
		$bebeasociado =  array(
			//nombre en la bd -----------------------> nombre de name
			'nombreBebeAsociado' 			=> $this->input->post("nombrebebea") , 
			'apellidoBebeAsociado' 			=> $this->input->post("apellidobebea"),
			'dniBebeAsociado' 	=> $this->input->post("dnibebea") ,
			'fechaNacBebeAsociado'  		=> $fecha ,
			'edadGestBebAsociado'  	=> $this->input->post("edadgestba") ,
			'lugarNacBebeAsociado' 		=> $this->input->post("lugarbebea") ,
			//'Consentimiento_nroConsentimiento'	=> $this->input->post("nrocons"), 
			);
		
		//var_dump($bebereceptor["fecha"]);
		//var_dump($bebereceptor["nombre"]);
		$data['title'] = ucfirst("home");
		if ($this->bebeasociado_model->insertNewBebeasociado($bebeasociado)) {
			redirect('cbebe/view/verBebeasociado','refresh');
		} else {
			redirect('','refresh');
		}
	}

	public function altaBebereceptor()
	{
		$fechaArray = explode('/', $this->input->post("fecha"));
		$date = new DateTime();
		$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		$fecha= $date->format('Y-m-d');
		$bebereceptor =  array(
			//nombre en la bd -----------------------> nombre de name
			'nombreBebeReceptor' 	=> $this->input->post("nombrebr") , 
			'apellidoBebeReceptor' 	=> $this->input->post("apellidobr"),
			'dniBebeReceptor' 		=> $this->input->post("dnibr") ,
			'fechaDeNac'  			=> $fecha,
			'lugarNac'  			=> $this->input->post("lugarNacbr") ,
			'nombreMadre' 			=> $this->input->post("nombreMbr") ,
			'nombrePadre'			=> $this->input->post("nombrePbr"),
			'direccion'				=> $this->input->post("direcbr"), 
			'edadGestacional'		=> $this->input->post("edadGestbr"), 
			);

		
		//var_dump($bebereceptor["fecha"]);
		//var_dump($bebereceptor["nombre"]);
		$data['title'] = ucfirst("home");
		if ($this->bebereceptor_model->insertNewBebereceptor($bebereceptor)) {
			redirect('cbebe/view/verBebereceptor','refresh');
		} else {
			redirect('','refresh');
		}
	}
}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */