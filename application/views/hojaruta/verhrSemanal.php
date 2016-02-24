<aside class="right-side">
<!-- section header -->
<section class="content-header">
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="#">Hoja de Ruta</a></li>
    <li class="active">Ver hoja de ruta por semana</li>
  </ol>
</section>  <!-- fin section header -->
<!-- section body -->
<section class="content">
    <div >
    <!-- este boton deberia ir a generar una nueva hoja de ruta, 
    pero para semana entera -->
    <a href="<?php echo base_url();?>index.php/chojaderuta/view/generarHr" class="btn btn-success" role="button">
    Generar Hoja de Rutas para la semana
    </a>
  </div>
</section>  <!-- fin section header -->
<!-- section body -->
<section class="content">
   <h4>Hojas de Rutas de la Semana</h4>
   <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>F. de Salida</th>
                              <th>Dia</th>
                              <th>Id HR</th>
                              <th>F. de Creacion</th>
                              <th>Zona</th>
                              <th>Ultima modif</th>
                              <th>Chofer</th>
                              <th>Auxiliar</th>
                              <th>Recorrido Real</th>
                              <th></th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($hojasdeRuta as $value) :?>
                         <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $this->hojaruta_model->arreglarFecha($value->fechaRecorrido) ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $this->hojaruta_model->transformarNumeroDia($value->dia) ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idHojaDeRuta ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $this->hojaruta_model->arreglarFecha($value->fechaCreacionHdR) ?></td>
                             <?php $unaZona = $this->zona_model->getNombreZona($value->zona);?>
                            <td colspan="" rowspan="" headers=""><?php echo $unaZona->nombreZona; ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $this->hojaruta_model->arreglarFecha($value->fechaUltModificacion) ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->chofer ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->asistente ?></td> 
                            <td colspan="" rowspan="" headers=""><?php echo $fechaEfectivizacion = $this->hojaruta_model->arreglarFecha($value->fechaEfectivizacion) ?></td>
                            <td width="150px" colspan="" rowspan="" headers="">
                               <a href="<?php echo base_url()?>/index.php/chojaderuta/view/verUnaHojaRuta/<?php echo $value->idHojaDeRuta;?>"
                                class="btn btn-default btn-sm" role="button"
                                title="Ver una Hoja de Ruta">
                                <i class="fa fa-eye"></i></a>
                                 <a href="<?php echo base_url()?>/index.php/chojaderuta/view/editarUnaHojaRuta/<?php echo $value->idHojaDeRuta;?>"
                                  class="btn btn-default btn-sm" role="button"
                                  title="Editar Hoja de Ruta">
                                <i class="fa fa-pencil"></i></a>
                                <a href="<?php echo base_url()?>/index.php/chojaderuta/view/generarHrCons/<?php echo $value->idHojaDeRuta;?>"
                                  class="btn btn-default btn-sm" role="button" title="Agregar consentimientos">
                                <i class="fa fa-plus"></i></a>
                                <a href="<?php echo base_url()?>/index.php/chojaderuta/view/registrarIngresoHr/<?php echo $value->idHojaDeRuta;?>"
                                  class="btn btn-default btn-sm" role="button" title="Registrar regreso de Hoja de Ruta">
                                <i class="fa fa-list"></i></a>
                                <?php if ($value->fechaEfectivizacion) {?>
                                 <a href="<?php echo base_url()?>/index.php/cfrascos/view/ingresoFrascos/<?php echo $value->idHojaDeRuta;?>"
                                  class="btn btn-default btn-sm" role="button" title="Registrar ingreso de frascos">
                                 <i class="fa fa-bitbucket"></i></a>
                                <?php } ?>
                            </td>
                          </tr>
                        <?php endforeach ?>
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
   
</section>  <!-- fin section body -->

</aside><!-- /.right-side -->