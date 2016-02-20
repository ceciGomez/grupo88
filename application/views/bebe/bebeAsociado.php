<script>
var urlbase="<?php echo base_url();?>";
</script>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos del Bebe Asociado a la Donacion
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-home"></i> Home </a></li>
   <li><a href="#"> Consentimiento</a></li>
   <li class="active"> Bebe Asociado </li>
  </ol>
 </section>
 <!-- Main content -->
 <section class="content" id="cont">                
  <div class="row">
    <form data-toggle="validator" id="formularioBebeasociado" role="form" method="POST">
        <div class="col-xs-12">
            <input class="hidden" name="condicion" id="condicion" value="<?php echo $unaCondicion;?>">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="nombre">Nombre y apellido de la mama</label>
                <input type="text" class="form-control" id="nombre" disabled="" hidden="true"
                value="<?php echo $unaDonante[0]->nombre, " ", $unaDonante[0]->apellido;?>">
              </div>
            </div>
            
            <div class="col-lg-6" style='display:none;'>
              <div class="form-group">
                <label for="nroDonante">Nro de donante</label>
                <input type="text" class="form-control" id="nroDonante" name="nroDonante"
                value="<?php echo $unaDonante[0]->nroDonante ;?>">
              </div>
            </div>
        </div>

        <div class="col-xs-12">
          <div class="col-xs-6">
            <div class="form-group">
              <label> Nombre del Bebe </label>
              <input type="text" id="nombreba" class="form-control" placeholder="Escriba aquí el nombre del bebe" name="nombrebebea" required/>
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <span class="help-block with-errors">* Campo Requerido</span>
            </div>
          </div>

          <div class="col-xs-6">
            <div class="form-group">
              <label> Apellido del Bebe </label>
              <input type="text" id="apellidoba" class="form-control" placeholder="Escriba aquí el apellido del bebe" name="apellidobebea" required/>
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <span class="help-block with-errors">* Campo Requerido</span>
            </div>
          </div>

          <div class="col-xs-6">
              <div class="form-group">
              <label> DNI del Bebe </label><span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <input type="num" id="dniba" onkeypress = "return validarNum(event)" minlength="7" maxlength="8" class="form-control" placeholder="Escriba aquí el D.N.I del bebe" name="dnibebea" />
              
            </div>
          </div>

         <div class="col-xs-6">
            <div class="form-group">
              <label>Fecha de Nacimiento:</label>
              <div class="form-group">
                  <div class='input-group date' id='datetimepicker2'>
                     <input  type="text" class="form-control" id="fnac" data-inputmask="'alias':'dd/mm/yyyy'"
                      data-mask name="fecha" onkeypress = "return validarNum(event)" placeholder="dd/mm/aaaa" required/>
                     <span class="input-group-addon">
                     <span class="fa fa-calendar"></span>
                     </span>   
                  </div>
                  <span class="help-block with-errors" >*Campo Requerido</span>
              </div>
            </div>
          </div>

          <div class="col-xs-6">
          <!-- text input -->
              <div class="form-group">
                  <label> Edad Gestacional </label>
                  <input type="number" id="edadgestba" min="20" max="45" class="form-control" 
                  placeholder="Escriba aquí el número de semanas del bebe" name="edadgestba" required/>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
              </div>
          </div>

          <div class="col-xs-6">
              <div class="form-group">
                  <label> Lugar de Nacimiento del Bebe </label>
                  <input type="text" id="lugarbebea" class="form-control"
                  placeholder="Escriba aquí el lugar de nacimiento del bebe" name="lugarbebea"/>
              </div>
          </div>
            </div>
            <div class="pull-right content">
                <div class="form-group">
                   <button type="reset" class="btn btn-danger">Limpiar Datos</button>
                   <button type="button" data-toggle="modal" aria-hidden="true" id="guardarBebea" 
                   data-target="#compose-modal" class="btn btn-success btn-md">Guardar Bebe Asociado</button>
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
              <div class="container">
                <label> VA A GUARDAR LO SIGUIENTE: </label>
              </div>
              <div style="width:500px;margin-left:auto;margin-right:auto;">
                  <div class="form-group modal-header content">
                      <!--<div id="bebeasocinfonro">
                          <label></label>
                      </div> -->
                      <div id="bebeasocinfonombre">
                          <label> Nombre: <span></span> </label>
                      </div>
                      <div id="bebeasocinfoapellido">
                          <label> Apellido: <span></span> </label>
                      </div>
                       <div id="bebeasocinfodni">
                          <label> DNI: <span></span> </label>
                      </div>
                      <div id="bebeasocinfofecha">
                          <label> Fecha de Nacimiento: <span></span> </label>
                      </div>
                      <div id="bebeasocinfoedad">
                          <label> Edad Gestacional: <span></span> </label>
                      </div>
                      <div id="bebeasocinfolugar">
                          <label> Lugar de Nacimiento: <span></span> </label>
                      </div>
                    <div class="pull-right-side content" style="margin:auto">
                      <div class="form-group" style="float: right">
                        <button id="descartaBebea" data-dismiss="modal" aria-hidden="true" 
                        class="btn btn-danger btn-md">Descartar 
                        </button>
                        <button id="guardaBebea" data-dismiss="modal"  data-toggle="modal" 
                        data-target="#mssg-modal" aria-hidden="true" class="btn btn-success btn-md">Confirmar
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
<script src="<?php echo base_url();?>assets/internals/js/bebeasociadoinfo.js" type="text/javascript" charset="utf-8" async defer></script>



