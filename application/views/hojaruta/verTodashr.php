<aside class="right-side">
<!-- section header -->
<section class="content-header">
  <h1>
         Ver todas las Hojas de Rutas
  </h1>

	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
		<li><a href="#">Hoja de Ruta</a></li>
		<li class="active">Ver hoja de ruta Historico</li>
	</ol>
</section>  <!-- fin section header -->
<!-- section body -->
<section class="content">
	<div >
		<!-- este boton deberia ir a generar una nueva hoja de ruta, 
		pero para semana entera -->
		<a href="<?php echo base_url();?>index.php/chojaderuta/view/verhrSemanal" class="btn btn-success" role="button">
		Ver Hojas de Ruta por semana
		</a>
	</div>
</section>  <!-- fin section header -->
<!-- section body -->
<section class="content">
	 
	 <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-responsive table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                              <th>Id HR</th>
                              <th>F. de Creacion</th>
                              <th>Recorrido Previsto</th>
                              <th>Recorrido Real</th>
                              <th>Ultima Modif</th>
                              <th>Zona</th>
                              <th>Chofer</th>
                              <th>Asistente</th>
                              <th>Obs</th>
                              <th>Donantes</th>
                              <th>Acciones</th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($hojasdeRuta as $value) :?>
                         <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idHojaDeRuta?></td>
                            <?php $fCrea = $this->hojaruta_model->arreglarFecha($value->fechaCreacionHdR); ?>
                            <td colspan="" rowspan="" headers=""><?php echo $fCrea?></td>
                             <?php $frec = $this->hojaruta_model->arreglarFecha($value->fechaRecorrido); ?>
                            <td colspan="" rowspan="" headers=""><?php echo $frec?></td>
                            <?php $fefec = $this->hojaruta_model->arreglarFecha($value->fechaEfectivizacion); ?>
                            <td colspan="" rowspan="" headers=""><?php echo $fefec?></td>
                            <?php $fulmod = $this->hojaruta_model->arreglarFecha($value->fechaUltModificacion); ?>
                            <td colspan="" rowspan="" headers=""><?php echo $fulmod?></td>
                            <?php $unaZona = $this->zona_model->getNombreZona($value->zona);?>
                            <td colspan="" rowspan="" headers=""><?php echo $unaZona->nombreZona;?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->chofer?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->asistente?></td> 
                            <td colspan="" rowspan="" headers=""><?php echo $value->observaciones?></td>
                            <?php $data['donantes'] = $this->hojaruta_model->getUnaHRutaContar($value->idHojaDeRuta);?> 
                            <td colspan="" rowspan="" headers=""><?php echo $data['donantes'][0]->cantDonante?></td> 
                            <td colspan="" rowspan="" headers="">
                              <a href="<?php echo base_url()?>/index.php/chojaderuta/view/verUnaHojaRuta/<?php echo $value->idHojaDeRuta;?>"
                                class="btn btn-default btn-sm" role="button" title="ver hoja de ruta">
                                <i class="fa fa-eye"></i></a>
                                 <a href="<?php echo base_url()?>/index.php/chojaderuta/view/editarUnaHojaRuta/<?php echo $value->idHojaDeRuta;?>"
                                  class="btn btn-default btn-sm" role="button" title="Editar Hoja de ruta">
                                <i class="fa fa-pencil"></i></a>
                                <a href="<?php echo base_url()?>/index.php/chojaderuta/view/generarHrCons/<?php echo $value->idHojaDeRuta;?>"
                                  class="btn btn-default btn-sm" role="button" title="agregar consentimientos">
                                <i class="fa fa-plus"></i></a>
                                <a href="<?php echo base_url()?>/index.php/chojaderuta/view/registrarIngresoHr/<?php echo $value->idHojaDeRuta;?>"
                                  class="btn btn-default btn-sm" role="button" title="registrar Ingreso de Hoja de Ruta">
                                <i class="fa fa-list"></i></a>
                            </td>
                          </tr>
                        <?php endforeach ?>
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
  <div class="pull-right">
                    <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
                </div>
</section>  <!-- fin section body -->

</aside><!-- /.right-side -->
