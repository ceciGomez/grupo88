 <!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
  Listado de Bebes Asociados
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Seguimiento</a></li>
   <li class="active"> Listado Bebes Asociados </li>
  </ol>
 </section>
  <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>Nro de Bebe </th>
                              <th>DNI</th>
                              <th>Nombre y Apellido</th>
                              <th>Ultimo Seguimiento</th>
                              <th>Seguimiento</th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($bebeasociado as $value) :?>
                        <?php $variable = $this->seguimientoba_model->ultimoSeguimiento($value->idBebeAsociado);?>
                         <?php
                         if ( $variable[0]->ultimaFecha ) {
                         $fechaArray = explode('-', $variable[0]->ultimaFecha);
                         $date = new DateTime(); 
                         $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                         $fecha= $date->format('d-m-Y'); 
                         }else{
                          $fecha = "";
                         }
                         ?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idBebeAsociado?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->dniBebeAsociado?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->nombreBebeAsociado; echo " ";echo $value->apellidoBebeAsociado?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $fecha?></td>
                            <td colspan="" rowspan="" headers="">
                            <div>
                              <a title="ver Seguimiento" class="btn btn-default btn-sm"href="<?php echo base_url()?>index.php/cseguimiento/view/seguimientosUnBa/<?php echo $value->idBebeAsociado?>"  role="button"><i class="fa fa-eye"></i></a>
                              <a title="Registrar Seguimiento" role="button" class="btn btn-default btn-sm" 
                              href="<?php echo base_url()?>index.php/cseguimiento/view/seguimientoBa/<?php echo $value->idBebeAsociado?>"><i class="fa fa-plus"></i></a>
                            </div>
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
        <a class="btn btn-primary btn-md" href="<?php echo base_url();?>index.php/page/view/">Volver</a>
    </div>
  </section><!-- /.content -->    
</aside><!-- /.right-side -->