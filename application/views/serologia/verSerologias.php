<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos de Serologia
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Consentimiento</a></li>
   <li class="active">Serología </li>
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
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th></th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($serologia as $key => $value) :?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->nombre ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->apellido?></td>
                            <td colspan="" rowspan="" headers=""><a href="<?php echo base_url();?>index.php/cserologia/view/registrarSerologia" title="registrar serologia">Registrar Resultados</a></td>
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

