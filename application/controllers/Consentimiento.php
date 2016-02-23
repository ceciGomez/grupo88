<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consentimiento extends CI_Controller {
	
	public function view($page="home", $param1="", $param2="",$param3="")
	{
		
		if ( ! file_exists(APPPATH.'/views/consentimiento/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
     switch ($page) {
			case 'verTodosConsentimientos':
			$data["consentimiento"] = $this->consentimiento_model->getAllConsentimiento();
			break;
			case 'verConsentimientos':
			$data["consentimiento"] = $this->consentimiento_model->getAllConsentimientoActivos();
			//var_dump($this->serologia_model->serologiaConsentimiento('6'));
			break;
			case 'verUnConsentimiento':
			$data["unAsociado"] = $this->bebeasociado_model->getDatosBebeAsociado($param1);
			$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($param1);
			$data["unaDonante"] = $this->donantes_model->getDonante($data["unConsentimiento"][0]->Donante_nroDonante);
			//var_dump($data["unaDonante"]);
			//var_dump($data["unAsociado"]);
			break;
			case 'consentimiento2':
			$data['unBebe'] = $this->bebeasociado_model->getBebeasociado($param1);
			$data['unaDonanteConsentimiento']= $this->donantes_model->getDonante($param2);
			$data['unaCondicion']= $param3;
			$data['todasLasZonas'] = $this->zona_model->getAllZona();
			$data['medios']= $this->medios_model->getAllMedios();
			//var_dump($data["unaDonanteConsentimiento"]);
			//var_dump($data["unBebe"]);
			break;
			case 'buscaconsentimiento':
			$query= 'asas';
			$data['result'] = $this->donantes_model->buscar(trim($query));
			$data['total']  = $this->donantes_model->totalResultados(trim($query));
			break;
			case 'verEditarConsent':
			$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($param1);
			break;
			case 'editarConsentimiento':
			$data['todasLasZonas'] = $this->zona_model->getAllZona();
			$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($param1);
			break;
			case 'finConsentimiento':
			$data["unAsociado"] = $this->bebeasociado_model->getDatosBebeAsociado($param1);
			//var_dump($data["unAsociado"]);
			$data["unConsentimiento"] = $this->consentimiento_model->getConsentimiento($param1);
			$data["unaDonante"] = $this->donantes_model->getDonante($param2);
			//var_dump($data["unaDonante"]);
			break;
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
		  $fechaArray = explode('/', $this->input->post("desde"));
		  $date = new DateTime();
		  $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		  $fecha= $date->format('Y-m-d');

		$unconsentimiento =  array(
			//nombre en la bd -----------------------> nombre de name
			'fechaDesde' 			=> $fecha , 
			'dia' 					=> $this->input->post("diaVisita") ,
			'calle'  				=> $this->input->post("calle") ,
			'altura'  				=> $this->input->post("numero") ,
			'barrio' 				=> $this->input->post("barrio") ,
			'mz'					=> $this->input->post("mz"), 
			'pc'					=> $this->input->post("pc"), 
			'piso'					=> $this->input->post("piso"), 
			'departamento'			=> $this->input->post("dpto"),
			'permiteFoto'			=> $this->input->post("permiteFoto"),
			'solicitudSerologia'	=> $this->input->post("pedidoSerologia"),
			'medio'					=> $this->input->post("medio"),
			'Donante_nroDonante'	=> $this->input->post("nroDonante"),
			'Zona_idZona'	        => $this->input->post("zona"),
			'cantFrascos'	        => $this->input->post("frascos"),

			);
		$data['title'] = ucfirst("home");
		$nroConsentimientoAlta = $this->consentimiento_model->insertNewConsentimiento($unconsentimiento);
		if ($nroConsentimientoAlta == 0) {
			echo "error algo ";
			//deberia ir una pagina de error
		} else {
			$data['unBebe'] = $this->bebeasociado_model->getBebeasociado($this->input->post("idBebeAsociado"));
			$unBebeArreglado = array(
			    'Consentimiento_nroConsentimiento'	=> $nroConsentimientoAlta, 
				);
			$this->bebeasociado_model->updateBebeasociado($unBebeArreglado,$this->input->post("idBebeAsociado"));
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

	public function finalConsentimiento(){
		$fechaArray = explode('-', $this->input->post("hasta"));
		  $date = new DateTime();
		  $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
		  $fecha= $date->format('Y-m-d');
		  
		 $unCons= array(
		 	'fechaHasta' =>$fecha,
		 	'estadoConsent' => 1,
		 	 );
		 $data['title'] = ucfirst("home");
		 $nroConsentimiento =(int)$this->input->post("nroConsentimiento");
		 if ($this->consentimiento_model->updateConsentimiento($unCons, $nroConsentimiento )) {
			redirect('consentimiento/view/verConsentimientos','refresh');
			} else 
		{
			redirect('','refresh');
		}
	}

	public function guardarModificacionesConsentimiento()
	{
			$consentimiento =  array(
			//nombre en la bd -----------------------> nombre de name
			
			'dia' 					=> $this->input->post("diaVisita") ,
			'calle'  				=> $this->input->post("calle") ,
			'altura'  				=> $this->input->post("numero") ,
			'barrio' 				=> $this->input->post("barrio") ,
			'mz'					=> $this->input->post("mz"), 
			'pc'					=> $this->input->post("pc"), 
			'piso'					=> $this->input->post("piso"), 
			'departamento'			=> $this->input->post("dpto"),
			'permiteFoto'			=> $this->input->post("permiteFoto"),
			'solicitudSerologia'	=> $this->input->post("pedidoSerologia"),
			'cantFrascos'			=> $this->input->post("frascos"),
			);
		$data['title'] = ucfirst("home");
		$nroConsentimiento =(int)$this->input->post("nroConsentimiento");
		if ($this->consentimiento_model->updateConsentimiento($consentimiento, $nroConsentimiento)) {
			
			redirect('consentimiento/view/verConsentimientos','refresh');
			

		} else 
		{
			redirect('','refresh');
		}
	}

	public function cancelaIngreso(){
		$unaCondicion = $this->input->post("condicion");
		$nroDonante =array(
				"nroDonante"=>(int)$this->input->post("nroDonante"));
		$idBebeAsociado =array(
				"idBebeAsociado"=>(int)$this->input->post("idBebeAsociado"));
		
		if ($unaCondicion == "1"){
			$this->donantes_model->deleteDonante($nroDonante);
			$this->bebeasociado_model->deleteBebeasociado($idBebeAsociado);
			} else {
			$this->bebeasociado_model->deleteBebeasociado($idBebeAsociado);
			}
		redirect('consentimiento/view/verConsentimientos','refresh');
	}

}