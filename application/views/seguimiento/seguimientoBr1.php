<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
  Listado de Bebes Receptores
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Seguimiento</a></li>
   <li class="active"> Listado Bebes Receptores </li>
  </ol>
 </section>
  <section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                        <thead>
                            <tr>
                              <th>Nro de Bebe </th>
                              <th>DNI</th>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>Fecha de Nacimiento</th>
                              <th> </th>
                            </tr>
                        </thead>
                       <tbody>
  
                        <?php foreach ($bebereceptor as $value) :?>
                        <?php 
                         $fechaArray = explode('-', $value->fechaDeNac);
                         $date = new DateTime();
                         $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                         $fecha= $date->format('d-m-Y'); ?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idBebeReceptor?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->dniBebeReceptor?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->nombreBebeReceptor?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->apellidoBebeReceptor?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $fecha?></td>
                            <td colspan="" rowspan="" headers="">
                            <div>
                              <a title="ver Seguimiento" class="btn btn-default btn-sm" href="<?php echo base_url()?>index.php/cseguimiento/view/seguimientosUnBr/<?php echo $value->idBebeReceptor?>"  role="button"><i class="fa fa-eye"></i></a>
                              <a title="Registrar Seguimiento" role="button" class="btn btn-default btn-sm" 
                              href="<?php echo base_url()?>index.php/cseguimiento/view/seguimientoBR/<?php echo $value->idBebeReceptor?>"><i class="fa fa-plus"></i></a>
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
