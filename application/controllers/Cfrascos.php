<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cfrascos extends CI_Controller {

	public function view($page="home", $param="", $param2="")
	{
		if ( ! file_exists(APPPATH.'/views/frascos/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
		switch ($page) {
			case 'verFrascos':
			$data["frascos"] = $this->frascos_model->getAllFrascos();
			break;
			case 'ingresoFrascos':
			$data['result'] = $this->frascos_model->buscarDonanteFrasco(trim($param2));
			$data['unahr'] = $param;
			$data['nrofrasco'] = $param2;
			break;
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('frascos/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

	public function buscarDonanteFrasco() 
	{
		$nroFrasco = $this->input->get('nroFrasco');
		$nroHR = $this->input->get('nroHR');
		redirect('cfrascos/view/ingresoFrascos/'.$nroHR.'/'.$nroFrasco ,'refresh');
	}

	public function guardarFrasco(){

		 $fechaArray = explode('/', $this->input->post("fextraccion"));
		  $date = new DateTime();
		  $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		  $fecha= $date->format('Y-m-d');

		$unFrasco = array(
		'fechaExtraccion' =>$fecha,
		'volumenDeLeche' =>$this->input->post("vol"),
		'HRVuelta' =>$this->input->post("nroHR"),
		);

		$data['title'] = ucfirst("home");
		$numFrasco = $this->input->post("nroFrasco");

		if ($this->frascos_model->updateFrasco($unFrasco, $numFrasco )) {
			if ($this->input->post("guardarYterminar")!== null) {
				redirect('cfrascos/view/verFrascos','refresh');
			} else {
				redirect('cfrascos/view/ingresoFrascos/'.$this->input->post("nroHR") ,'refresh');
			}
			} else 
		{
			redirect('','refresh');
		}
		

	}


}

/* End of file Cfrascos.php */
/* Location: ./application/controllers/Cfrascos.php */