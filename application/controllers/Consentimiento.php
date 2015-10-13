<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consentimiento extends CI_Controller {
	
	public function view($page="home", $param1="", $param2="")
	{
		
		if ( ! file_exists(APPPATH.'/views/consentimiento/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
     switch ($page) {
			case 'verConsentimientos':
			$data["consentimiento"] = $this->consentimiento_model->getAllConsentimiento();

			break;
			case 'verUnConsentimiento':
			$data["unAsociado"] = $this->bebeasociado_model->getDatosBebeAsociado($param1);
			//var_dump($data["unAsociado"]);
			$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($param1);
			$data["unaDonante"] = $this->donantes_model->getDonante($param2);
			//var_dump($data["unaDonante"]);
			break;
			case 'consentimiento2':
			$data['unBebe'] = $this->bebeasociado_model->getBebeasociado($param1);
			$data['unaDonanteConsentimiento']= $this->donantes_model->getDonante($param2);
			//var_dump($data["unaDonanteConsentimiento"]);
			var_dump($data['unBebe']);
			case 'buscaconsentimiento':
			$query= 'asas';
			$data['result'] = $this->donantes_model->buscar(trim($query));
			$data['total']  = $this->donantes_model->totalResultados(trim($query));
			
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('consentimiento/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

   public function altaConsentimiento()
	{
		  $fechaArray = explode('/', $this->input->post("fecha"));
		  $date = new DateTime();
		  $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		  $fecha= $date->format('Y-m-d');

		$unconsentimiento =  array(
			//nombre en la bd -----------------------> nombre de name
			'fechaDesde' 			=> $fecha , 
			//'fechaHasta' 			=> $this->input->post("IfechaHasta"),
			'dia' 					=> $this->input->post("IdiaVisita") ,
			'calle'  				=> $this->input->post("Icalle") ,
			'altura'  				=> $this->input->post("Inumero") ,
			'barrio' 				=> $this->input->post("Ibarrio") ,
			'mz'					=> $this->input->post("Imz"), 
			'pc'					=> $this->input->post("Ipc"), 
			'piso'					=> $this->input->post("Ipiso"), 
			'departamento'			=> $this->input->post("Idpto"),
			'permiteFoto'			=> $this->input->post("IpermiteFoto"),
			'solicitudSerologia'	=> $this->input->post("IpedidoSerologia"),
			'Donante_nroDonante'	=> $this->input->post("nroDonante"),
			'Zona_idZona'	        => $this->input->post("Izona")
			);
		
		$data['title'] = ucfirst("home");
		$nroConsentimientoAlta = $this->consentimiento_model->insertNewConsentimiento($unconsentimiento);


		if ($nroConsentimientoAlta == 0) {
			echo "error algo ";
			//deberia ir una pagina de error
		} else {
			$data['unBebe'] = $this->bebeasociado_model->getBebeasociado($this->input->post("nroBebeAsociado"));
			//var_dump($data['unBebe']);
			$unBebeArreglado = array(

				//preguntar a manu para actualizar los otros campos
			    'Consentimiento_nroConsentimiento'	=> $nroConsentimientoAlta, 
			
				);
			//echo $nroConsentimientoAlta;
			//echo $this->input->post("nroBebeAsociado");
			$this->bebeasociado_model->updateBebeasociado($unBebeArreglado,$this->input->post("nroBebeAsociado"));
			redirect('consentimiento/view/verConsentimientos','refresh');
			
		}
	}

	public function buscar() 
	{
		$data = array();
		$query = $this->input->get('query', TRUE);
		if ($query) {
			$result = $this->donantes_model->buscar(trim($query));
			$total  = $this->donantes_model->totalResultados(trim($query));
			if ($result != FALSE){
				$data = array(
					'result' => $result,
					'total'  => $total
				);
			}else {
				$data = array('result' => '', 'total' => $total);
			}	
		}else{
			$data = array('result' => '', 'total' => 0);
		}
		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('consentimiento/buscaconsentimiento', $data);
		$this->load->view('templates/pie', $data);

	}
}