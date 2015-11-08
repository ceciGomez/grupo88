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
   
   <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>Fecha de Salida</th>
                              <th>Dia</th>
                              <th>Id HR</th>
                              <th>Fecha de Creacion</th>
                              <th>Zona</th>
                              <th>Ultima modif</th>
                              <th>Chofer</th>
                              <th>Auxiliar</th>
                              <th>Fecha Efectiva</th>
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
                            <td colspan="" rowspan="" headers=""><?php echo $value->zona ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $this->hojaruta_model->arreglarFecha($value->fechaUltModificacion) ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->chofer ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->asistente ?></td> 
                            <td colspan="" rowspan="" headers=""><?php echo $fechaEfectivizacion = $this->hojaruta_model->arreglarFecha($value->fechaEfectivizacion) ?></td>
                            <td colspan="" rowspan="" headers="">
                               <a href="<?php echo base_url()?>/index.php/chojaderuta/view/verUnaHojaRuta/<?php echo $value->idHojaDeRuta;?>"
                                class="btn btn-default btn-sm" role="button">
                                <i class="fa fa-eye"></i></a>
                                 <a href="<?php echo base_url()?>/index.php/chojaderuta/view/editarUnaHojaRuta/<?php echo $value->idHojaDeRuta;?>"
                                  class="btn btn-default btn-sm" role="button">
                                <i class="fa fa-pencil"></i></a>
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