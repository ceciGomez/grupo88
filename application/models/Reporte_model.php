<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reporte_model extends CI_Model {


	public function repo_DatosDonantes(){
				$consulta="
          SELECT 
          *
          from donante order by donante.apellido asc
		";
		$this->db->query($consulta);
		return $this->db->query($consulta)->result();
	}

	
	public function repo_madresActivas($fechaInicio,$fechaFin){
		$consulta = "
			(SELECT *
			FROM consentimiento c, donante d
			WHERE c.Donante_nroDonante = d.nroDonante AND (c.fechaHasta BETWEEN '".$fechaInicio."' AND '".$fechaFin."') order by d.apellido asc)

			UNION

			(SELECT *
			FROM consentimiento c, donante d
			WHERE c.Donante_nroDonante = d.nroDonante AND c.fechaHasta IS NULL order by d.apellido asc)
		";
		$this->db->query($consulta);
		return $this->db->query($consulta)->result();
	}

	public function repo_AllmadresActivas(){
		$consulta = "
			SELECT *
			FROM consentimiento c, donante d
			WHERE c.Donante_nroDonante = d.nroDonante

			UNION

			SELECT *
			FROM consentimiento c, donante d
			WHERE c.Donante_nroDonante = d.nroDonante AND c.fechaHasta IS NULL
		";
		$this->db->query($consulta);
		return $this->db->query($consulta)->result();
	}

	public function buscarHojaDeRuta($hr)
	{
		$consulta = "SELECT * 
					FROM hojaderuta, consentimiento_por_hojaderuta
					WHERE idHojaDeRuta = HojaDeRuta_idHojaDeRuta AND idHojaDeRuta = '".$hr."'";

		try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->row_array();
		} catch (Exception $e) {
			return false;
		}
	}

	public function getDay($fecha)	
	{
		
		setlocale(LC_ALL,"es_RA");
		$date = DateTime::createFromFormat("d-m-Y", $fecha);
		$day = strftime("%A",$date->getTimestamp());
		$dias = array(
				"Sunday" => "Domingo",
				"Monday" => "Lunes",
				"Tuesday" => "Martes",
				"Wednesday" => "Miercoles",
				"Thursday" => "Jueves",
				"Friday" => "Viernes",
				"Saturday" => "Sábado");
		return $dias[$day];
	}

	public function getNombreZona($zona)
	{
		$consulta = "SELECT * FROM zona WHERE idZona = '".$zona."'";
		try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->row_array();
		} catch (Exception $e) {
			return false;
		}	
	}

	public function getConsentimientos($hr)
	{
		$consulta = "SELECT * 
					FROM hojaderuta, consentimiento_por_hojaderuta
					WHERE idHojaDeRuta = HojaDeRuta_idHojaDeRuta AND idHojaDeRuta = '".$hr."'";

		try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->result_array();
		} catch (Exception $e) {
			return false;
		}	
	}

	public function getConsentimiento($consentimiento)
	{
		$consulta = "SELECT * 
					FROM consentimiento, donante
					WHERE Donante_nroDonante = nroDonante AND nroConsentimiento = '".$consentimiento."'";

		try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->row_array();
		} catch (Exception $e) {
			return false;
		}	
	}

	public function repo_funcpepe(){
		$consulta = "SELECT * FROM pasteurizacion";

		try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->result();
		} catch (Exception $e) {
			return false;
		}
	 }

		public function repo_recolectada($fechaInicio,$fechaFin){
		/*$consulta ="select h.idHojaDeRuta, f.nroFrasco, h.fechaRecorrido, f.tipoDeLeche, f.volumenDeLeche, f.estadoDeFrasco

		 from frascos f, consentimiento_por_hojaderuta c
		  inner join hojaderuta h
		   on
		    c.HojaDeRuta_idHojaDeRuta=h.idHojaDeRuta
		     and h.fechaRecorrido between '".$fechaInicio."' AND '".$fechaFin."'";*/
		    $consulta=" SELECT idHojaDeRuta, nroFrasco, fechaRecorrido, tipoDeLeche, volumenDeLeche, nombre, apellido, estadoDeFrasco 
FROM frascos f, consentimiento_por_hojaderuta hc, hojaderuta h, consentimiento c, donante d
WHERE c.Donante_nroDonante = d.nroDonante and h.idHojaDeRuta = hc.HojaDeRuta_idHojaDeRuta and
c.nroConsentimiento = hc.Consentimiento_nroConsentimiento
and f.Consentimiento_por_HojaDeRuta_HojaDeRuta_idHojaDeRuta = hc.HojaDeRuta_idHojaDeRuta
and c.nroConsentimiento = hc.Consentimiento_nroConsentimiento
and f.HRVuelta <> 'NULL'
 and h.fechaRecorrido between '".$fechaInicio."' AND '".$fechaFin."'";


          try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->result();
		} catch (Exception $e) {
			return false;
		}	
		    }
		
		public function repo_consumida($fechaInicio,$fechaFin){

/*$consulta ="select * from bebereceptor b, fraccionamiento f
inner join prescripcionmedica p
on
f.PrescripcionMedica_idPrescripcionMedica=p.idPrescripcionMedica
and f.fechaFraccionamiento between '".$fechaInicio."' AND '".$fechaFin."'";
*/
          /*$consulta ="select b.apellidoBebeReceptor, b.nombreBebeReceptor,f.Biberon_idBiberon, 
             f.consumido, f.idFraccionamiento, p.cant_tomas,p.volumen,p.tipoDeLecheBanco, f.fechaFraccionamiento
             from bebereceptor b, fraccionamiento f
              inner join prescripcionmedica p
             on
             f.PrescripcionMedica_idPrescripcionMedica=p.idPrescripcionMedica
             and f.fechaFraccionamiento between '".$fechaInicio."' AND '".$fechaFin."'
             and f.consumido='1'"
             ;*/
    $consulta ="select b.apellidoBebeReceptor, b.nombreBebeReceptor, f.Biberon_idBiberon, f.consumido, f.idFraccionamiento,
     p.cant_tomas, p.volumen, p.tipoDeLecheBanco, f.fechaFraccionamiento
    from bebereceptor b, fraccionamiento f, prescripcionmedica p where f.BebeReceptor_idBebeReceptor = b.idBebeReceptor and f.PrescripcionMedica_idPrescripcionMedica = p.idPrescripcionMedica 
    and f.consumido = 1 
    and f.fechaFraccionamiento between '".$fechaInicio."' AND '".$fechaFin."'";

		try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->result();
		} catch (Exception $e) {
			return false;
		}			
	}

	public function repPasteurizacion($fechaInicio,$fechaFin){
		
	$consulta="(SELECT idBiberon, volFraccionado,estadoBiberon,tipoDeLeche,frasco_idfrasco,idPasteurizacion,fechaPasteurizacion,responsable
			FROM biberon b, pasteurizacion p WHERE (b.Pasteurizacion_idPasteurizacion = p.idPasteurizacion )AND (p.fechaPasteurizacion BETWEEN '".$fechaInicio."' AND '".$fechaFin."') order by p.idPasteurizacion asc)
			UNION
			(SELECT idBiberon, volFraccionado,estadoBiberon,tipoDeLeche,frasco_idfrasco,idPasteurizacion,fechaPasteurizacion,responsable FROM biberon b, pasteurizacion p
			WHERE (b.Pasteurizacion_idPasteurizacion = p.idPasteurizacion) AND (p.fechaPasteurizacion IS NULL )order by p.idPasteurizacion asc	)";
       try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->result();
		} catch (Exception $e) {
			return false;
		}
		
	}

	public function repAllPasteurizacion(){
		
	$consulta="(SELECT idBiberon, volFraccionado,estadoBiberon,tipoDeLeche,frasco_idfrasco,idPasteurizacion,fechaPasteurizacion,responsable
			FROM biberon b, pasteurizacion p WHERE (b.Pasteurizacion_idPasteurizacion = p.idPasteurizacion ) order by p.idPasteurizacion asc)
			UNION
			(SELECT idBiberon, volFraccionado,estadoBiberon,tipoDeLeche,frasco_idfrasco,idPasteurizacion,fechaPasteurizacion,responsable FROM biberon b, pasteurizacion p
			WHERE (b.Pasteurizacion_idPasteurizacion = p.idPasteurizacion) AND (p.fechaPasteurizacion IS NULL )order by p.idPasteurizacion asc)	";
       try {
			$this->db->query($consulta);
			return $this->db->query($consulta)->result();
		} catch (Exception $e) {
			return false;
		}
		
	}
	
}


/* End of file Reporte_model.php */
/* Location: ./application/models/Reporte_model.php */
?>