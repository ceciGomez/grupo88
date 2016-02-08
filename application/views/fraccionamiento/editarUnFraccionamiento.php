<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Editar Fraccionamiento
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Editar Fraccionamiento </li>
  </ol>
 </section>
  <section class="content col-md-12">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-8 col-md-offset-1">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form id="formEditarFracc" role="form" method="POST" 
                     action="<?php echo base_url();?>index.php/cfraccionamiento/editarFraccionamiento">
                        <div class="form-group row">
                           <div class="form-group col-md-6">
                              <label>Numero de Fraccionamiento</label>
                                <p class="form-control-static"  >
                                  <?php echo $unFraccionamiento[0]->idFraccionamiento ?></p>
                                  <input type="hidden" name="idFraccionamiento" value="<?php echo $unFraccionamiento[0]->idFraccionamiento ?>">
                              
                           </div>
                           <div class="form-group col-md-6">
                              <label>Numero de Biberon</label>
                              <p class="form-control-static" >
                                <?php echo $unFraccionamiento[0]->Biberon_idBiberon ?> </p>
                              
                           </div>
                           <div class="form-group col-md-6">
                              <label>Numero de Bebe Receptor</label>
                              <p class="form-control-static">
                                <?php echo $unFraccionamiento[0]->BebeReceptor_idBebeReceptor; ?>
                              </p>
                           </div>
                           <div class="form-group col-md-6">
                              <label>Nombre y Apellido de Bebe Receptor</label> 
                              <p class="form-control-static">
                                <?php echo $unReceptor[0]->nombreBebeReceptor,' ', 
                                 $unReceptor[0]->apellidoBebeReceptor; ?>
                               </p>
                           </div>
                           <div class="col-md-6">
                            <label>Fecha de Fraccionamiento</label>
                               <p class="form-control-static">
                                <?php echo $fechaFraccArreglada; ?></p>
                           </div>
                             <div class="form-group col-md-6">
                              <label>Volumen</label>
                              <div class="form-group">
                              <input name="volumen" value="<?php echo $unFraccionamiento[0]->volumen; ?>"
                              </p>
                            </div>
                           </div>
                           <div class="form-group col-md-6">
                             <label>Consumido</label>
                              <?php if ($unFraccionamiento[0]->consumido == 0)
                                 { 
                                    $consumido = "No";
                                  }else {
                                    $consumido = "Si";
                                    }
                                 ?>
                              <div class="form-group">
                                <select name="consumido" class="col-md-6">
                                  <option value="<?php echo $unFraccionamiento[0]->consumido; ?>"><?php echo $consumido; ?></option>
                                  <option value="1">Si</option>
                                  <option value="0">No</option>
                                </select>
                              </div>
                           </div>
                           <div class="form-group col-md-6">
                              <label>Numero de Prescripcion Medica</label>
                              <p class="form-control-static">
                                <?php echo $unFraccionamiento[0]->PrescripcionMedica_idPrescripcionMedica; ?>
                              </p>
                           </div>
                           <div class="form-group col-md-6">
                              <label>Fecha de Prescripcion Medica</label>
                              <p class="form-control-static">
                                <?php echo $fechaPmArreglada; ?>
                              </p>
                           </div>
                           <div class="form-group col-md-6">
                              <label>Doctor de P. Medica</label>
                              <p class="form-control-static">
                                <?php echo $medico; ?>
                              </p>
                           </div>
                        </div>
                        <br>
      <div class="pull-right">
         <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
         <button  type="submit" class="btn btn-success btn-md" id="editarFracc">Guardar Cambios</button>
      </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/frcaccionamientoinfo.js" type="text/javascript" charset="utf-8" async defer></script>

