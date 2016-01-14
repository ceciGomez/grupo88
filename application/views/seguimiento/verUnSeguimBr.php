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
         <form id="formularioSeguimientoBr" role="form" >
            <div style="margin:0 auto;background:white;border-radius:8px;overflow: hidden;
               padding:15px 5px" class="col-xs-12"> 
               <div class="col-xs-3">
                  <div class="form-group">
                     <label>Nro. de Seguimiento:</label>
                  </div>
                     <input class="form-control" id="idba" name="idba" disabled="" 
                     value="<?php echo $unSeguimientoBr[0]->idSegBebeReceptor;?>">
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
                    <input class="form-control" id="apellidobr" disabled="" 
                    value="<?php echo $unReceptor[0]->apellidoBebeReceptor;?>">
               </div>
            </div>
             <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Fecha de Seguimiento:</label>
                  <input class="form-control" id="apellidoba" disabled="" 
                    value="<?php echo $unSeguimientoBr[0]->fechaSeguimiento;?>">
               </div>
               <!-- /.form group -->
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Médico:</label>
                  <input type="text" id="medico" disabled="" value="<?php echo $unSeguimientoBr[0]->medico;?>" class="form-control" name="medicoBr"/>
               </div>
            </div>

            <div class="col-xs-6">
               <div class="form-group">
                  <label>Altura:</label>
                  <input type="text" id="altura"  class="form-control"
                      disabled=""value="<?php echo $unSeguimientoBr[0]->altura;?>" name="alturaBr"/>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Peso:</label>
                  <input type="text" id="peso" class="form-control" 
                     disabled=""value="<?php echo $unSeguimientoBr[0]->peso;?>"name="pesoBr" />
               </div>
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Perimetro Cefalico:</label>
                  <input type="text" id="perimCef" class="form-control" 
                     disabled=""value="<?php echo $unSeguimientoBr[0]->perimetroCefalico;?>" name="perCefBr"/>
               </div>
            </div>
            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Observaciones:</label>
                  <input type="text" id="obsba" class="form-control" 
                  disabled=""value="<?php echo $unSeguimientoBr[0]->observaciones;?>" name="obsBr"/>
               </div>
            </div>

         </form>

         <div class="pull-right content">
            <div class="form-group">
               <a  aria-hidden="true" href="<?php echo base_url()?>index.php/cseguimiento/view/seguimientosUnBr/<?php echo $unSeguimientoBr[0]->BebeReceptor_idBebeReceptor;?>"class="btn btn-primary btn-md">volver</a>
            </div>
         </div>

      </div>
      </div>
      <!-- right column -->
      </div>   <!-- /.row -->
   </section>
   <!-- /.content -->
<script>
$('#formularioSeguimientoBr').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
  }
})
</script>