
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CentrosRec extends CI_Controller {

	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/centros/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
			case 'verCentrosR':
			$data["centros"] = $this->centros_model->getAllCentros();
			//var_dump($data["Centros"]);
			break;
			case 'verUnCentroR':
			$data["unCentro"] = $this->centros_model->getCentro($param);
			//var_dump($data["unCentro"]);
			break;
			case 'editarCentrosR':
			$data["unCentro"] = $this->centros_model->getCentro($param);
			var_dump($data["unCentro"]);
			break;
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('centros/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}


	public function altaCentro()
	{
		$centro =  array(
			//nombre en la bd -----------------------> nombre de name
			
			'nombreCentro' 		=> $this->input->post("nombre") , 
			'direccionCentro' 	=> $this->input->post("direccion"),
			'telefonoCentro' 	=> $this->input->post("telefono"),
			
			);
		$data['title'] = ucfirst("home");
		if ($this->centros_model->insertNewCentro($centro)) {
			//redirect('centrosRec/view/verCentrosR','refresh');
			var_dump($centro);
		} else {
			redirect('','refresh');
		}
	}
}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */