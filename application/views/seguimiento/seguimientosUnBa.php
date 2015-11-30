<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Seguimientos de un Bebe Asociado
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Seguimientos</a></li>
         <li class="active">Seguimientos un Bebe</li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <!-- Seguimiento -->
         <?php if ($unSeguimientoBa) {?>
         <div class="form-group">
            <label for="seguimientoba" class="col-lg-2 control-label">Nro de Bebe Asociado</label>
            <div class="col-lg-1">
               <input type="text" class="form-control" id="seguimientoba" disabled=""
                  value="<?php echo $unSeguimientoBa[0]->BebeAsociado_idBebeAsociado;?>">
            </div>
            <div class="form-group">
               <label for="consentimiento" class="col-lg-2 control-label">Bebe Asociado:</label>
               <div class="col-lg-2">
                  <input name="nyaBa" type="text"  id="campoDeshabilitado" disabled="" class="col-lg-2 form-control" 
                     value="<?php echo $unAsociado[0]->nombreBebeAsociado;
                        echo " ";
                        echo $unAsociado[0]->apellidoBebeAsociado;
                        ?>">
               </div>
               <BR>
               <div class="col-xs-12">
                  <div class="box">
                     <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>Fecha de Seguimiento</th>
                                 <th>Médico</th>
                                 <th>Observaciones</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($unSeguimientoBa as $value) :  ?>
                              <?php
                                 if ( $value->fechaSeguimiento ) {
                                 $fechaArray = explode('-', $value->fechaSeguimiento);
                                 $date = new DateTime();
                                 $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                 $fecha= $date->format('d-m-Y'); 
                                 }else{
                                  $fecha = "";
                                 }
                                 ?>
                              <tr>
                                 <td colspan="" rowspan="" headers=""><?php echo $fecha ?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo $value->medico?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo $value->observacionesBebeAsoc?></td>
                                 <td colspan="" rowspan="" headers="">
                                   
                                    <a href="<?php echo base_url();?>index.php/cseguimiento/view/verUnSeguimBa/<?php echo $value->idSeguimiento; ?>" 
                                       title="ver un seguimiento" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
                                    <a title="editar Seguimiento" class="btn btn-default btn-sm" href="<?php echo base_url();?>index.php/cseguimiento/view/editarUnSegBa/<?php echo $value->idSeguimiento;?>" role="button">
                                    <i class="fa fa-pencil"></i></a>
                                 </td>
                              </tr>
                              <?php endforeach ?>
                           </tbody>
                        </table>
                     </div>
                     <!-- /.box-body -->
                  </div>
               </div>
            </div>
            <!-- /.box -->
         </div>
         <?php } else{ ?>
         <div class="form-group">
            <label for="seguimientoba" class="col-lg-2 control-label">Nro de Bebe Asociado</label>
            <div class="col-lg-1">
               <input type="text" class="form-control" id="seguimientoba" disabled=""
                  value="<?php echo '';?>">
            </div>
            <div class="form-group">
               <label for="consentimiento" class="col-lg-2 control-label">Bebe Asociado:</label>
               <div class="col-lg-2">
                  <input name="nyaBa" type="text"  id="campoDeshabilitado" disabled="" class="col-lg-2 form-control" 
                     value="<?php echo'';
                        echo " ";
                        echo '';
                        ?>">
               </div>
               <BR>
               <div class="col-xs-12">
                  <div class="box">
                     <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>Fecha de Seguimiento</th>
                                 <th>Médico</th>
                                 <th>Observaciones</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              
                              <tr>
                                 <td colspan="" rowspan="" headers=""><?php echo '' ?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo ''?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo ''?></td>
                                 <td colspan="" rowspan="" headers="">
                                    <a href="#" 
                                       title="ver un seguimiento" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
                                    <a title="editar Seguimiento" class="btn btn-default btn-sm" href="#"
                                    <i class="fa fa-pencil"></i></a>
                                 </td>
                              </tr>
                             
                           </tbody>
                        </table>
                     </div>
                     <!-- /.box-body -->
                  </div>
               </div>
            </div>
            <!-- /.box -->
         </div>
         <?php } ?>
      </div>
      
      <div class="pull-right">
         <a class="btn btn-info btn-md" href="<?php echo base_url();?>index.php/cseguimiento/view/seguimientoBa1">Volver</a>
      </div>
   </section>
   <!-- /.content -->    
</aside>