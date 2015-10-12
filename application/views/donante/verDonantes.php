<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Donantes
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="<?php echo base_url();?>index.php/consentimiento/view/consentimiento/">Consentimiento</a></li>
   <li class="active">Ver Donantes </li>
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
                              <th>Nro de Donante</th>
                              <th>DNI</th>
                              <th>Nombre</th>
                              <th>Apellido</th>
                              <th>Fecha de Nacimiento</th>
                              <th></th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($donante as $value) :?>
                         <?php
                              $fechaArray = explode('-', $value->fechaNacDonante);
                              if ($fechaArray[0]==0 && $fechaArray[1]==0){
                                  $fecha="";
                                }else{
                                  $date = new DateTime();
                                  $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                  $fecha= $date->format('d-m -Y'); 
                                }?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->nroDonante?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->dniDonante?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->nombre ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->apellido?></td>
                             
                            <td colspan="" rowspan="" headers=""><?php echo $fecha?></td>
                            <td colspan="" rowspan="" headers="">
                              <a href="<?php echo base_url()?>index.php/cdonante/view/verUnaDonante/<?php echo $value->nroDonante?>">
                                <span class="fa fa-eye"></span></a>
                                 <a href="<?php echo base_url()?>index.php/cdonante/view/editarDonante/<?php echo $value->nroDonante?>">
                                <span class="fa fa-pencil"></span></a>
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

