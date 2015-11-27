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
                $data['todasLasZonas'] = $this->zona_model->getAllZona();
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
                $data['fechaCreaArreglada']  = $this->hojaruta_model->arreglarFecha($data['unaHR'][0]->fechaCreacionHdR);
                $data['fechaRecArreglada'] = $this->hojaruta_model->arreglarFecha($data['unaHR'][0]->fechaRecorrido);
                $data['fechaUltModArreglada'] = $this->hojaruta_model->arreglarFecha($data['unaHR'][0]->fechaUltModificacion);
                $data['fechaEfecArreglada'] = $this->hojaruta_model->arreglarFecha($data['unaHR'][0]->fechaEfectivizacion);
                break;
            case 'editarUnaHojaRuta':
                $data['unaHR'] = $this->hojaruta_model->getUnaHRuta($param);
                $data['consentAsociados'] = $this->hojaruta_model->getConsxHr($param);
                $data['fechaCreaArreglada']  = $this->hojaruta_model->arreglarFecha($data['unaHR'][0]->fechaCreacionHdR);
                $data['fechaRecArreglada'] = $this->hojaruta_model->arreglarFecha($data['unaHR'][0]->fechaRecorrido);
               $data['fechaUltModArreglada'] = $this->hojaruta_model->arreglarFecha($data['unaHR'][0]->fechaUltModificacion);
               $data['fechaEfecArreglada'] = $this->hojaruta_model->arreglarFecha($data['unaHR'][0]->fechaEfectivizacion);
                 break;
            case 'agregarConsentimientos':
                $data['hojaderuta']         = $this->hojaruta_model->getUnaHRuta($param);
                $data['consentimientosActivos'] = $this->hojaruta_model->getConsActivoParaHR($data['hojaderuta'][0]->idHojaDeRuta);
                # code...
                break;
            case 'quitarConsentimientos':
                $data['idHr'] = $param2;
                $data['idCons'] = $param;
                $data['frascos'] = $this->frascos_model->getFrascosPorConsyHr($param2,$param);
               // var_dump($data['frascos']);
                # code...
                break;
            case 'registrarIngresoHr':
                $data['unaHR'] = $this->hojaruta_model->getUnaHRuta($param);
                $data['consentAsociados'] = $this->hojaruta_model->getConsxHr($param);
                $data['fechaCreaArreglada']  = $this->hojaruta_model->arreglarFecha($data['unaHR'][0]->fechaCreacionHdR);
                $data['fechaRecArreglada'] = $this->hojaruta_model->arreglarFecha($data['unaHR'][0]->fechaRecorrido);
                $data['fechaUltModArreglada'] = $this->hojaruta_model->arreglarFecha($data['unaHR'][0]->fechaUltModificacion);
                $data['fechaEfecArreglada'] = $this->hojaruta_model->arreglarFecha($data['unaHR'][0]->fechaEfectivizacion);
               
                break;
            case 'buscarHr':
            $query= 'asas';
            $data['result'] = $this->hojaruta_model->buscar(trim($query));
            $data['total']  = $this->hojaruta_model->totalResultados(trim($query));
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
    /* Esta funcion busca y crea la tabla intermedia de consentimientos 
    por hojas de rutas */
    public function buscarConsxFiltro()
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
                //se arma el arreglo para crear la tabla intermedia, con los datos de ida de la HR
                $unConsentimiento = $this->consentimiento_model->getConsentimiento( $value->nroConsentimiento);
                $consxHruta = array(
                    'Consentimiento_nroConsentimiento' => $value->nroConsentimiento,
                    'HojaDeRuta_idHojaDeRuta' => $idHrCreada,
                    'cantFrascosEntregados' => $unConsentimiento[0]->cantFrascos
                );
                //Se manda al modelo de HR el arreglo para crear la tabla intermedia.
                $idHrxCons  = $this->hojaruta_model->newConsxHR($consxHruta);
                //se Crean los frascos
                $cantFrascos = (int)$unConsentimiento[0]->cantFrascos;
                for ($i=0; $i < $cantFrascos; $i++) { 
                    $frascosArray = array(
                        'Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento' => $value->nroConsentimiento,
                        'Consentimiento_por_HojaDeRuta_HojaDeRuta_idHojaDeRuta' => $idHrCreada );
                    //se manda al modelo para crear cada frasco en consentimiento
                    $idFrasco = $this->frascos_model->insertNewFrasco($frascosArray);
                }
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
                $cantFrascos = (int)$consen[0]->cantFrascos;
                $consxHruta = array(
                    'Consentimiento_nroConsentimiento' => $value,
                    'HojaDeRuta_idHojaDeRuta' => $idHrporConsentimiento,
                    'cantFrascosEntregados' => $cantFrascos
                );
                //var_dump($consen);
                //var_dump($consxHruta);
                $idHrxCons  = $this->hojaruta_model->newConsxHR($consxHruta);
                //$cantFrascos = (int)$consen->cantFrascos;
                for ($i=0; $i < $cantFrascos; $i++) { 
                    $frascosArray = array(
                        'Consentimiento_por_HojaDeRuta_Consentimiento_nroConsentimiento' => $value,
                        'Consentimiento_por_HojaDeRuta_HojaDeRuta_idHojaDeRuta' => $idHrporConsentimiento );
                    //se manda al modelo para crear cada frasco en consentimiento
                    $idFrasco = $this->frascos_model->insertNewFrasco($frascosArray);
                }
               
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
        $this->frascos_model->deleteFrascoHrCons($idHojaDeRuta,$idConsentimiento);
        $this->hojaruta_model->quitarConsentimiento($idConsentimiento, $idHojaDeRuta);
        redirect('chojaderuta/view/generarHrCons/'. $idHojaDeRuta, 'refresh'); 

    }
    public function actualizarHr(){
        $fechaArray = explode('/', $this->input->post("frecorrido"));
        $date = new DateTime();
        $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
        $fecha= $date->format('Y-m-d');
        //con esta forma se toma el formato de fecha
        $datestring = "%Y-%m-%d";
        //la funcion mdate con un solo parametro da la fecha actual
        $now        = mdate($datestring);
        //crear el array que va a ser pasado para la creación de la hr
        
        $hojaruta =  array(
            //nombre en la bd -----------------------> nombre de name
            'fechaRecorrido'       => $fecha , 
            
            'fechaUltModificacion' => $now ,
            'zona'                 => $this->input->post("zona") ,
            'chofer'               => $this->input->post("chofer") ,
            'asistente'            => $this->input->post("asistente") ,
            'observaciones'        => $this->input->post("observaciones")
            );
        $data['title'] = ucfirst("home");
        $idHr =(int)$this->input->post("idhr");
        if ($this->hojaruta_model->updateHR($hojaruta, $idHr )) {
            redirect('chojaderuta/view/verUnaHojaRuta/'.$idHr,'refresh');

        } else {
            redirect('','refresh');
        }
    }
    //Funcion para buscar una HR
    public function buscar() 
    {
        $data = array();
        $query = $this->input->get('query', TRUE);
        if ($query) {
            $result = $this->hojaruta_model->buscar(trim($query));
            $total  = $this->hojaruta_model->totalResultados(trim($query));
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
        $this->load->view('hojaruta/buscarHr', $data);
        $this->load->view('templates/pie', $data);

    }
    public function registrarVuelta($idHojaruta)
    {
        $fechaArray = explode('/', $this->input->post("fefectivizacion"));
        $date = new DateTime();
        $date->setDate($fechaArray[2], $fechaArray[1], $fechaArray[0]);
        $fecha= $date->format('Y-m-d');
        //con esta forma se toma el formato de fecha
        $datestring = "%Y-%m-%d";
        //la funcion mdate con un solo parametro da la fecha actual
        $now        = mdate($datestring);
        //crear el array que va a ser pasado para la creación de la hr
        
        $hojaruta =  array(
            //nombre en la bd -----------------------> nombre de name
            'fechaEfectivizacion'  => $fecha ,
            'fechaUltModificacion' => $now ,
            );
        $data['title'] = ucfirst("home");
        if ($this->hojaruta_model->updateHR($hojaruta, $idHojaruta )) {
            redirect('chojaderuta/view/verUnaHojaRuta/'.$idHojaruta,'refresh');

        } else {
            redirect('','refresh');
        }
    }

}



/* End of file Chojaderuta.php */
/* Location: ./application/controllers/Chojaderuta.php */