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
        <form data-toggle="validator" id="formularioConsumobr" role="form" method="POST" action="<?php echo base_url()?>index.php/cfraccionamiento/consumoDeBeber/">
         <!-- Fraccionamiento -->
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
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($fraccionesUnbebe as  $value):?>
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
                                  <select name="consumo[]" id="idconsumo" value="$valor" class="form-control">
                                     <option value="1">Si</option>
                                     <option value="0">No</option>
                                  </select>
                              </div>
                          </tr>
                          <!--<?php $consumo = array($this->input->post('consumo'));;
                          var_dump($consumo)
                          ?>-->
                      <?php endforeach ?>
                        </tbody>
                      </table>
                     </div>
                     <!-- /.box-body -->
                  </div>
               </div>
            </div>
            <!-- /.box -->
            <div class="pull-right content">
              <div class="form-group">
              <button type="submit" aria-hidden="true" id="guardarConsumo" class="btn btn-success btn-md"> Guardar Consumo </button>
              </div>                  
            </div> 
         </div>
         <?php } else{ ?>
         <div class="form-group">

            <label for="fraccionamientobr" class="col-lg-2 control-label">Nro de Bebe Receptor</label>
            <div class="col-lg-1">
               <input type="text" class="form-control" id="idbeber" disabled=""
                  value="<?php echo $unReceptor[0]->idBebeReceptor;?>">
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
                                 <td colspan="" rowspan="" headers=""><?php echo ''?></td>
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
          <div class="pull-right-side content">
              <div class="form-group" style="float: right">
              <a class="btn btn-primary btn-md" href="<?php echo base_url()?>index.php/cfraccionamiento/view/verTodosLosFraccionamientos/?>">Volver</a>
              </div>
          </div>
         </div>
         <?php } ?>
    </form>
   </section>
   <!-- /.content -->    
</aside>
<script src="<?php echo base_url();?>assets/internals/js/fraccionamientoinfo.js" type="text/javascript" charset="utf-8" async defer></script>
