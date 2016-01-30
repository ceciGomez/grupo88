<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpmedica extends CI_Controller {

	public function view($page="home", $param1="", $param2="",$param3="")
	{
		
		if ( ! file_exists(APPPATH.'/views/pmedica/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
     switch ($page) {
			case 'verTodasLasPmedicas':
				$data["pmedicas"] = $this->pmedica_model->getAllPmedica();
				break;
			
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('pmedica/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}
	public function altaPmedica()
	{
		 $datestring = "%Y-%m-%d";
        //la funcion mdate con un solo parametro da la fecha actual
        $now        = mdate($datestring);
		$unaPmedica = array('tipoDeLecheBanco'=>$this->input->post('tipoLecheBReceptor'), 
							'cant_tomas'=>$this->input->post('cantTomas'),
							'kcal'=>$this->input->post('kil'),
							'volumen'=>$this->input->post('volTomas'),
							'medico'=>$this->input->post('medico'),
							'BebeReceptor_idBebeReceptor'=>$this->input->post('id_bebeReceptor'),
							'fechaPrescripcion'=>$now,
							'observaciones'=>$this->input->post('observaciones'));
		$data['title'] = ucfirst("home");
		//var_dump($unaPmedica);
		$idPmedica = $this->pmedica_model->insertPmedica($unaPmedica);
		redirect('cpmedica/view/verTodasLasPmedicas/','refresh');	
	}

}

/* End of file Cpmedica.php */
/* Location: ./application/controllers/Cpmedica.php */