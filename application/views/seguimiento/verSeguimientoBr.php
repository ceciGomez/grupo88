<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos de Seguimiento
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Seguimiento</a></li>
   <li><a href="#">Seguimiento de Bebe Asociado</a></li>
   <li class="active">Ver Seguimiento de Bebe Asociado</li>
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
                              <th>Nro. de Seguimineto</th>
                              <th>Nro. de Bebe Receptor</th>
                              <th>Fecha de Seguimiento</th>
                              <th>Medico</th>
                              <th>Altura</th>
                              <th>Peso</th>
                              <th>Perímetro Cefálico</th>
                              <th>Observaciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($seguimientoBa as $value) :?>
                           <?php 
                           $fechaArray = explode('-', $value->fechaSeguimiento);
                           $date = new DateTime();
                           $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                           $fecha= $date->format('d-m-y'); ?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idSegBebeReceptor ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->BebeReceptor_idBebeReceptor ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $fecha?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->medico?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->altura?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->peso?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->perimetroCefalico?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->observaciones?></td>
                            <td colspan="" rowspan="" headers="">
                            <div>
                                  <a disabled href="<?php echo base_url()?>index.php/cseguimineto/view/verUnSegBr/<?php echo $value->idSeguimiento,"/"?><?php echo $value->BebeAsociado_idBebeAsociado?>" 
                                    class="btn btn-default btn-sm" title="Ver Seguimiento"  role="button"><i class="fa fa-eye"></i></a>
                              
                                  <a disabled href="<?php echo base_url()?>index.php/cseguimineto/view/editarSeguimientoBa/<?php echo $value->idSeguimiento,"/"?>" class="btn btn-default btn-sm" 
                                    title="Editar Seguimiento" role="button"><i class="fa fa-pencil"></i></a>
                            </div>
                         </tr>
                        <?php endforeach ?>
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

  </section><!-- /.content -->    
  


</aside><!-- /.right-side -->