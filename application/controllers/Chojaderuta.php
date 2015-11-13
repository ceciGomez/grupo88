<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chojaderuta extends CI_Controller
{
    
    public function view($page = "home", $param = "", $param2 = "", $param3 = "")
    {
        if (!file_exists(APPPATH . '/views/hojaruta/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            show_404();
        }
        $data['showData'] = false;
        switch ($page) {
            case 'verhrSemanal':
                $data['hojasdeRuta'] = $this->hojaruta_model->getWeekhr();
                //var_dump($data['hojasdeRuta']);
                break;
            case 'verTodashr':
                $data['hojasdeRuta'] = $this->hojaruta_model->getAllhr();

                //var_dump($data['hojasdeRuta']);
                break;
            case 'generarHr':
                $data['fecha'] = $param2;
                //$data['fechaArreglada'] = $this->hojaruta_model->arreglarFecha($param2);
                //$data['diaSemana'] = $this->hojaruta_model->getNumerDay($param2);
                
                break;
            case 'generarHrCons':
                $data['hojaderuta']         = $this->hojaruta_model->getUnaHRuta($param);
                $data['diaSemana']          = $this->hojaruta_model->getNumerDay($data['hojaderuta'][0]->fechaRecorrido);
                $data['fechaCreaArreglada']  = $this->hojaruta_model->arreglarFecha($data['hojaderuta'][0]->fechaCreacionHdR);
                $data['fechaRecArreglada'] = $this->hojaruta_model->arreglarFecha($data['hojaderuta'][0]->fechaRecorrido);
                $data['hrxcons']            = $this->hojaruta_model->getConsxHr($data['hojaderuta'][0]->idHojaDeRuta);
                //var_dump($data['hrxcons']);
                //var_dump($data['hojasdeRuta']);
                break;
            case 'verUnaHojaRuta':
                $data['unaHR'] = $this->hojaruta_model->getUnaHRuta($param);
                 $data['consentAsociados'] = $this->hojaruta_model->getConsxHr($param);
                break;
            case 'editarUnaHojaRuta':
                $data['unaHR'] = $this->hojaruta_model->getUnaHRuta($param);
                $data['consentAsociados'] = $this->hojaruta_model->getConsxHr($param);
                break;
            case 'agregarConsentimientos':
                $data['hojaderuta']         = $this->hojaruta_model->getUnaHRuta($param);
                $data['consentimientosActivos'] = $this->consentimiento_model->getAllConsentimientoActivos();
                # code...
                break;
            case 'quitarConsentimientos':
                $data['idHr'] = $param2;
                $data['idCons'] = $param;
                # code...
                break;
            default:
                # code...
                break;
        }
        $data['title'] = ucfirst($page); // Capitalize the first letter
        
        $this->load->view('templates/cabecera', $data);
        $this->load->view('templates/menu', $data);
        $this->load->view('hojaruta/' . $page, $data);
        $this->load->view('templates/pie', $data);
    }    
    public function buscarConsxFiltro()
    /* Esta funcion busca y crea la tabla intermedia de consentimientos 
    por hojas de rutas */
    {
        $criterioSeleccionado = $this->input->post("criterio");
        $zona                 = $this->input->post("zona");
        $dia                  = $this->input->post("dia");
        $fechaArray           = explode('/', $this->input->post("fecha"));
        $date                 = new DateTime();
        $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
        $fecha = $date->format('Y-m-d');
        if ($criterioSeleccionado == 'zona') {
            //va a buscar por zonas
            $data['consenEncontrados'] = $this->hojaruta_model->getConsentimientosPorZona($zona);
            //redirect('chojaderuta/view/generarHrCons/'.$zona.'/'.$fecha.'/'.'1','refresh');
        } else {
            //va a buscar por dia
            $data['consenEncontrados'] = $this->hojaruta_model->getConsentimientosPorDia($dia);
            
            //redirect('chojaderuta/view/generarHrCons/'.$zona.'/'.$fecha.'/'.'0','refresh');
            
        }
        //con esta forma se toma el formato de fecha
        $datestring = "%Y-%m-%d";
        //la funcion mdate con un solo parametro da la fecha actual
        $now        = mdate($datestring);
        //crear el array que va a ser pasado para la creación de la hr
        $hruta      = array(
            //obtener la fecha de  generacion la hoja de ruta
            'fechaCreacionHdR' => $now,
            'zona' => $zona,
            'chofer' => $this->input->post("chofer"),
            //obtener la fecha de recorrido en que se quiere generar la hoja de ruta
            'fechaRecorrido' => $fecha,
            'asistente' => $this->input->post("asistente")
            
        );
        //crear la hoja de Ruta
        $idHrCreada = $this->hojaruta_model->newhojaruta($hruta);
        //var_dump($idHrCreada);
        //var_dump($hruta);
        foreach ($data['consenEncontrados'] as $value) {
            //var_dump($value);
            
            if ($value) {
                $consxHruta = array(
                    'Consentimiento_nroConsentimiento' => $value->nroConsentimiento,
                    'HojaDeRuta_idHojaDeRuta' => $idHrCreada,
                    'cantFrascosEntregados' => $this->input->post('frascos')
                );
                //var_dump($consen);
                $idHrxCons  = $this->hojaruta_model->newConsxHR($consxHruta);
            } else {
                # code...
                echo 'no esta cargando los datos en hr x consent';
            }   
        }
        redirect('chojaderuta/view/generarHrCons/' . $idHrCreada, 'refresh');   
    }
    
    public function agregarConsentimientos($idHrporConsentimiento)
    {   
        /* Busca cada consentimiento seleccionada para ver si existe 
        para evitar cualquier error
        Agrega cada consentimiento a la tabla */
        foreach ($this->input->post("consSel") as $value) {
            //var_dump($value);
            $consen = $this->consentimiento_model->getConsentimiento("$value");
            if ($consen) {
                $consxHruta = array(
                    'Consentimiento_nroConsentimiento' => $value,
                    'HojaDeRuta_idHojaDeRuta' => $idHrporConsentimiento,
                    'cantFrascosEntregados' => $this->input->post('frascos')
                );
                //var_dump($consen);
                $idHrxCons  = $this->hojaruta_model->newConsxHR($consxHruta);
               
            } else {
                # code...
                echo 'no esta cargando los datos en hr x consent';
            }
        }

        redirect('chojaderuta/view/generarHrCons/'. $idHrporConsentimiento, 'refresh'); 
    }
    /*funcion para quitar los consentimienos, solo al presionar la cruz 
    se deberian eliminar de la hoja de ruta*/
    public function quitarConsentimiento($idConsentimiento, $idHojaDeRuta)
    {
        # code...
        $this->hojaruta_model->quitarConsentimiento($idConsentimiento, $idHojaDeRuta);
        redirect('chojaderuta/view/generarHrCons/'. $idHojaDeRuta, 'refresh'); 

    }
}



/* End of file Chojaderuta.php */
/* Location: ./application/controllers/Chojaderuta.php */