<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Fraccionamientos para un Bebe Receptor
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a>Registrar Consumo</a></li>
         <li class="active">Fraccionamientos de un Bebe</li>
      </ol>
   </section>
   <section class="content">
      <div class="row">
         <!-- Seguimiento -->
         <?php if ($fraccionesUnbebe) {?>
         <div class="form-group">
            <label for="fraccionamientobr" class="col-lg-2 control-label">Nro de Bebe Receptor</label>
            <div class="col-lg-1">
               <input type="text" class="form-control" id="idbeber" disabled=""
                  value="<?php echo $fraccionesUnbebe[0]->BebeReceptor_idBebeReceptor;?>">
            </div>
            <div class="form-group">
               <label for="fraccionamientobr" class="col-lg-2 control-label">Bebe Receptor:</label>
               <div class="col-lg-2">
                  <input name="nyaBr" type="text"  id="campoDeshabilitado" disabled="" class="col-lg-2 form-control" 
                     value="<?php echo $unReceptor[0]->nombreBebeReceptor;
                        echo " ";
                        echo $unReceptor[0]->apellidoBebeReceptor;
                        ?>">
               </div>
               <BR>
               <div class="col-xs-12">
                  <div class="box">
                     <div class="box-body table-responsive">
                      <table id="example1" class="table table-resonsive table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>id fracc</th>
                            <th>Bebe Receptor</th>
                            <th>Biberon</th>
                            <th>Fecha fracc</th>
                            <th>Volumen</th>
                            <th>Consumido</th>
                            <th>Acciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($fraccionamientos as  $value):?>
                          <?php $fechaPmedica = $this->fraccionamiento_model->arreglarFecha($value->PrescripcionMedica_fechaPrescripcion);
                          $fechaFrac = $this->fraccionamiento_model->arreglarFecha($value->fechaFraccionamiento); ?>
                          <tr>
                            <td colspan="" rowspan="" headers=""><?php echo $value->idFraccionamiento; ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->BebeReceptor_idBebeReceptor ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->Biberon_idBiberon; ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $fechaFrac; ?></td>
                            <td colspan="" rowspan="" headers=""><?php echo $value->volumen; ?></td>
                            <td colspan="" rowspan="" headers="">
                              <div class="col-xs-4">
                                  <select name="consumo" id="consumo"  class="form-control">
                                     <option value="<?php echo $fraccionesUnbebe[0]->consumido ?>"></option>
                                     <option value="1">Si</option>
                                     <option value="0">No</option>
                                  </select>
                              </div>
                            </td>
                            <td colspan="" rowspan="" headers="">
                                  <a href="<?php echo base_url();?>index.php/cfraccionamiento/view/verUnFraccionamientoBr/<?php echo $value->idFraccionamiento; ?>" 
                                     title="ver fraccionamiento" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
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

            <label for="fraccionamientobr" class="col-lg-2 control-label">Nro de Bebe Receptor</label>
            <div class="col-lg-1">
               <input type="text" class="form-control" id="idbeber" disabled=""
                  value="<?php echo $unReceptor[0]->BebeReceptor_idBebeReceptor;?>">
            </div>
            <div class="form-group">
               <label for="fraccionamientobr" class="col-lg-2 control-label">Bebe Receptor:</label>
               <div class="col-lg-2">
                  <input name="nyaBa" type="text"  id="campoDeshabilitado" disabled="" class="col-lg-2 form-control" 
                     value="<?php echo $unReceptor[0]->nombreBebeReceptor;
                        echo " ";
                        echo $unReceptor[0]->apellidoBebeReceptor;
                        ?>">
               </div>
               <BR>
               <div class="col-xs-12">
                  <div class="box">
                     <div class="box-body table-responsive">
                        <table id="example1" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                <th>id fracc</th>
                                <th>Bebe Receptor</th>
                                <th>Biberon</th>
                                <th>Fecha fracc</th>
                                <th>Volumen</th>
                                <th>Consumido</th>
                                <th>Acciones</th>
                              </tr>
                            </thead>
                           <tbody>
                              <tr>
                                 <td colspan="" rowspan="" headers=""><?php echo '' ?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo ''?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo ''?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo ''?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo ''?></td>
                                 <td colspan="" rowspan="" headers="">
                                  <a href="#" title="ver fraccionamiento" class="btn btn-default btn-sm"><i class="fa fa-eye"></i></a>
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
         <a class="btn btn-primary btn-md" href="<?php echo base_url();?>index.php/cseguimiento/view/seguimientoBr1">Volver</a>
      </div>
   </section>
   <!-- /.content -->    
</aside>
