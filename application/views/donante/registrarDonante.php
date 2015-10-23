<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Datos del Donante
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="<?php echo base_url();?>index.php/consentimiento/view/consentimiento/">Consentimiento</a></li>
         <li class="active">Donante </li>
      </ol>
   </section>
   <!-- Main content -->
   <section class="content" id="cont">
      <div class="row">
         <form id="formularioDonante" role="form" method="POST" action="<?php echo base_url()?>index.php/cdonante/altaDonante" >
            <input name="nueva" class="hidden" value="nueva">
            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" id="nombre" class="form-control" placeholder="Juana" name="nombre" required/>
               </div>
            </div>
            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Apellido</label>
                  <input type="text" id="apellido" class="form-control" placeholder="Molina" name="apellido" required/>
               </div>
            </div>
           
               <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Fecha de Nacimiento:</label>
                  <div class="form-group">
                      <div class='input-group date' id='datetimepicker10'>
                           <span class="input-group-addon">
                              <span class="fa fa-calendar"></span>
                           </span>
                           <input type="text" class="form-control" id="fnac" 
                           data-inputmask="'alias': 'dd/mm/yyyy'" 
                           data-mask name="fecha" placeholder="dd/mm/aaaa" required/>

                      </div>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>
            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>DNI</label>
                  <input type="text" id="dni" class="form-control" placeholder="34.000.004" name="dni"/>
               </div>
            </div>
            <div class="col-xs-6">
               <div class="form-group">
                  <label>Nro de Celular:</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <input type="text" id="celular" class="form-control" name="celular"
                        data-inputmask='"mask": "(999) 999-999999"' data-mask/>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>
            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Ocupación</label>
                  <input type="text" id="ocupacion" class="form-control" 
                     placeholder="Empleada Publica" name="ocupacion"/>
               </div>
            </div>
            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group" >
                  <label>Estado Civil</label>
                  <div >
                     <select name="estadoCivil" class="form-control" >
                        <option value="Soltera">Soltera</option>
                        <option value="Casada">Casada</option>
                        <option value="Viuda">Viuda</option>
                        <option value="Otro">Otro</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Maximo nivel de Estudios Alcanzados</label>
                  <div>
                     <select name="estudios" class="form-control" >
                        <option value="Primario Incompleto">Primario Incompleto</option>
                        <option value="Primario Completo">Primario Completo</option>
                        <option value="Secundario Incompleto">Secundario Incompleto</option>
                        <option value="Secundario Completo">Secundario Completo</option>
                        <option value="Terciario Incompleto">Terciario Incompleto</option>
                        <option value="Terciario Completo">Terciario Completo</option>
                        <option value="Universitario Incompleto">Universitario Incompleto</option>
                        <option value="Universitario Completo">Universitario Completo</option>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group" >
                  <label>Tipo de Donante</label>
                  <div>
                     <select name="tipo" class="form-control" >
                        <option value="Interna">Interna</option>
                        <option value="Externa">Externa</option>
                     </select>
                  </div>
               </div>
            </div>
            <!--<div class="col-xs-6"> -->
            <!-- text input -->
            <!-- <div class="form-group">
               <label>Nro de Habitacion</label>
               <input type="text" id="nrohabitacion" class="form-control" 
               placeholder="413" name="habitacion"/>
               </div>
               </div> -->
            <div class="col-xs-6">
               <!-- text input -->
               <div class="form-group">
                  <label>Correo Electronico</label>
                  <input type="text" id="email" class="form-control" 
                     placeholder="nombre@gmail.com" name="email"/>
               </div>
            </div>
         </form>
         <div class="pull-right content">
            <div class="form-group">
             
               <button type="button" data-toggle="modal" aria-hidden="true" 
                  id="guardaDonante" data-target="#compose-modal" class="btn btn-success btn-md">Guardar Donante</button>
            </div>
         </div>
      </div>
      </div>
      <!-- right column -->
      </div>   <!-- /.row -->
   </section>
   <!-- /.content -->
   <!-- COMPOSE MESSAGE MODAL -->
   <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title"><i class="fa fa-check"></i> Detalle de Madre Donante </h4>
            </div>
            <div class="content">
               <label> Va a guardar la siguiente Donante, revise los datos ingresados</label>
            </div>
            <div style="width:500px;margin-left:auto;margin-right:auto;" class="container">
               <div class="form-group modal-header">
                  <div id="donanteinfonro">
                     <label></label>
                  </div>
                  <div id="donanteinfonombre">
                     <label>Nombre: <span></span></label>
                  </div>
                  <div id="donanteinfoapellido">
                     <label>Apellido: <span></span></label>
                  </div>
                  <div id="donanteinfodni">
                     <label>DNI: <span></span></label>
                  </div>
                  <div id="donanteinfoocupacion">
                     <label>Ocupacion: <span></span></label>
                  </div>
                  <div id="donanteinfotipo">
                     <label>Tipo de Donante: <span></span></label>
                  </div>
                  <div id="donanteinfoestadocivil">
                     <label>Estado Civil: <span></span></label>
                  </div>
                  <div id="donanteinfoestudios">
                     <label>Estudios Alcanzados: <span></span></label>
                  </div>
                  <div id="donanteinfoemail">
                     <label>Email: <span></span></label>
                  </div>
               </div>
               <div style="margin:auto;">
                  <button type="button" id="guardarTodo" data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true"
                     class="btn btn-success btn-lg">Confirmar
                  </button>
                  <button data-dismiss="modal" aria-hidden="true" 
                     class="btn btn-success btn-lg">Descartar 
                  </button>
                  
               </div>
               <br><br>
            </div>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
   </div><!-- /.modal -->
</aside>
<!-- /.right-side -->

<script src="<?php echo base_url();?>assets/internals/js/donanteinfo.js" type="text/javascript" charset="utf-8" async defer></script>
<script type="text/javascript">
         $(function () {
             $('#datetimepicker10').datetimepicker({ locale: 'es', viewMode: 'years', format: 'DD/MM/YYYY' });
         });
</script>
