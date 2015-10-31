<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Consentimientos
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
   <li><a href="#">Consentimiento</a></li>
   <li class="active">Ver Consentimientos </li>
  </ol>
 </section>
 <section class="content-header">
           
</section>
  <section class="content">
    <div >
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive">
                    <table id="example1" class="table table-responsive table-bordered table-striped">
                   
                      <thead>
                            <tr>
                              <th>Nro de Consentimiento</th>
                              <th>Dni de Donante</th>
                              <th>Nombre Donante</th>
                              <th>Apellido Donante</th>
                              <th>Estado Consentimiento</th>
                              <th></th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($consentimiento as $value) :?>
                        <?php
                             $fechaArray = explode('-', $value->fechaDesde);
                              $date = new DateTime();
                             $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                             $fecha= $date->format('d-m-Y'); 
                             ?>
                          <tr>
                            <?php $unaDonante = $this->donantes_model->getNAD($value->Donante_nroDonante);?>
                            <?php 
                                  if ($value->estadoConsent == "0") {
                                  $estado = 'Activo';
                                  } else {
                                    $estado = 'Inactivo';}  ?>

                            <td colspan="" rowspan="" headers=""><?php echo $value->nroConsentimiento; ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $unaDonante->dniDonante; ?></td> 
                           <td colspan="" rowspan="" headers=""><?php echo $unaDonante->nombre; ?></td>  
                            <td colspan="" rowspan="" headers=""><?php echo $unaDonante->apellido; ?></td>  
                            <td colspan="" rowspan="" headers=""><?php echo $estado; ?></td>
                            <td colspan="" rowspan="" headers="">
                              <div>
                                  <a href="<?php echo base_url()?>index.php/consentimiento/view/verUnConsentimiento/<?php echo $value->nroConsentimiento,"/"?><?php echo $value->Donante_nroDonante ?>" 
                                    class="btn btn-default btn-sm" 
                                           role="button"><i class="fa fa-eye"></i></a>
                              
                                  <a href="<?php echo base_url()?>index.php/consentimiento/view/editarConsentimiento/<?php echo $value->nroConsentimiento,"/"?>" class="btn btn-default btn-sm" 
                                           role="button"><i class="fa fa-pencil"></i></a>

                                  <a href="<?php echo base_url()?>index.php/consentimiento/view/finConsentimiento/<?php echo $value->nroConsentimiento,"/"?><?php echo $value->Donante_nroDonante ?>" 
                                    class="btn btn-default btn-sm" 
                                           role="button"><i class="fa fa-times"></i></a>
                                 
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
  

  </section><!-- /.content -->  

  <div class="pull-right">
  
       <!-- right column -->

  </div>   <!-- /.row -->

                            

</aside><!-- /.right-side -->