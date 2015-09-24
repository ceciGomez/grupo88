<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Consentimiento extends CI_Controller {

	public function view($page="home")
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
			case 'verUnaDonante':
			$data["unaDonante"] = $this->donantes_model->getDonante($param);
			//var_dump($data["unaDonante"]);
			break;
			case 'editarDonante':
			$data["unaDonante"] = $this->donantes_model->getDonante($param);
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
		$unconsentimiento =  array(
			//nombre en la bd -----------------------> nombre de name
			'fechaDesde' 			=> $this->input->post("IfechaDesde") , 
			'fechaHasta' 			=> $this->input->post("IfechaHasta"),
			'dia' 					=> $this->input->post("IdiaVisita") ,
			'calle'  				=> $this->input->post("Icalle") ,
			'altura'  				=> $this->input->post("Inumero") ,
			'barrio' 				=> $this->input->post("Ibarrio") ,
			'mz'					=> $this->input->post("Imz"), 
			'pc'					=> $this->input->post("Ipc"), 
			'piso'					=> $this->input->post("Ipiso"), 
			'departamento'			=> $this->input->post("Idpto"),
			'permiteFoto'			=> $this->input->post("IpermiteFoto"),
			'solicitudSerologia'	=> $this->input->post("IpedidoSerologia")
			);
		
		$data['title'] = ucfirst("home");
		if ($this->consentimiento_model->insertNewConsentimiento($unConsentimiento)) {
			redirect('consentimiento/view/verConsentimientos','refresh');
		} else {
			redirect('','refresh');
		}
	}

}
