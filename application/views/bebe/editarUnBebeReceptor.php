<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos del Bebe Receptor de la Donación
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
   <li><a href="#">Gestion de Bebes</a></li>
   <li class="active">Bebe Receptor</li>
  </ol>
 </section>
 <!-- Main content -->
 <section class="content" id="cont">                
  <div class="row">
    <form data-toggle="validator" id="formularioBebereceptor" role="form" method="POST" action="<?php echo base_url()?>index.php/cbebe/guardarModificacionesBebeReceptor">
        <div class="col-lg-4" style='display:none;'>
          <div class="form-group">
          <label for="nrobr">Nro Bebe Receptor</label>
            <input type="hidden" class="form-control" id="nrobr" name="idBebeReceptor"
            value="<?php echo $unBebeR[0]->idBebeReceptor ;?>">
          </div>
        </div>
        <div class="col-xs-4">
        <!-- text input -->
         <div class="form-group">
          <label> Nombre del Bebe </label>
          <input required type="text" id="nombrebr" class="form-control" value="<?php echo $unBebeR[0]->nombreBebeReceptor; ?>" name="nombrebr"/>
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <span class="help-block with-errors">* Campo Requerido</span>
         </div>
        </div>
        <div class="col-xs-4">
        <!-- text input -->
          <div class="form-group">
            <label> Apellido del Bebe </label>
            <input required type="text" id="apellidobr" class="form-control" value="<?php echo $unBebeR[0]->apellidoBebeReceptor; ?>" name="apellidobr"/>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <span class="help-block with-errors">* Campo Requerido</span>
          </div>
        </div>
         <div class="col-xs-4">
        <!-- text input -->
            <div class="form-group">
              <label> DNI del Bebe </label><span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <input required onkeypress = "return validarNum(event)" minlength="7" maxlength="8"  type="text" id="dnibr" class="form-control" value="<?php echo $unBebeR[0]->dniBebeReceptor; ?>" name="dnibr"/>
              <span class="help-block with-errors">* Campo Requerido</span>
            </div>
       </div>
         <div class="col-xs-4">
               <!-- text input -->
               <div class="form-group">
                  <label>Fecha de Nacimiento:</label>
                  <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                                 <input required type="text" class="form-control" id="fnacbr" data-inputmask="'alias': 'dd/mm/yyyy'" 
                                 data-mask name="fnac" value="<?php echo $fechaNacArreglada; ?>" />
                            </div>
                        <span class="help-block with-errors">*Campo Requerido</span>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>
            <div class="col-xs-4">
            <!-- text input -->
                <div class="form-group">
                    <label> Lugar de Nacimiento del Bebe </label>
                    <input type="text" id="lugarbr" class="form-control"
                    value="<?php echo $unBebeR[0]->lugarNac; ?>" name="lugarNacbr"/>
                </div>
            </div>
            <div class="col-xs-4">
            <!-- text input -->
                <div class="form-group">
                    <label> Nombre de la Madre del Bebe </label><span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <input type="text" id="nombreMbr" class="form-control"
                    value="<?php echo $unBebeR[0]->nombreMadre; ?>" name="nombreMbr" required/>
                    <span class="help-block with-errors">* Campo Requerido</span>
                </div>
            </div>
            <div class="col-xs-4">
            <!-- text input -->
                <div class="form-group">
                    <label> Nombre del Padre del Bebe </label>
                    <input type="text" id="nombrePbr" class="form-control"
                    value="<?php echo $unBebeR[0]->nombrePadre; ?>" name="nombrePbr"/>
                </div>
            </div>
            <div class="col-xs-4">
            <!-- text input -->
                <div class="form-group">
                    <label> Dirección del Bebe </label>
                    <input type="text" id="direcbr" class="form-control"
                    value="<?php echo $unBebeR[0]->direccion; ?>" name="direcbr"/>
                </div>
            </div>
            <div class="col-xs-4">
            <!-- text input -->
                <div class="form-group">
                    <label> Edad Gestacional </label>
                    <input required min="20" max="45" type="number" id="edadGestbr" class="form-control" 
                    value="<?php echo $unBebeR[0]->edadGestacional; ?>" name="edadGestbr"/>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <span class="help-block with-errors">* Campo Requerido</span>
                </div>
            </div>
         <div class="pull-right content">
            <div class="form-group">
               <a  aria-hidden="true" href="<?php echo base_url()?>index.php/cbebe/verUnBebereceptor/<?php echo $unBebeR[0]->idBebeReceptor;?>/"class="btn btn-danger btn-md">cancelar</a>
              <button type="sumbit" class="btn btn-success btn-md">Guardar Cambios</button>
            </div>
         </div>
       </form>
    </div>
 </section><!-- /.content -->

<script src="<?php echo base_url();?>assets/internals/js/bebereceptorinfo.js" type="text/javascript" charset="utf-8" async defer></script>