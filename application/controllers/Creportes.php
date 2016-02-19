<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Creportes extends CI_Controller {

	public function view($page="home", $param="", $param2="")
	{
		if ( ! file_exists(APPPATH.'/views/reportes/'.$page.'.php'))
		{
			// Whoops, we don't have a page for that!
			show_404();
		}
			switch ($page) {
			case 'repor_donante':
				$data["donante"] = $this->reporte_model->repo_DatosDonantes();
			break;
			case 'repor_consentimiento':
			if ($param2 && $param) {
				$data["donante"] = $this->reporte_model->repo_madresActivas($this->sanitizarFecha($param), $this->sanitizarFecha($param2));
			}else {
				$data['donante'] = $this->reporte_model->repo_AllmadresActivas();
			}
			$data['fechaInicio'] = $param;
			$data['fechaFin'] = $param2;
			break;
			case 'repor_pasteurizacion':
			if ($param2 && $param) {
			$data["pepe"] = $this->reporte_model->repPasteurizacion($this->sanitizarFecha($param), $this->sanitizarFecha($param2));
			}else{
				$data["pepe"]=$this->reporte_model->repAllPasteurizacion();
			}
			$data['fechaInicio'] = $param;
			$data['fechaFin'] = $param2;
			break;
			
			case 'repor_lrecolectada':
			$data["recolectada"] = $this->reporte_model->repo_recolectada($this->sanitizarFecha($param), $this->sanitizarFecha($param2));
			
			$data['fechaInicio'] = $param;
			$data['fechaFin'] = $param2;
			break;
			case 'repor_lconsumida':
			$data["consumida"] = $this->reporte_model->repo_consumida($this->sanitizarFecha($param), $this->sanitizarFecha($param2));
			
			$data['fechaInicio'] = $param;
			$data['fechaFin'] = $param2;
			break;
			default:
				# code...
			break;
		}

		$data['title'] = ucfirst($page); // Capitalize the first letter

		$this->load->view('templates/cabecera', $data);
		$this->load->view('templates/menu', $data);
		$this->load->view('reportes/'.$page, $data);
		$this->load->view('templates/pie', $data);
	}

	public function generarReporteDeHojaDeRuta($unaHojaDeRuta)
	{
		$pdf = new Reportes('L','mm','A4');
		$pdf->crearHeader($unaHojaDeRuta);
		//busco la hr
		$cabecera = $this->reporte_model->buscarHojaDeRuta($unaHojaDeRuta);
		//genero la fecha en español
		$fechaArray = explode('-', $cabecera['fechaRecorrido']);
		$fechaCreacionHdRf = explode('-',$cabecera['fechaCreacionHdR']);
	    $date = new DateTime();
	    $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
	    $fecha= $date->format('d-m-Y');
	    $datefechaCreacionHdRf = new DateTime();
	    $datefechaCreacionHdRf->setDate($fechaCreacionHdRf[0], $fechaCreacionHdRf[1], $fechaCreacionHdRf[2]);
	    $fechaCreacionHdR= $datefechaCreacionHdRf->format('d-m-Y');
	    $pdf->GenerarFecha($unaHojaDeRuta,$fecha, $this->reporte_model->getDay($fecha), $fechaCreacionHdR);
		//consulta la zona
		$NombreZona = $this->reporte_model->getNombreZona($cabecera['zona']);
		$pdf->generaZona($NombreZona, $cabecera);

		//
		$consentimientos = $this->reporte_model->getConsentimientos($unaHojaDeRuta);
		foreach ($consentimientos as $consentimiento) {
			$con = $this->reporte_model->getConsentimiento($consentimiento['Consentimiento_nroConsentimiento']);
			$pdf->generaConsentimiento($consentimiento, $con);
		}
		$pdf->Output();
	}

	public function buscarPorFecha()
	{
		$fechaInicio = $this->input->get("fdesde");
		$fechaFin = $this->input->get("fhasta");
		//		redirect('creportes/view/repor_donante/'.$fechaInicio.'/'.$fechaFin,'refresh');
		redirect('creportes/view/repor_consentimiento/'.$fechaInicio.'/'.$fechaFin,'refresh');
		
	}
	 public function buscarPorFecha3()
	{
		$fechaInicio = $this->input->get("fdesde");
		$fechaFin = $this->input->get("fhasta");
		//		redirect('creportes/view/repor_donante/'.$fechaInicio.'/'.$fechaFin,'refresh');
		redirect('creportes/view/repor_pasteurizacion/'.$fechaInicio.'/'.$fechaFin,'refresh');
		
	}
    public function buscarPorFecha2()
	{
		$fechaInicio = $this->input->get("fdesde");
		$fechaFin = $this->input->get("fhasta");
		redirect('creportes/view/repor_lrecolectada/'.$fechaInicio.'/'.$fechaFin,'refresh');
	}
	public function buscarPorFecha4()
	{
		$fechaInicio = $this->input->get("fdesde");
		$fechaFin = $this->input->get("fhasta");
		redirect('creportes/view/repor_lconsumida/'.$fechaInicio.'/'.$fechaFin,'refresh');
	}
	public function sanitizarFecha($fecha)
	{
		//$date = date_create_from_format('d-m-Y', $fecha);
		$date = date_create($fecha);
    	return date_format($date, 'Y-m-d');
	}

}

/* End of file Reportes.php */
/* Location: ./application/controllers/Reportes.php */