<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Un Seguimiento del Bebe Asociado
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Un Seguimiento de Bebe Asociado</li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content" id="cont">
      <div class="row">
         <form id="formularioSeguimientoBa" role="form" >
            <div style="margin:0 auto;background:white;border-radius:8px;overflow: hidden;
               padding:15px 5px" class="col-xs-12"> 
               <div class="col-xs-3">
                  <div class="form-group">
                     <label>Nro. de Seguimiento:</label>
                  </div>
                     <input class="form-control" id="idba" name="idba" disabled="" 
                     value="<?php echo $unSeguimientoBa[0]->idSeguimiento;?>">
               </div>  
               <div class="col-xs-3">
                  <div class="form-group">
                     <label>Nro. de Bebe Asociado:</label>
                  </div>
                     <input class="form-control" id="idba" name="idba" disabled="" 
                     value="<?php echo $unSeguimientoBa[0]->BebeAsociado_idBebeAsociado;?>">
               </div>
               <div class="col-xs-3">
                  <!-- text input -->
                  <div class="form-group">
                     <label>Nombre:</label>
                  </div>
                     <input class="form-control" id="nombreba" name="nombreba" disabled="" 
                     value="<?php echo $unAsociado[0]->nombreBebeAsociado;?>">
               </div>
                  <!-- text input -->
               <div class="col-xs-3">
                  <div class="form-group">
                     <label>Apellido:</label>
                  </div>
                    <input class="form-control" id="apellidoba" disabled="" 
                    value="<?php echo $unAsociado[0]->apellidoBebeAsociado;?>">
               </div>
            </div>
             <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Fecha de Seguimiento:</label>
                  <input class="form-control" id="apellidoba" disabled="" 
                    value="<?php echo $unSeguimientoBa[0]->fechaSeguimiento;?>">
               </div>
               <!-- /.form group -->
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Médico:</label>
                  <input type="text" id="medico" disabled="" value="<?php echo $unSeguimientoBa[0]->medico;?>" class="form-control" name="medicoBa"/>
               </div>
            </div>

            <div class="col-xs-6">
               <div class="form-group">
                  <label>Altura:</label>
                  <input type="text" id="altura"  class="form-control"
                      disabled=""value="<?php echo $unSeguimientoBa[0]->altura;?>" name="alturaBa"/>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Peso:</label>
                  <input type="text" id="peso" class="form-control" 
                     disabled=""value="<?php echo $unSeguimientoBa[0]->peso;?>"name="pesoBa" />
               </div>
            </div>

            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Perimetro Cefalico:</label>
                  <input type="text" id="perimCef" class="form-control" 
                     disabled=""value="<?php echo $unSeguimientoBa[0]->perimetroCefalico;?>" name="perCefBa"/>
               </div>
            </div>
            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Observaciones:</label>
                  <input type="text" id="obsba" class="form-control" 
                  disabled=""value="<?php echo $unSeguimientoBa[0]->observacionesBebeAsoc;?>" name="obsBa"/>
               </div>
            </div>

         </form>

         <div class="pull-right content">
            <div class="form-group">
               <a  aria-hidden="true" href="<?php echo base_url()?>index.php/cseguimiento/view/seguimientosUnBa/<?php echo $unSeguimientoBa[0]->BebeAsociado_idBebeAsociado;?>"class="btn btn-info btn-md">volver</a>
            </div>
         </div>

      </div>
      </div>
      <!-- right column -->
      </div>   <!-- /.row -->
   </section>
   <!-- /.content -->
<script>
$('#formularioSeguimientoBa').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
  }
})
</script>
