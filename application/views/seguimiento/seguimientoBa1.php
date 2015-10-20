 <!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
  Bebe Asociado
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Consentimiento</a></li>
   <li class="active"> Ver Bebe Asociado </li>
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
                              <th>Registrar Seguimiento</th>
                              <!--<th>Consentimiento Activo</th>-->
                            </tr>
                        </thead>
                       <tbody>
                        <?php foreach ($bebeasociado as $value) :?>
                         <?php 
                         $fechaArray = explode('-', $value->fechaNacBebeAsociado);
                         $date = new DateTime();
                         $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                         $fecha= $date->format('d-m-Y'); 
                         ?>

                         <!--
                          if(($value->Consentimiento_nroConsentimiento == $unConsentimiento->nroConsentimiento)
                           and ($unConsentimiento->estadoConsent == '0')) {
                          echo $estado='No';
                          } else {
                          echo $estado='Si';
                          }
                         
                         --> 

                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idBebeAsociado?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->dniBebeAsociado?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->nombreBebeAsociado ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->apellidoBebeAsociado?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $fecha?></td>
                            <!--<td colspan="" rowspan="" headers=""><?php echo $estado?></td>-->
                            <td colspan="" rowspan="" headers="">
                            <a class="fa fa-pencil-square-o" 
                            href="<?php echo base_url()?>index.php/cseguimiento/view/seguimientoBa/<?php echo $value->idBebeAsociado?>"></a>
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
</aside><!-- /.right-side -->