<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpasteurizacion extends CI_Controller {

	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/pasteurizacion/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
			case 'nuevaPasteurizacion':
			$data["frascos"] = $this->frascos_model->getFrascosPasteurizar();
			break;
			
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('pasteurizacion/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

	public function agregarFrascos()
	{
		$cfrascos = 0;
		$b = 3;
		foreach ($this->input->post("consSel") as $value) {
			$cantFrascos == $cantFrascos + 1;
			}
		if ($cantFrascos == $b){
			$dato = (object) array('elemSelec' => $this->input->post("consSel[]"));
		$this->load->view('templates/cabecera', $dato);
		$this->load->view('templates/menu', $dato);
		$this->load->view('pasteurizacion/mostrarFrascos', $dato);
		$this->load->view('templates/pie', $dato);
		  }elseif ($cantFrascos < $b){
			//mensaje de cuantos frascos le falta seleccionar
			}else ($cantFrascos > $b){
				//mensaje de cuantos frascos debe deseleccionar



		//var_dump($this->input->post("consSel[]"));
		
		//var_dump($this->input->post("mostrarValue"));
		//$elemSelec = $this->input->post("consSel[]");
		//redirect('Cpasteurizacion/view/mostrarFrascos/'.$elemSelec,'refresh');
	}

	

}

