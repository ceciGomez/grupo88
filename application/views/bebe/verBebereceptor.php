<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
  Bebe Receptor
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Consentimiento</a></li>
   <li class="active"> Ver Bebe Receptor </li>
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
                            <!-- <a href="<?php echo base_url()?>index.php/cbebe/view/bebeReceptor/<?php echo $value->idBebeReceptor?>">Ver mas</a> -->
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
