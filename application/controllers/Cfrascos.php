<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cfrascos extends CI_Controller {

	public function view($page="home", $param="", $param1="")
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
			$query= 'asas';
			$data['result'] = $this->frascos_model->buscarDonanteFrasco(trim($query));
			//$data['total']  = $this->frascos_model->totalResultados(trim($query));
			//$data["unahr"] = $param;
			var_dump($data['result']);
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
		$data = array();
		$query = $this->input->get('query', TRUE);
		if ($query) {
			$result = $this->frascos_model->buscarDonanteFrasco(trim($query));
			if ($result != FALSE){
				$data = array(
					'result' => $result,
					);
			}else {
				$data = array(
					'result' => '',
					);
			} 	
		}else{
			$data = array('result' => '',
			);
		}
		
		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('frascos/ingresoFrascos', $data);
		$this->load->view('templates/pie', $data);

	}
	public function guardarFrasco($nroHR, $sigue){

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
		$nroFrasco = $this->frascos_model->updateFrascos($unFrasco);
		
		if ($sigue =='1') {
			// 1= guarda y termina
			redirect('cfrascos/view/verFrascos','refresh');
			} else {
				redirect('cfrascos/view/ingresaFrascos/'.$nroHR.'/'.$sigue);
			}

	}


}

/* End of file Cfrascos.php */
/* Location: ./application/controllers/Cfrascos.php */