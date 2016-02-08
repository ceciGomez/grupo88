<!--Ver el Fraccionamiento -->
<aside class="right-side">
   <section class="content-header col-md-12">
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Fraccionamiento</a></li>
         <li class="active">Ver un fraccionamiento </li>
      </ol>
      <h1>Ver detalles de un fraccionamiento</h1>
   </section>
   <!-- fin section header -->
   <section class="content col-md-12">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-8 col-md-offset-1">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form id="form" role="form">
                        <div class="form-group row">
                           <div class="form-group col-md-6">
                              <label>Numero de Fraccionamiento</label>
                                <p class="form-control-static"  >
                                  <?php echo $unFraccionamiento[0]->idFraccionamiento ?></p>
                              
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
                              <p class="form-control-static">
                                <?php echo $unFraccionamiento[0]->volumen; ?>
                              </p>
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
                              <p class="form-control-static">
                                <?php echo $consumido; ?>
                              </p>
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
         <a class="btn btn-primary btn-md" href="<?php echo base_url()?>index.php/cfraccionamiento/view/verTodosLosFraccionamientos">Ver todos</a>
      </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- /.content -->
</aside>
<script src="<?php echo base_url();?>assets/internals/js/fraccionamientoinfo.js" type="text/javascript" charset="utf-8" async defer></script>