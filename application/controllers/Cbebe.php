<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cbebe extends CI_Controller {

	public function view($page="home", $param="",$param1="")
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
	*/		case 'bebeAsociado':
			$data["unaDonante"] = $this->donantes_model->getDonante($param);
			$data["unaCondicion"] = $param1;
			
			break;
			//pagina utilizada cuando la madre ya existe y no debe borrarse cuando se cancela
			case 'bebeAsociado_cons':
			$data["unaDonante"] = $this->donantes_model->getDonante($param);
			$data["unaCondicion"] = $param1;
			
			
			break;
			case 'verUnBebeAsociado':
			$data["unbebeasociado"] = $this->bebeasociado_model->getBebeasociado($param);
			$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($data["unbebeasociado"][0]->Consentimiento_nroConsentimiento);
			$data["unaDonante"] = $this->donantes_model->getDonante($data["unConsentimiento"][0]->Donante_nroDonante);
			
			//var_dump($data["unbebeasociado"]);
			//var_dump($data["unConsentimiento"]);
			//var_dump($data["unaDonante"]);
			break;
			case 'verUnBebeReceptor':
			$data["unBebeR"] = $this->bebereceptor_model->getBebereceptor($param);
			break;
			case 'editarUnBebeAsociado':
			$data["unbebeasociado"] = $this->bebeasociado_model->getBebeasociado($param);
			$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($data["unbebeasociado"][0]->Consentimiento_nroConsentimiento);
			$data["unaDonante"] = $this->donantes_model->getDonante($data["unConsentimiento"][0]->Donante_nroDonante);
			break;
			//var_dump($data["unbebeasociado"]);
			//var_dump($data["unConsentimiento"]);
			//var_dump($data["unaDonante"]);
			case 'editarUnBebeReceptor':
			$data["unBebeR"] = $this->bebereceptor_model->getBebereceptor($param);
			break;
			default:
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
			//'donanteNro' 		=> $this->input->post("nroDonante") ,
			);
		
		//var_dump($bebereceptor["nombre"]);
		$data['title'] = ucfirst("home");
		/*if ($this->bebeasociado_model->insertNewBebeasociado($bebeasociado)) {
			redirect('consentimiento/view/consentimiento2','refresh');
		} else {
			redirect('','refresh');
		}*/
		$idbebea = $this->bebeasociado_model->insertNewBebeasociado($bebeasociado);
		if ($idbebea == 0) {
			# code...
			echo "algo de error";
		} else {
			# code...
			redirect('consentimiento/view/consentimiento2/'.$idbebea.'/'. $this->input->post("nroDonante").'/'.$this->input->post("condicion") ,'refresh');
		}
	}
	//guarda modificaciones de bebe asociado
		public function guardarModificacionesBebeAsociado(){

		$fechaArray = explode('/', $this->input->post("fecha"));
		$date = new DateTime();
		$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		$fecha= $date->format('Y-m-d');
			$bebemodif =  array(
			//nombre en la bd -----------------------> nombre de name
			
			'nombreBebeAsociado' 	=> $this->input->post("nombreBebeAsociado") ,
			'apellidoBebeAsociado' 	=> $this->input->post("apellidoBebeAsociado") ,
			'dniBebeAsociado'  		=> $this->input->post("dniBebeAsociado") ,
			'fechaNacBebeAsociado'	=> $fecha,
			'edadGestBebAsociado'	=> $this->input->post("edadGestBebAsociado"), 
			'lugarNacBebeAsociado'	=> $this->input->post("lugarNacBebeAsociado"), 
			);
		$data['title'] = ucfirst("home");
		$nroBebeA =(int)$this->input->post("idBebeAsociado");
		if ($this->bebeasociado_model->updateBebeasociado($bebemodif, $nroBebeA )) {
			redirect('cbebe/view/verUnBebeAsociado/' .$nroBebeA,'refresh');

		} else {
			redirect('','refresh');
		}
	}

	//alta de bebe receptor

	public function altaBebereceptor()
	{
		$fechaArray = explode('/', $this->input->post("fnac"));
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
	//guarda modificaciones de bebe receptor
		public function guardarModificacionesBebeReceptor(){
		$fechaArray = explode('/', $this->input->post("fnac"));
		$date = new DateTime();
		$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		$fecha= $date->format('Y-m-d');
		$bebemodif =  array(
			//nombre en la bd -----------------------> nombre de name
			'nombreBebeReceptor' 	=> $this->input->post("nombrebr") , 
			'apellidoBebeReceptor' 	=> $this->input->post("apellidobr"),
			'dniBebeReceptor' 		=> $this->input->post("dnibr") ,
			'fechaDeNac'  			=> $fecha,
			'lugarNac'  			=> $this->input->post("lugarNacbr"),
			'nombreMadre' 			=> $this->input->post("nombreMbr") ,
			'nombrePadre'			=> $this->input->post("nombrePbr"),
			'direccion'				=> $this->input->post("direcbr"), 
			'edadGestacional'		=> $this->input->post("edadGestbr"), 
			);
		$data['title'] = ucfirst("home");
		$nroBebeR =(int)$this->input->post("idBebeReceptor");
		if ($this->bebereceptor_model->updateBebereceptor($bebemodif, $nroBebeR )) {
			redirect('cbebe/view/verUnBebeReceptor/' .$nroBebeR,'refresh');

		} else {
			redirect('','refresh');
		}
	}
}
/* End of file Page.php */
/* Location: ./application/controllers/Page.php */