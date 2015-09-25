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
  <section class="content">
    <div class="row">
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
                              <th>Fecha Desde</th>
                              <th></th>
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($consentimiento as $value) :?>
                          <tr>
                            <?php $unaDonante = $this->donantes_model->getNAD($value->Donante_nroDonante);?>

                            <td colspan="" rowspan="" headers=""><?php echo $value->nroConsentimiento; ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $unaDonante->dniDonante; ?></td> 
                           <td colspan="" rowspan="" headers=""><?php echo $unaDonante->nombre; ?></td>  
                            <td colspan="" rowspan="" headers=""><?php echo $unaDonante->apellido; ?></td>  
                            <td colspan="" rowspan="" headers=""><?php echo $value->fechaDesde; ?></td>
                            <td colspan="" rowspan="" headers="">
                              <a href="<?php echo base_url()?>index.php/consentimiento/view/verUnConsentimiento/<?php echo $value->nroConsentimiento?>">Ver mas</a>
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
