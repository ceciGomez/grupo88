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
			$data["unId"] = $param;
			var_dump($param);
			break;
			case 'mostrarPasteurizacion':
			$data["unaPasteurizacion"] = $this->pasteurizacion_model->getUnaPasteurizacion($param);
			$data["biberones"] = $this->biberon_model->mostrarBiberones($param);
			break;
			case 'verUnaPasteurizacion':
			$data["unaPasteurizacion"] = $this->pasteurizacion_model->getUnaPasteurizacion($param);
			$data["biberones"] = $this->biberon_model->mostrarBiberones($param);
			break;
			case 'verPasteurizaciones':
			$data["pasteurizaciones"] = $this->pasteurizacion_model->getAllPasteurizacion();
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
		redirect('Cpasteurizacion/view/nuevaPasteurizacion/'.$idPasteurizacion,'refresh');	

		}

	public function agregarFrascos()
	{		
			$dato['elemSelec'] = $this->input->post("consSel[]");
			$dato['idPast'] = $this->input->post("idPasteurizacion");
			$this->load->view('templates/cabecera', $dato);
			$this->load->view('templates/menu', $dato);
			$this->load->view('pasteurizacion/otraForma', $dato);
			$this->load->view('templates/pie', $dato);
			//var_dump($dato['elemSelec']);
			//var_dump($dato['idPast']);
		  }
		 
		  public function crearBiberon()
		  {
		  	$fSeleccionados = $this->input->post("frascoSelec");
		  	$volumenDiv = $this->input->post("volBib");
		  	$idPasteurizacion = $this->input->post("idPasteurizacion");
		   
			//CAMBIAR TOPE DE $i
		  	for ($i=0; $i < 8 ; $i++) { 
		  		if ($fSeleccionados[$i]<> 0) {
		  		 $frasco = $fSeleccionados[$i];
		  		 
		  		 //var_dump($frasco);
		  		 $volumen = $volumenDiv[$i];
		  		
		  		 //var_dump($volumen);
		  		//var_dump($fSeleccionados[$i]);
		  		
		  		 $bib = array('bib' => $this->guardaBiberon($frasco, $volumen,$idPasteurizacion));
		  		}else{
		  			echo '<script language="javascript">alert("No has seleccionado un frasco para un biberon");</script>'; 
		  			redirect('Cpasteurizacion/view/nuevaPasteurizacion/','refresh');
		  		}
		  	}

		  redirect('Cpasteurizacion/view/mostrarPasteurizacion/'.$idPasteurizacion,'refresh');
		  }

		public function guardaBiberon($frasco, $volumen,$idPasteurizacion)
		{   $unaPasteurizacion = $this->pasteurizacion_model->getUnaPasteurizacion("$idPasteurizacion"); 
			$unFrasco = $this->frascos_model->getFrasco("$frasco");
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
				'frasco_idFrasco'=>$idFrasco,
				'pasteurizacion_idPasteurizacion'=> $unaPasteurizacion[0]->idPasteurizacion,
				 );
			$idBiberon = $this->biberon_model->insertNewBiberon($unBiberon);
			//ACTUALIZA ESTADO DE FRASCO PARA NO SER LISTADO EN EL PROXIMO PROCESO DE PASTEURIZACION
			$nuevoEstado = array(
				'estadoDeFrasco' => "Pasteurizado",
				 );
			$guardaEstado = $this->frascos_model->updateFrasco($nuevoEstado, $idFrasco);
		}
		  




}