<!--Comentario de push -->
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos del Bebe Receptor
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
   <li><a href="#"> Consentimiento</a></li>
   <li class="active"> Bebe Receptor </li>
  </ol>
 </section>
 <!-- Main content -->
 <section class="content" id="cont">                
  <div class="row">
    <form data-toggle="validator" id="formularioBebereceptor" role="form" method="POST" action="<?php echo base_url()?>index.php/cbebe/altaBebereceptor" >
        <div class="col-xs-4">
         <div class="form-group">
          <label> Nombre del Bebe </label>
          <input type="text" id="nombrebr" class="form-control" placeholder="Escriba Nombre del bebe" name="nombrebr" required/>
          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
          <span class="help-block with-errors" >*Campo Requerido</span>
         </div>
        </div>
        <div class="col-xs-4">
          <div class="form-group">
            <label> Apellido del Bebe </label>
            <input type="text" id="apellidobr" class="form-control" placeholder="Escriba el apellido del bebe" name="apellidobr" required/>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <span class="help-block with-errors" >*Campo Requerido</span>
          </div>
        </div>
        <div class="col-xs-4">
          <div class="form-group">
            <label> DNI del Bebe </label>
            <input type="number" id="dnibr" class="form-control" onkeypress = "return validarNum(event)" minlength="7" maxlength="8" placeholder="numero de DNI" name="dnibr" required/>
            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
            <span class="help-block with-errors" >*Campo Requerido</span>
          </div>
        </div>
        <div class="col-xs-6">
            <div class="form-group">
              <label>Fecha de Nacimiento:</label>
                  <div class='input-group date' id='datetimepicker1'>
                     <input  type="text" class="form-control" id="fnac" data-inputmask="'alias':'dd/mm/yyyy'"
                      data-mask name="fecha" onkeypress = "return validarNum(event)" placeholder="dd/mm/aaaa" required/>
                     <span class="input-group-addon">
                     <span class="fa fa-calendar"></span>
                     </span>   
                  </div>
                  <span class="help-block with-errors" >*Campo Requerido</span>
            </div>
          </div>
           <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Lugar de Nacimiento del Bebe </label>
                    <input type="text" id="lugarbr" class="form-control"
                    placeholder="Escriba un lugar de Nacimiento" name="lugarNacbr" required/>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <span class="help-block with-errors" >*Campo Requerido</span>
                </div>
            </div>
             <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Madre de Bebe </label>
                    <input type="text" id="nombreMbr" class="form-control" 
                    placeholder="Nombre de la Madre" name="nombreMbr" required/>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <span class="help-block with-errors" >*Campo Requerido</span>
                </div>
            </div>
             <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Padre del Bebe </label>
                    <input type="text" id="nombrePbr" class="form-control" 
                    placeholder="Nombre del Padre" name="nombrePbr" required/>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <span class="help-block with-errors" >*Campo Requerido</span>
                </div>
             </div>
             <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Direccion </label>
                    <input type="text" id="direcbr" class="form-control" 
                    placeholder="Escriba la direccion" name="direcbr"/>
                </div>
             </div>
              <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label> Edad Gestacional </label>
                    <input type="number" id="edadGestbr" min="20" max="45" class="form-control" 
                    placeholder="cantidad de semanas" name="edadGestbr" required/>
                    <span class="help-block with-errors" >*Campo Requerido</span>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                </div>
             </div>
            <div class="pull-right content">
                <div class="form-group">
                   <button type="reset" class="btn btn-danger">Limpiar Datos</button>
                   <button type="button" data-toggle="modal" aria-hidden="true" id="guardarBr" 
                   data-target="#compose-modal" class="btn btn-success btn-md">Guardar Bebe Receptor</button>
                </div>
            </div>
       </form>
      </div>
 </section><!-- /.content -->

 <!-- COMPOSE MESSAGE MODAL -->
  <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title"><i class="fa fa-check"></i> Detalle de Bebe Asociado </h4>
              </div>
              <div>
                <label> VA A GUARDAR LOS SIGUIENTES DATOS </label>
              </div>
              <div style="width:500px;margin-left:auto;margin-right:auto;" class="pull-rigth">
                  <div class="form-group modal-header">
                     
                      <div id="bebereceptorinfonombre">
                          <label> Nombre: <span></span> </label>
                      </div>
                      <div id="bebereceptorinfoapellido">
                          <label> Apellido: <span></span> </label>
                      </div>
                       <div id="bebereceptorinfodni">
                          <label> DNI: <span></span> </label>
                      </div>
                      <div id="bebereceptorinfofecha">
                          <label> Fecha de Nacimiento: <span></span> </label>
                      </div>
                      <div id="bebereceptorinfolugar">
                          <label> Lugar de Nacimiento: <span></span> </label>
                      </div>
                      <div id="bebereceptorinfonombrem">
                          <label> Nombre de la Madre: <span></span> </label>
                      </div>
                      <div id="bebereceptorinfonombrep">
                          <label> Nombre de la Padre: <span></span> </label>
                      </div>
                       <div id="bebereceptorinfodirec">
                          <label> Direccion: <span></span> </label>
                      </div>
                       <div id="bebereceptorinfoedad">
                          <label> Edad Gestacional: <span></span> </label>
                      </div>
                  <div class="pull-right-side content" style="margin:auto;">
                    <div class="form-group" style="float: right">
                      <button data-dismiss="modal" aria-hidden="true" 
                      class="btn btn-danger btn-md">Descartar 
                      </button>    
                      <button id="guardaBr" data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true"
                       class="btn btn-success btn-md">Confirmar
                      </button>
                    </div>    
                  </div>
                </div>
                  </div>
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</aside><!-- /.right-side -->

<script src="<?php echo base_url();?>assets/internals/js/bebereceptorinfo.js" type="text/javascript" charset="utf-8" async defer></script>
