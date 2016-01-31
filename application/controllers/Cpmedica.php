<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cpmedica extends CI_Controller {
	//Funciones a copiar en todos los controladores
	public function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}

	public function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		if (!isset($is_logged_in) || $is_logged_in != true) {
			redirect(base_url(),'refresh');
		}
	}
// fin de funciones a copiar en todos los controladores

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
			case 'verUnaPmedica':
				$data['unaPmedica'] = $this->pmedica_model->getUnaPmedica($param1);
				break;
			case 'editarPmedica':
				$data['unaPmedica'] = $this->pmedica_model->getUnaPmedica($param1);
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
	public function editarPmedica($idPmedica)
	{
		$unaPmedica = array('tipoDeLecheBanco'=>$this->input->post('tipoLecheBReceptor'), 
						'cant_tomas'=>$this->input->post('cantTomas'),
						'kcal'=>$this->input->post('kil'),
						'volumen'=>$this->input->post('volTomas'),
						'medico'=>$this->input->post('medico'),
						'BebeReceptor_idBebeReceptor'=>$this->input->post('id_bebeReceptor'),
						'estadoPresMedica'=>$this->input->post('estadopm'),
						'observaciones'=>$this->input->post('observaciones'));
		//var_dump($unaPmedica);
		if ($this->pmedica_model->updatePmedica($unaPmedica,$idPmedica)) {
			redirect('cpmedica/view/verUnaPmedica/'.$idPmedica,'refresh');	
		} else {
			redirect('','refresh');
		}
	}

}

/* End of file Cpmedica.php */
/* Location: ./application/controllers/Cpmedica.php */