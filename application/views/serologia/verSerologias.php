<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos de Serologia
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
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
                                <th>Nro de Consentimiento</th>
                                <th>Fecha desde</th>
                                <th>Solicitud de Serologia</th>
                                <th></th>

                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($consentimiento as $key => $value) :?>
                        <?php if ($value->solicitudSerologia ==1) {
                          # code...
                          $solicitud = 'Si';
                        } else {
                          # code...
                            $solicitud = 'No';
                        }
                         ?>
                         <?php
                         $fechaArray = explode('-', $value->fechaDesde);
                         $date = new DateTime();
                         $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                         $fecha= $date->format('d-m-Y'); ?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->nroConsentimiento ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $fecha?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $solicitud?></td>
                            <td colspan="" rowspan="" headers="">
                              <div>
                              <a href="<?php echo base_url();?>index.php/cserologia/view/verTodasSerologias/<?php echo $value->nroConsentimiento?>" 
                                title="ver todas las serologias" class="btn btn-default btn-sm" role="button"><i class="fa fa-eye"></i></a>
                                 <a href="<?php echo base_url();?>index.php/cserologia/view/registrarSerologia/<?php echo $value->nroConsentimiento?>" 
                                title="registrar serologia" class="btn btn-default btn-sm" role="button"><i class="fa fa-pencil"></i></a>
                               
                              </div></td>
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



