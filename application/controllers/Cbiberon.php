<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cbiberon extends CI_Controller {

	public function view($page="home", $param="")
	{
		
		if ( ! file_exists(APPPATH.'/views/biberones/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
     switch ($page) {
			case 'administrarBiberones':
				$data["biberones"] = $this->biberon_model->getAllBiberones();
				break;
			case 'cargaCultivoBiberon':
				$data["unBiberon"] = $this->biberon_model->getUnBiberon($param);
				break;
			case 'verUnBiberon':
				$data["unBiberon"] = $this->biberon_model->getUnBiberon($param);
				break;
			case 'editarBiberon':
				$data["unBiberon"] = $this->biberon_model->getUnBiberon($param);
				break;		
			default:
				# code...
			break;
		}
		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('biberones/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}
	public function guardarAnalisis()
	{
		$unBiberon= array(
		 	'colCrema' =>$this->input->post("colCrema"),
		 	'porcenCrema' =>$this->input->post("porcenCrema"),
		 	'porcenGrasa' =>$this->input->post("porcenGrasa"),
		 	'totalCol' =>$this->input->post("totalCol"),
		 	'kcali' =>$this->input->post("kCali"),
		 	'acidezD' =>$this->input->post("acidezD"),
		 	'caldo' =>$this->input->post("caldo"),
		 	'placaclde' =>$this->input->post("placacIde"),
		 	'PlacaAS' =>$this->input->post("placaAS"),
		 	'identif' =>$this->input->post("ident"),
		 	'eg' =>$this->input->post("eg"),
		 	'estadoBiberon' =>$this->input->post("estadoBiberon"),
		 	'motivoRechazoBiberon' =>$this->input->post("motivoRechazoBiberon"),
		 	 );
		 //var_dump($unBiberon);
		 $data['title'] = ucfirst("home");
		 $idBib = (int)$this->input->post("nroBib");
				 if ($this->biberon_model->updateBiberon($unBiberon, $idBib)) {
					redirect('cbiberon/view/administrarBiberones','refresh');
					} else 
				{
					redirect('','refresh');
				}
	}

}

/* End of file Cpmedica.php */
/* Location: ./application/controllers/Cpmedica.php */