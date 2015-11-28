<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Czona extends CI_Controller {

	public function view($page="home", $param1="", $param2="",$param3="")
	{
		
		if ( ! file_exists(APPPATH.'/views/zona/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
     switch ($page) {
			case 'verTodasLasZonas':
				$data["zonas"] = $this->zona_model->getAllZona();
				break;
			case 'verUnaZona':
				$data['unaZona'] = $this->zona_model->getUnaZona($param1);
				//var_dump($data['unaZona']);
				break;
			case 'editarZona':
				$data['unaZona'] = $this->zona_model->getUnaZona($param1);
				//var_dump($data['unaZona']);
				break;
			case 'eliminarZona':
				$data['unaZona'] = $this->zona_model->getUnaZona($param1);
				break;
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('zona/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}
	public function altaZona()
	{
		$unaZona = array(
			'nombreZona' => $this->input->post('nombreZona'), 
			'Localidad_idLocalidad' =>$this->input->post('localidad') , 
			'dia_visita' =>$this->input->post('diaVisita') 
			);
		$data['title'] = ucfirst("home");
		$idZona = $this->zona_model->insertZona($unaZona);
		redirect('czona/view/verTodasLasZonas/','refresh');	
	}
	public function editarZona()
	{
		$zona = array(
			'nombreZona' 			=> $this->input->post("nombreZona"),
			'Localidad_idLocalidad' => $this->input->post("localidad"),
			'dia_visita'			=> $this->input->post("diaVisita")
			 );
		$data['title'] = ucfirst("home");
		$idZona = (int)$this->input->post('idzona');
		
		if ($this->zona_model->updateZona($idZona, $zona)) {
			redirect('czona/view/verTodasLasZonas/','refresh');	
		} else {
			redirect('','refresh');
		}
		
	}
	public function eliminarZona()
	{
		$idZona = (int)$this->input->post('idZona');
		if ($this->zona_model->deleteZona($idZona)) {
			redirect('czona/view/verTodasLasZonas','refresh');
		} else {
			redirect('','refresh');
		}
	}

}

/* End of file Czona.php */
/* Location: ./application/controllers/Czona.php */