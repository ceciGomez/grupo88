<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinsumos extends CI_Controller {
	//Funciones a copiar en todos los controladores
	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in != true) {
			redirect(base_url(),'refresh');
		}
	}
// fin de funciones a copiar en todos los controladores

	public function view($page="home", $param1="", $param2="",$param3="")
	{
		
		if ( ! file_exists(APPPATH.'/views/insumos/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
     switch ($page) {
			case 'verInsumos':
				$data['insumos'] = $this->insumos_model->getAllInsumos();
				break;
			case 'verUnInsumo':
				$data['unInsumo'] = $this->insumos_model->getUnInsumo($param1);
				break;
			case 'editarInsumo':
				$data['unInsumo'] = $this->insumos_model->getUnInsumo($param1);
				break;
			case 'registrarConsumo':
				$data['unInsumo'] = $this->insumos_model->getUnInsumo($param1);
				break;
			case 'eliminarInsumo':
				$data['unInsumo'] = $this->insumos_model->getUnInsumo($param1);
				break;

			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('insumos/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

	public function editarInsumo()
	{
		$insumo = array(
			'insumo' 			=> $this->input->post("nombreInsumo"),
			'unidad' 			=> $this->input->post("unidad"),
			'gramos' 			=> $this->input->post("gramos"),
			'stockReposicion' 	=> $this->input->post("stockReposicion"),
			'stockCritico' 		=> $this->input->post("stockCritico"),
			'descripcionInsumo'  => $this->input->post("descripcionInsumo")
			 );
		$data['title'] = ucfirst("home");
		$idInsumo = (int)$this->input->post('idInsumo');
		
		if ($this->insumos_model->updateInsumo($idInsumo, $insumo)) {
			redirect('cinsumos/view/verInsumos/','refresh');	
		} else {
			redirect('','refresh');
		}
	}

	public function registrarConsumo()
	{
		$actual = $this->insumos_model->getUnInsumo((int)$this->input->post('idInsumo'));
		$unidadFinal = (($actual[0]->unidad) - ((int)$this->input->post("unidad")));

		$gramosFinal = (($actual[0]->gramos) - ((int)$this->input->post("gramos")));
		

		$insumo = array(
			'unidad' 			=> $unidadFinal,
			'gramos' 			=> $gramosFinal
			 );
		$data['title'] = ucfirst("home");
		$idInsumo = (int)$this->input->post('idInsumo');
		
		if ($this->insumos_model->updateInsumo($idInsumo, $insumo)) {
			redirect('cinsumos/view/verInsumos/','refresh');	
		} else {
			redirect('','refresh');
		}
		
	}


	public function altaInsumo()
	{
		$unInsumo = array(
			'insumo' => $this->input->post('nombreInsumo'), 
			'unidad' => $this->input->post('unidad'), 
			'gramos' => $this->input->post('gramos'), 
			'stockReposicion' => $this->input->post('stockReposicion'), 
			'stockCritico' => $this->input->post('stockCritico'), 
			'descripcionInsumo' =>$this->input->post('descripcionInsumo') 
			);
		$data['title'] = ucfirst("home");
		$idMedio = $this->insumos_model->insertInsumo($unInsumo);
		redirect('cinsumos/view/verInsumos/','refresh');	
	}

	public function eliminarInsumo()
	{
		$idInsumo = (int)$this->input->post('idInsumo');
		if ($this->insumos_model->deleteInsumo($idInsumo)) {
			redirect('cinsumos/view/verInsumos','refresh');
		} else {
			redirect('','refresh');
		}
	}

}