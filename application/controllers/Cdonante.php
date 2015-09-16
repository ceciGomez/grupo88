
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cdonante extends CI_Controller {

	public function view($page="home", $param="")
	{
		if ( ! file_exists(APPPATH.'/views/donante/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}

		switch ($page) {
			case 'verDonantes':
			$data["donante"] = $this->donantes_model->getAllDonante();
			break;
			case 'verUnaDonante':
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
		$this->load->view('donante/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}


	public function altaDonante()
	{
		$donante =  array(
			//nombre en la bd -----------------------> nombre de name
			'nombre' 			=> $this->input->post("nombre") , 
			'apellido' 			=> $this->input->post("apellido"),
			'fechNacDonante' 	=> $this->input->post("fecha") ,
			'dniDonante'  		=> $this->input->post("dni") ,
			'emailDonante'  	=> $this->input->post("email") ,
			'ocupacion' 		=> $this->input->post("ocupacion") ,
			'telefonoDonante'	=> $this->input->post("celular"), 
			'nivelEstudio'	=> $this->input->post("estudios"), 
			'tipoDonante'	=> $this->input->post("tipo"), 
			'estadoCivil'		=> $this->input->post("estadoCivil") 
			
			);
		
		//var_dump($donante["fecha"]);
		//var_dump($donante["nombre"]);
		$data['title'] = ucfirst("home");
		if ($this->donantes_model->insertNewDonante($donante)) {
			redirect('cdonante/view/verDonantes','refresh');
		} else {
			redirect('','refresh');
		}
	}
}

/* End of file Page.php */
/* Location: ./application/controllers/Page.php */