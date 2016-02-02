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

		public function registrarPasteurizacion()
		{
			$fechaArray = explode('/', $this->input->post("fpasteurizacion"));
					  $date = new DateTime();
					  $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
					  $fecha= $date->format('Y-m-d');

			$unaPasteurizacion = array(
				'fechaPasteurizacion' =>$fecha, 
				'responsable' =>$this->input->post("responsable"), 
			);

			$idPasteurizacion = $this->pasteurizacion_model->insertPasteurizacion($unaPasteurizacion);
		redirect('Cpasteurizacion/view/nuevaPasteurizacion/','refresh');	

		}

	public function agregarFrascos()
	{
			$dato = (object) array('elemSelec' => $this->input->post("consSel[]"));
			$this->load->view('templates/cabecera', $dato);
			$this->load->view('templates/menu', $dato);
			$this->load->view('pasteurizacion/otraForma', $dato);
			$this->load->view('templates/pie', $dato);
		  }
		 
		  public function crearBiberon()
		  {
		  	$fSeleccionados = $this->input->post("frascoSelec");
		  	$volumenDiv = $this->input->post ("volBib");
		  	$cont = 1;
		  	for ($i=0; $i < 36 ; $i++) { 
		  		if ($frascoSelec[0]<> 0) {
		  		 $frasco = $fSeleccionados[$i];
		  		 $volumen = $volumenDiv[$i];
		  		 $idFras = array('idFras' => $this->guardaBiberon($frasco, $volumen));
		  		}
		  	}
		  	//-----TERMINAR
		  }

		public function guardaBiberon($frasco, $volumen)
		{
			$unFrasco = $this->db->getFrasco("$frasco");
			$idFrasco = $unFrasco[0]->nroFrasco;
		if ($volumen == 0) {
			$unVol = $unFrasco[0]->volumenDeLeche;
		} else {
			$unVol = $volumen;
		}
		
			$unBiberon = array(
				'tipoDeLeche' => $unFrasco[0]->tipoDeLeche,
				'estadoBiberon' => $unFrasco[0]->estadoDeFrasco,
				'volumenDeLeche' => $unVol,
				 );
		}
		  




}