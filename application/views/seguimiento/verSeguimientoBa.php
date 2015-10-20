<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos de Serologia
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
                                <th>Nro. de Bebe Asociado</th>
                                <th>Fecha de Seguimiento</th>
                                <th>Medico</th>
                                <th>Altura</th>
                                <th>Peso</th>
                                <th>Perímetro Cefálico</th>
                                <th>Observaciones</th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($SeguimientoBa as $key => $value) :?>
                         $fechaArray = explode('-', $value->fechaSeguimiento);
                         $date = new DateTime();
                         $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                         $fecha= $date->format('d-m-Y'); ?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idSeguimiento ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->BebeAsociado_idBebeAsociado ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $fecha?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $medico?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $altura?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $peso?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $perimetroCefalico?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $observacionesBebeAsoc?></td>
                         <!--<td colspan="" rowspan="" headers="">
                              <a href="<?php echo base_url();?>index.php/cseguimineto/view/seguiminetoBa/<?php echo $value->idSeguimiento?>" 
                                title="registrar serologia">Registrar Resultados</a></td>
                          </tr>-->
                        <?php endforeach ?>
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

  </section><!-- /.content -->    
  


</aside><!-- /.right-side -->
