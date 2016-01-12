<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Centros de Recolección
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="#">Centros de Recolección</a></li>
   <li class="active">Ver Centros de Recolección </li>
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
                              <th>Nro de Centro de Recolección</th>
                              <th>Nombre de Centro de Recolección</th>
                              <th></th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($centros as $value) :?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idCentroRecoleccion?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->nombreCentro?></td>
                            <!--<td colspan="" rowspan="" headers=""><?php echo $value->telefonoCentro?></td>-->
                            <td colspan="" rowspan="" headers="">
                              <a href="<?php echo base_url()?>index.php/centrosRec/view/verUnCentroR/<?php echo $value->idCentroRecoleccion?>"
                                class="btn btn-default btn-sm" role="button">
                                <i class="fa fa-eye"></i></a>
                                 <a href="<?php echo base_url()?>index.php/centrosrec/view/editarCentroR/<?php echo $value->idCentroRecoleccion?>"
                                  class="btn btn-default btn-sm" role="button">
                                <i class="fa fa-pencil"></i></a>
                                <a href="<?php echo base_url(); ?>index.php/centrosrec/view/verCentrosR/"title="Eliminar Centro de Recolección" 
                                 class="btn btn-default btn-sm" role="button"><i class="fa fa-times"></i>
                            </td>
                          </tr>
                        <?php endforeach ?>
                       </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>

  </section><!-- /.content -->    <div class="pull-right">
  
       <!-- right column -->

  </div>   <!-- /.row -->

 


</aside><!-- /.right-side -->

