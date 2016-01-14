<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Un Seguimiento del Bebe Receptor
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Un Seguimiento de Bebe Receptor</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content" id="cont">
      <div class="row">
         <form data-toggle="validator" id="formularioSeguimientoBr" role="form" method="POST" action="<?php echo base_url()?>index.php/cseguimiento/guardarModificacionesSegBr">
            <div style="margin:0 auto;background:white;border-radius:8px;overflow: hidden;
               padding:15px 5px" class="col-xs-12"> 
               <div class="col-xs-3">
                  <div class="form-group">
                     <label>Nro. de Seguimiento:</label>
                  </div>
                     <input class="form-control" id="idbaaiado" name="idbaaiado" disabled="" 
                     value="<?php echo $unSeguimientoBr[0]->idSegBebeReceptor;?>">
               </div> 
               <div class="col-xs-3" style="display:none">
                  <!-- text input -->
                  <label>nro de seguimiento</label>
                  <input class="form-control" id="idSegBebeReceptor" name="idSegBebeReceptor"  
                     value="<?php echo $unSeguimientoBr[0]->idSegBebeReceptor;?>">
                  <div class="form-group">
                     <label>Nro. de Bebe Receptor:</label>
                  </div>
                     <input class="form-control" id="idBebeReceptor" name="idBebeReceptor"  
                     value="<?php echo $unSeguimientoBr[0]->BebeReceptor_idBebeReceptor;?>">
               </div> 
               <div class="col-xs-3">
                  <div class="form-group">
                     <label>Nro. de Bebe Receptor:</label>
                  </div>
                     <input class="form-control" id="idbr" name="idbr" disabled="" 
                     value="<?php echo $unSeguimientoBr[0]->BebeReceptor_idBebeReceptor;?>">
               </div>
               <div class="col-xs-3">
                  <!-- text input -->
                  <div class="form-group">
                     <label>Nombre:</label>
                  </div>
                     <input class="form-control" id="nombrebr" name="nombrebr" disabled="" 
                     value="<?php echo $unReceptor[0]->nombreBebeReceptor;?>">
               </div>
                  <!-- text input -->
               <div class="col-xs-3">
                  <div class="form-group">
                     <label>Apellido:</label>
                  </div>
                    <input class="form-control" id="apellidoba" disabled="" 
                    value="<?php echo $unReceptor[0]->apellidoBebeReceptor;?>">
               </div>
            </div>
             <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Fecha de Seguimiento:</label>
                  <label title="Editar campo?" class="fa fa-pencil"></label>
                  <div class='input-group date' id='datetimepicker2'>
                  <?php
                      $fechaArray = explode('-', $unSeguimientoBr[0]->fechaSeguimiento);
                      $date = new DateTime();
                      $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                      $fecha= $date->format('d/m/Y'); ?>
                  <input class="form-control" id="fechaBr" name="fechaBr"
                    value="<?php echo $fecha;?>" required>
                <span class="input-group-addon">
                <span class="fa fa-calendar"></span>
                </span>
                </div>
               </div>
               <span class="help-block with-errors">* Campo Requerido</span>
               <!-- /.form group -->
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Médico:</label>
                  <label title="Editar campo?" class="fa fa-pencil"></label>
                  <input required type="text" id="medico" value="<?php echo $unSeguimientoBr[0]->medico;?>" class="form-control" name="medicoBr"/>
               </div>
               <span class="help-block with-errors">* Campo Requerido</span>
            </div>

            <div class="col-xs-6">
               <div class="form-group">
                  <label>Altura:</label>
                  <label title="Editar campo?" class="fa fa-pencil"></label>
                  <input required type="text" id="altura"  class="form-control"
                      value="<?php echo $unSeguimientoBr[0]->altura;?>" name="alturaBr"/>
                  <!-- /.input group -->
               </div>
               <span class="help-block with-errors">* Campo Requerido</span>
               <!-- /.form group -->
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Peso:</label>
                  <label title="Editar campo?" class="fa fa-pencil"></label>
                  <input required type="text" id="peso" class="form-control" 
                     value="<?php echo $unSeguimientoBr[0]->peso;?>"name="pesoBr" required/>
               </div>
               <span class="help-block with-errors">* Campo Requerido</span>
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Perimetro Cefalico:</label>
                  <label title="Editar campo?" class="fa fa-pencil"></label>
                  <input required type="text" id="perimCef" class="form-control" 
                    value="<?php echo $unSeguimientoBr[0]->perimetroCefalico;?>" name="perCefBr"/>
               </div>
               <span class="help-block with-errors">* Campo Requerido</span>
            </div>
            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Observaciones:</label>
                  <label title="Editar campo?" class="fa fa-pencil"></label>
                  <input required type="text" id="obsbr" class="form-control" 
                  value="<?php echo $unSeguimientoBr[0]->observaciones;?>" name="obsBr"/>

               </div>
            </div>
            <div class="pull-right content">
            <div class="form-group">
               <a  aria-hidden="true" href="<?php echo base_url()?>index.php/cseguimiento/view/seguimientosUnBr/<?php echo $unSeguimientoBr[0]->BebeReceptor_idBebeReceptor;?>"class="btn btn-danger btn-md">cancelar</a>
              <button type="sumbit" class="btn btn-success btn-md">Guardar Cambios</button>
            </div>
         </div>
         </form>
       </div>
      </div>
      <!-- right column -->
      </div>   <!-- /.row -->
   </section>
   <!-- /.content -->
<script src="<?php echo base_url();?>assets/internals/js/seguimientobr.js" type="text/javascript" charset="utf-8" async defer></script>
<script>
$('#formularioSeguimientoBr').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
  }
})
</script>
