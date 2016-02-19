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
			break;
			case 'seguimientoBr1':
			$data["bebereceptor"] = $this->bebereceptor_model->getAllBebereceptor();
			break;
			case 'seguimientosUnBa':
			//obtener los seguimientos de un bebe asociado 
			$data["unSeguimientoBa"]=$this->seguimientoba_model->getSeguimientosUnBa($param);
			//var_dump($data["unSeguimientoBa"]);
			$data["unAsociado"] = $this->bebeasociado_model->getBebeasociado($param);
			break;
			case 'seguimientosUnBr':
			//obtener los seguimientos de un bebe receptor
			$data["unSeguimientoBr"]=$this->seguimientobr_model->getSeguimientosUnBr($param);
			//var_dump($data["unSeguimientoBr"]);
			$data["unReceptor"] = $this->bebereceptor_model->getBebereceptor($param);
			break;
			case 'seguimientoBa':
   			$data["unAsociado"] = $this->bebeasociado_model->getBebeasociado($param);
   			//var_dump($data["unAsociado"]);
   			case 'seguimientoBR':
   			$data["unReceptor"] = $this->bebereceptor_model->getBebereceptor($param);
   			//var_dump($data["unReceptor"]);
			case 'verUnSeguimBa':
			$data["unSeguimientoBa"] = $this->seguimientoba_model->getUnSeguimBa($param);
			$data["unAsociado"] = $this->bebeasociado_model->getBebeasociado($param);
			break;
			case 'verUnSeguimBr':
			$data["unSeguimientoBr"] = $this->seguimientobr_model->getUnSeguimBr($param);
			$data["unReceptor"] = $this->bebereceptor_model->getBebereceptor($param);
			break;
			case 'editarUnSegBa':
			$data["unSeguimientoBa"] = $this->seguimientoba_model->getUnSeguimBa($param);
			$data["unAsociado"] = $this->bebeasociado_model->getBebeasociado($param);
			break;
			case 'editarUnSegBr':
			$data["unSeguimientoBr"] = $this->seguimientobr_model->getUnSeguimBr($param);
			$data["unReceptor"] = $this->bebereceptor_model->getBebereceptor($param);
			break;
			case 'verSeguimientoBa':
			$data["seguimientoBa"] = $this->seguimientoba_model->getAllSeguimientoBa();
			//var_dump($data["seguimientoBa"]);
			break;
			case 'verSeguimientoBr':
			$data["unseguimientoBr"] = $this->seguimientobr_model->getAllSeguimientoBr();
			//var_dump($data["seguimientoBa"]);
			case 'editarSeguimientoBa':
			$data["unSeguimientoBa"] = $this->seguimientoba_model->getAllSeguimientoBa();
			//var_dump($data["seguimientoBa"]);
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
		$fechaArray = explode('/', $this->input->post("fechaBa"));
		$date = new DateTime();
		$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		$fecha= $date->format('Y-m-d');
		$seguimientoBa =  array(
			//nombre en la bd -----------------------> nombre de name
			'BebeAsociado_idBebeAsociado' 	=> $this->input->post("idba") , 
			'fechaSeguimiento'	 			=> $fecha,
			'medico' 						=> $this->input->post("medicoBa") ,
			'altura'  						=> $this->input->post("alturaBa") ,
			'peso'  						=> $this->input->post("pesoBa") ,
			'perimetroCefalico' 			=> $this->input->post("perCefBa") ,
			'observacionesBebeAsoc'			=> $this->input->post("obsBa"), 

			);
		if ($this->seguimientoba_model->insertNewSeguimientoBa($seguimientoBa)) {
			redirect('cseguimiento/view/seguimientoBa1/','refresh');

		} else {
			redirect('','refresh');
		}
	}
	
	public function guardarModificacionesSegBa()
	{
		$fechaArray = explode('/', $this->input->post("fechaBa"));
		$date = new DateTime();
		$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		$fecha= $date->format('Y-m-d');
		$seguimientoBa =  array(
			//nombre en la bd -----------------------> nombre de name
			'BebeAsociado_idBebeAsociado' 	=> $this->input->post("idBebeAsociado") , 
			'fechaSeguimiento'	 			=> $fecha,
			'medico' 						=> $this->input->post("medicoBa") ,
			'altura'  						=> $this->input->post("alturaBa") ,
			'peso'  						=> $this->input->post("pesoBa") ,
			'perimetroCefalico' 			=> $this->input->post("perCefBa") ,
			'observacionesBebeAsoc'			=> $this->input->post("obsBa"), 

			);
		$data['title'] = ucfirst("home");
		$idSeguimiento =(int)$this->input->post("idSeguimiento");
		
		if ($this->seguimientoba_model->updateSeguimientoBa($seguimientoBa, $idSeguimiento )) {
			redirect('cseguimiento/view/verUnSeguimBa/'.$idSeguimiento,'refresh');

		} else {
			redirect('','refresh');
		}
	}
	public function altaSeguimientoBr()
		{
			$fechaArray = explode('/', $this->input->post("fechaBr"));
			$date = new DateTime();
			$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
			$fecha= $date->format('Y-m-d');
			$seguimientoBr =  array(
				//nombre en la bd -----------------------> nombre de name
			'BebeReceptor_idBebeReceptor' 	=> $this->input->post("idbr") , 
			'fechaSeguimiento'	 			=> $fecha,
			'medico' 						=> $this->input->post("medicoBr") ,
			'altura'  						=> $this->input->post("alturaBr") ,
			'peso'  						=> $this->input->post("pesoBr") ,
			'perimetroCefalico' 			=> $this->input->post("perCefBr") ,
			'observaciones'					=> $this->input->post("obsBr"),
			);

			if ($this->seguimientobr_model->insertNewSeguimientoBr($seguimientoBr)) {
				redirect('cseguimiento/view/seguimientoBr1','refresh');
			} else {
				redirect('','refresh');
			}
		}
	public function guardarModificacionesSegBr()
	{
		$fechaArray = explode('/', $this->input->post("fechaBr"));
		$date = new DateTime();
		$date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		$fecha= $date->format('Y-m-d');
		$seguimientoBr =  array(
			//nombre en la bd -----------------------> nombre de name
			'BebeReceptor_idBebeReceptor' 	=> $this->input->post("idBebeReceptor") , 
			'fechaSeguimiento'	 			=> $fecha,
			'medico' 						=> $this->input->post("medicoBr") ,
			'altura'  						=> $this->input->post("alturaBr") ,
			'peso'  						=> $this->input->post("pesoBr") ,
			'perimetroCefalico' 			=> $this->input->post("perCefBr") ,
			'observaciones'					=> $this->input->post("obsBr"),
			);
		$data['title'] = ucfirst("home");
		$idSeguimiento =(int)$this->input->post("idSegBebeReceptor");
		
		if ($this->seguimientobr_model->updateSeguimientoBr($seguimientoBr, $idSeguimiento )) {
			redirect('cseguimiento/view/verUnSeguimBr/'.$idSeguimiento,'refresh');

		} else {
			redirect('','refresh');
		}
	}
	}
/* End of file Page.php */
/* Location: ./application/controllers/Page.php */