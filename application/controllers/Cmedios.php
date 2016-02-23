<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cmedios extends CI_Controller {
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
		
		if ( ! file_exists(APPPATH.'/views/medios/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
     switch ($page) {
			case 'verMedios':
				$data["medios"] = $this->medios_model->getAllMedios();
				break;
			case 'verUnMedio':
				$data['unMedio'] = $this->medios_model->getUnMedio($param1);
				break;
			case 'editarMedio':
				$data['unMedio'] = $this->medios_model->getUnMedio($param1);
				//var_dump($data['unaZona']);
				break;
			case 'eliminarMedio':
				$data['unMedio'] = $this->medios_model->getUnMedio($param1);
				break;

			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('medios/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

	public function editarMedio()
	{
		$medio = array(
			'medio' 			=> $this->input->post("nombreMedio"),
			'DescripcionMedio' => $this->input->post("descripcionMedio")
			 );
		$data['title'] = ucfirst("home");
		$idMedio = (int)$this->input->post('idMedio');
		
		if ($this->medios_model->updateMedio($idMedio, $medio)) {
			redirect('cmedios/view/verMedios/','refresh');	
		} else {
			redirect('','refresh');
		}
		
	}

	public function altaMedio()
	{
		$unMedio = array(
			'medio' => $this->input->post('nombreMedio'), 
			'DescripcionMedio' =>$this->input->post('descripcionMedio') 
			);
		$data['title'] = ucfirst("home");
		$idMedio = $this->medios_model->insertMedio($unMedio);
		redirect('cmedios/view/verMedios/','refresh');	
	}

	public function eliminarMedio()
	{
		$idMedio = (int)$this->input->post('idMedio');
		if ($this->medios_model->deleteMedio($idMedio)) {
			redirect('cmedios/view/verMedios','refresh');
		} else {
			redirect('','refresh');
		}
	}

}