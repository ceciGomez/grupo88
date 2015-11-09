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
         <form data-toggle="validator" id="formularioDonante" role="form" method="POST" action="<?php echo base_url()?>index.php/cdonante/altaDonante" >
            
            <div class="col-xs-5">
               <div class="form-group">
                  <label>Nombre</label>
                  <input type="text" id="nombre" class="form-control" placeholder="Escriba el nombre aqui" name="nombre" required/>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
               </div>
            </div>

            <div class="col-xs-5">
               <!-- text input -->
               <div class="form-group">
                  <label>Apellido</label>
                  <input type="text" id="apellido" class="form-control" placeholder="Escriba el Apellido aqui" name="apellido" required/>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
               </div>
            </div>
           
            <div class="col-xs-5">
               <!-- text input -->
               <div class="form-group">
                  <label>Fecha de Nacimiento:</label>
                  <div class="form-group">
                      <div class='input-group date' id='datetimepicker10'>
                           <input type="text" class="form-control" id="fnac"
                           data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="fecha"
                           placeholder="dd/mm/aaaa" required/>
                           <span class="input-group-addon">
                           <span class="fa fa-calendar"></span>
                           </span>
                      </div>
                      <script>
                      var fecha= new date();
                      console.log(fecha)
                      </script>
                     <span class="help-block with-errors" >*Campo Requerido</span>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>

            <div class="col-xs-5">
               <!-- text input -->
               <div class="form-group">
                  <label>DNI</label><span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <input type="number" onkeypress = "return validarNum(event)" minlength="7" maxlength="8" id="dni" class="form-control" placeholder="Escriba el DNI aqui" name="dni" required/>
                  <span class="help-block with-errors">* Campo Requerido</span>
               </div>
            </div>

            <div class="col-xs-5">
               <div class="form-group">
                  <label>Nro de Celular:</label>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                     </div>
                     <input type="number" id="celular" onkeypress = "return validarNum(event)" class="form-control" name="celular"
                        data-inputmask='"mask": "(999) 999-999999"' data-mask required/>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>

            <div class="col-xs-5">
               <!-- text input -->
               <div class="form-group">
                  <label>Ocupación</label>
                  <input type="text" id="ocupacion" class="form-control" 
                     placeholder="Escriba Ocupación aqui" name="ocupacion"/>
               </div>
            </div>

            <div class="col-xs-5">
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

            <div class="col-xs-5">
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

            <div class="col-xs-5">
               <!-- text input -->
               <div class="form-group" >
                  <label>Tipo de Donante</label>
                  <div>
                     <select required name="tipo" class="form-control" >
                        <option value="Interna">Interna</option>
                        <option value="Externa">Externa</option>
                     </select>
                  </div>
               </div>
            </div>

            <div class="col-xs-5">
               <!-- text input -->
               <div class="form-group">
                  <label for="inputEmail" class="control-label" >Correo Electronico</label>
                  <input type="email" id="email" class="form-control" 
                     placeholder="nombre@gmail.com" name="email"/>
                  <div class="help-block with-errors"></div>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
               </div>
            </div>
         
         <div class="content pull-right-side col-lg-12">
            <div class="form-group" style"float: right">
               <button type="reset" class="btn btn-danger md">Limpiar Datos</button>
               <button type="button" data-toggle="modal" aria-hidden="true" 
                  id="guardaDonante" data-target="#compose-modal" class="btn btn-success btn-md">Guardar Donante</button>
            </div>
         </div>

         </form>
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
               <label> VA A GUARDAR LO SIGUIENTE:</label>
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
                  <button data-dismiss="modal" aria-hidden="true" 
                     class="btn btn-danger btn-md">Descartar 
                  </button>
                  <button type="button" id="guardarTodo" data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true"
                     class="btn btn-success btn-md">Confirmar
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

<script>
$('#form').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
  }
})
</script>