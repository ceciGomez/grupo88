<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos del Bebe Asociado a un Consentimiento
  </h1>
 <!-- 
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
   <li><a href="#"> Consentimiento</a></li>
   <li class="active"> Bebe Asociado </li>
  </ol>
 -->
 </section>
 <!-- Main content -->
 <section class="content" id="cont">                
  <div class="row">
    <form data-toggle="validator" id="formularioBebeasociado" role="form" method="POST" action="<?php echo base_url()?>index.php/cbebe/guardarModificacionesBebeAsociado">
        
        <div class="col-lg-6">
          <div class="form-group">
          <label for="nombre">Nombre y apellido de la mama</label>
          
            <input type="text" class="form-control" id="nombre" disabled value="<?php echo $unaDonante[0]->nombre, " ", $unaDonante[0]->apellido;?>">
          </div>
        </div>
        <div class="col-lg-6" style='display:none;'>
          <div class="form-group">
          <label for="nroBebeAsociado">Nro Bebe Asociado</label>
          
            <input type="hidden" class="form-control" id="nroDonante" name="idBebeAsociado"
            value="<?php echo $unbebeasociado[0]->idBebeAsociado ;?>">
          </div>
        </div>
        <!--
        <div class="col-lg-6" style='display:none;'>
          <div class="form-group">
          <label for="nroDonante">Nro de donante</label>
          
            <input type="text" class="form-control" id="nroDonante" name="nroDonante"
            value="<?php // echo $unaDonante[0]->nroDonante ;?>">
          </div>
        </div>
        -->
     
        
        <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
          <label> Nombre del Bebe </label>
          
          <input required type="text" id="nombreba" class="form-control" value="<?php echo $unbebeasociado[0]->nombreBebeAsociado; ?>" name="nombreBebeAsociado"/>
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <span class="help-block with-errors">* Campo Requerido</span>
         </div>
        </div>
        <div class="col-xs-6">
        <!-- text input -->
          <div class="form-group">
            <label> Apellido del Bebe </label>
            <input required type="text" id="apellidoba" class="form-control" value="<?php echo $unbebeasociado[0]->apellidoBebeAsociado; ?>" name="apellidoBebeAsociado"/>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <span class="help-block with-errors">* Campo Requerido</span>
          </div>
        </div>
         <div class="col-xs-6">
        <!-- text input -->
            <div class="form-group">
              <label> DNI del Bebe </label><span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <input required onkeypress = "return validarNum(event)" minlength="7" maxlength="8"  type="text" id="dniba" class="form-control" value="<?php echo $unbebeasociado[0]->dniBebeAsociado; ?>" name="dniBebeAsociado"/>
              <span class="help-block with-errors">* Campo Requerido</span>
            </div>
       </div>
         <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Fecha de Nacimiento:</label>
                  <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                                 <input required type="text" class="form-control" id="fnac" data-inputmask="'alias': 'dd/mm/yyyy'" 
                                 data-mask name="fecha" value="<?php echo $unbebeasociado[0]->fechaNacBebeAsociado; ?>" />
                            </div>
                        <span class="help-block with-errors">*Campo Requerido</span>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>
            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Edad Gestacional </label>
                    <input required min="20" max="45" type="number" id="edadgestba" class="form-control" 
                    value="<?php echo $unbebeasociado[0]->edadGestBebAsociado; ?>" name="edadGestBebAsociado"/>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <span class="help-block with-errors">* Campo Requerido</span>
                </div>
            </div>
            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Lugar de Nacimiento del Bebe </label>
                    <input type="text" id="lugarbebea" class="form-control"
                    value="<?php echo $unbebeasociado[0]->lugarNacBebeAsociado; ?>" name="lugarNacBebeAsociado"/>
                </div>
            </div>
    
   
       </form>
       <div class="pull-right content">
      <div class="form-group">
          <button type="submit" aria-hidden="true" id="guardarBebea" class="btn btn-success btn-md"> Guardar Cambios </button>
        </div>                  
      </div>
      
    </div>
    
    
 </section><!-- /.content -->

</aside><!-- /.right-side -->
<script>
$('#form').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
  }
})
</script>