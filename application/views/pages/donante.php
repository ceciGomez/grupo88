<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Datos del Donante
  </h1>
  <ol class="breadcrumb">
   <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
   <li><a href="#">Consentimiento</a></li>
   <li class="active">Donante </li>
  </ol>
 </section>

 <!-- Main content -->
 <section class="content" id="cont">                
  <div class="row">
  
   
   
       <form id="formularioDonante" role="form" method="POST" action="<?php echo base_url()?>index.php/page/altaDonante" >
       <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
          <label>Numero de Donante</label>
          <input type="text" id="nro" class="form-control" placeholder="1111111" disabled name="nombre"/>
         </div>
        </div>
        <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
          <label>Nombre</label>
          <input type="text" id="nombre" class="form-control" placeholder="Juana" name="nombre"/>
         </div>
        </div>
        <div class="col-xs-6">
        <!-- text input -->
          <div class="form-group">
            <label>Apellido</label>
            <input type="text" id="apellido" class="form-control" placeholder="Molina" name="apellido"/>
          </div>
        </div>
        <div class="col-xs-6">
        <!-- text input -->
         <div class="form-group">
           <label>Fecha de Nacimiento:</label>
           <div class="input-group">
               <div class="input-group-addon">
                   <i class="fa fa-calendar"></i>
               </div>
               <input type="text" class="form-control" id="fnac"
               data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="fecha"/>
           </div><!-- /.input group -->
       </div><!-- /.form group -->
       </div>
        <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label>Lugar de Nacimiento</label>
                    <input type="text" id="lugarnac" class="form-control" 
                    placeholder="Resistencia - Chaco" name="lnac"/>
                </div>
            </div>
            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label>Localidad</label>
                    <input type="text" id="loc" class="form-control" 
                    placeholder="Resistencia" name="localidad"/>
                </div>
            </div>

            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label>Domicilio</label>
                    <input type="text" id="dom" class="form-control" 
                    placeholder="Calle Falsa 123" name="domicilio"/>
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
                </div><!-- /.input group -->
            </div><!-- /.form group -->
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
                <div class="form-group">
                    <label>Estado Civil</label>
                    <div>
                      <select class="form-control">
                        <option>Soltera</option>
                        <option>Casada</option>
                        <option>Viuda</option>
                        <option>Otro</option>
                        </select>
                </div>
            </div>
             </div>
            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label>Maximo nivel de Estudios Alcanzados</label>
                    <div>
                      <select class="form-control">
                        <option>Primario Incompleto</option>
                        <option>Primario Completo</option>
                        <option>Secundario Incompleto</option>
                        <option>Secundario Completo</option>
                        <option>Terciario Incompleto</option>
                        <option>Terciario Completo</option>
                        <option>Universitario Incompleto</option>
                        <option>Universitario Completo</option>
                      </select>
                </div>
            </div>
             </div>

            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group" >
                    <label>Tipo de Donante</label>
                    <div>
                      <select class="form-control">
                        <option>Interna</option>
                        <option>Externa</option>
                        </select>
                </div>
            </div>
            </div>
            <div class="col-xs-6">
            <!-- text input -->
                <div class="form-group">
                    <label>Nro de Habitacion</label>
                    <input type="text" id="nrohabitacion" class="form-control" 
                    placeholder="413" name="habitacion"/>
                </div>
            </div>
         
       
       </form>
      
      <div class="pull-right">
  
     <div class="form-group">
          
          <button class="btn btn-success btn-lg">Asociar Bebe</button>
        
         
          <button data-target="#compose-modal"  data-toggle="modal" aria-hidden="true" 
             id="guardaDonante" class="btn btn-success btn-lg">Guardar Donante</button>
         </div>                  
    </div>
    </div>

   </div>
   <!-- right column -->
  </div>   <!-- /.row -->
 </section><!-- /.content -->

 <!-- COMPOSE MESSAGE MODAL -->
  <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Detalle de Madre Donante </h4>
              </div>
              <div style="width:500px;margin-left:auto;margin-right:auto;">
                  <div class="form-group modal-header">
                      <div id="donanteinfonro">
                          <label></label>
                      </div>
                      <div id="donanteinfonombre">
                          <label>Nombre: </label>
                      </div>
                      <div id="donanteinfoapellido">
                          <label>Apellido: </label>
                      </div>
                      <div id="donanteinfofnac">
                          <label></label>
                      </div>
                      <div id="donanteinfolugarnac">
                          <label></label>
                      </div>
                      <div id="donanteinfodomicilio">
                          <label></label>
                      </div>
                      <div id="donanteinfoocupacion">
                          <label></label>
                      </div>
                      <div id="donanteinfotipo">
                          <label></label>
                      </div>
                  </div>
                  <div class="form-group modal-header">
                      <div class="form-group modal-header">
                          <label>¿Realizar Pedido de Serología?</label>
                          <select class="form-control">
                            <option value="">Si</option>
                            <option value="">No</option>
                              
                          </select>
                      </div>
                      <div style="margin:auto;">
                          
                      <button id="guardarTodo" data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true" class="btn btn-success btn-lg">Confirmar</button>
                      <button data-dismiss="modal" aria-hidden="true" class="btn btn-success btn-lg">Descartar </button>

                      </div>
                  </div>
              </div>
          </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

</aside><!-- /.right-side -->

<script src="<?php echo base_url();?>assets/internals/js/donanteinfo.js" type="text/javascript" charset="utf-8" async defer></script>

