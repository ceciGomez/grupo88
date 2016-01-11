<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinsumos extends CI_Controller {

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