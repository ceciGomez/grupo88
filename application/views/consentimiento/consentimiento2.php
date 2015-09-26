<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Registrar nuevo Consentimiento
      </h1>
   </section>
   <!-- /. fecha, num consentimiento y dni-->
   <section class="content" id="cont">
     <div class="row">
      <form id="formularioConsentimiento" role="form" method="POST" action="<?php echo base_url()?>index.php/consentimiento/altaConsentimiento" >  
        <!-- <div class="col-lg-3">
            <label>Ingrese DNI de madre donante</label>
            <div class="input-group">
               <input id="buscaDni" type="text" name="dniDonante" class="form-control" placeholder="12345678">
               <span class="input-group-btn">
               <button  data-target="#compose-modal" data-toggle="modal" aria-hidden="true" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
               </span>
            </div> -->
            <!-- /input-group --><!--
         </div> -->
         <!-- /.col-lg-3 -->
         <!-- COMPOSE MESSAGE MODAL -->
         <!--
         <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                     <h4 class="modal-title"><i class="fa fa-envelope-o"></i> ¡¡No existe madre donante!! </h4>
                  </div>
                  <div style="width:500px;margin-left:auto;margin-right:auto;">
                     <div class="form-group modal-header">
                        <label>
                           <h1>El DNI ingresado es inexistente</h1>
                        </label>
                        <br><br>
                        <label>¿Desea registrar madre donante?</label>
                     </div>
                  <div style="margin:auto;">
                    <button id="" data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true"
                     class="btn btn-success btn-lg">Confirmar
                    </button>
                    <button data-dismiss="modal" aria-hidden="true" 
                     class="btn btn-success btn-lg">Descartar 
                    </button>
                 </div>
               </div>
            </div> -->
               <!-- /.modal-content --><!--
            </div> -->
            <!-- /.modal-dialog --><!--
         </div> -->
         <!-- /.modal --><!--
      </div>-->
      <!--/1-->
      <div class="container">
      <!--  otra prueba de madre donante-->
      <div >
            
               <a href="<?php echo base_url();?>index.php/cdonante/view/registrarDonante" class="btn btn-info" role="button">
                  Registrar Donante
               </a>

               
      </div>
        
      <!-- /. madre donante y bebé asociado-->

      <br>
      <div class="row">
         <div class="col-lg-3">
            <fieldset disabled>
               <div class="form-group">
                  <label for="disabledTextInput">Nombre de Madre Donante</label>
                  <input name="nombreDonante" type="text"  id="campoDeshabilitado" class="form-control" 
                     placeholder="Loren Ipsum">
               </div>
            </fieldset>
         </div>
         <div class="col-lg-3">
            <fieldset disabled>
               <div class="form-group">
                  <label for="disabledTextInput">Nombre de Bebé</label>
                  <input name="nombreBebe" type="text"  id="campoDeshabilitado" class="form-control" 
                     placeholder="bebecito">
               </div>
            </fieldset>
         </div>
      </div>
      <!-- periodo de donacion -->
      <br>
      <label>Período de donación</label>
      <div class="row">
            <div class="col-xs-2">
               <!-- text input -->
               <div class="form-group">
                  <label>Fecha desde</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" class="form-control" id="fechaDesde"
                        data-inputmask="'alias': 'dd/mm/yyyy" data-mask name="IfechaDesde"placeholder="dd/mm/aaaa"/>
                  </div>
                  <!-- /.input group -->
               </div>
            </div>
 
            <div class="col-xs-2">
              
               <div class="form-group">
                  <label>Fecha desde</label>
                  <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" class="form-control" id="fechaHasta"
                        data-inputmask="'alias': 'dd/mm/yyyy" data-mask name="IfechaHasta"placeholder="dd/mm/aaaa"/>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>

       <!-- dia de visita-->     
         <div class="col-lg-2">
            <label>Día de Visita</label>
            <input name="IdiaVisita" id="diaVisita" type="text" class="form-control" placeholder="Lunes">
         </div>
         <!-- /. pedido de serologia -->
         <label>Pedido de Serología</label>
         <div>
            <div class="radio">
               <label>
               <input type="radio" name="IpedidoSerologia" id="pedidoSerologia" value="1" checked>
               Si
               </label>
               <label>
               <input type="radio" name="IpedidoSerologia" id="pedidoSerologia" value="0">
               No
               </label>
            </div>
         </div>
      </div>
      <!-- direccion -->
      <label>Domicilio de Recolección</label>
      <div class="row" >
         <div class="col-lg-3 ">
            <label>Calle</label>
            <input name="Icalle" id="calle" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Número</label>
            <input name="Inumero" id="numero" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-3">
            <label>Barrio</label>
            <input name="Ibarrio" id="barrio" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Piso</label>
            <input name="Ipiso" id="piso" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Dpto.</label>
            <input name="Idpto" id="dpto" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Mz.</label>
            <input name="Imz" id="mz" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Pc.</label>
            <input name="Ipc" id="pc" type="text" class="form-control" placeholder="">
         </div>
      </div>
      <br>
      <!-- /. permiso de foto y zona-->
      <!-- Zona -->
      <div>
         <div class="row">
            <div class="col-xs-3">
               <!-- text input -->
               <div class="form-group">
                  <label>Zona</label>
                  <div>
                     <select name="Izona" id="zona" value="$valor" class="form-control">
                        <option>Zona 1</option>
                        <option>Zona 2</option>
                        <option>Zona 3</option>
                        <option>Zona 4</option>
                     </select>
                  </div>
               </div>
            </div>
         </div>
         <label>¿Permite publicar fotos?</label>
         <div>
            <div class="radio">
               <label>
               <input type="radio" name="IpermiteFoto" id="permiteFoto" value="1" checked>
               Si
               </label>
               <label>
               <input type="radio" name="IpermiteFoto" id="permiteFoto" value="0"checked>
               No
               </label>
            </div>
         </div>
      </div>
      <!-- boton confirmar -->     
      <div class="pull-left">
            <div class="form-group">
               <button data-target="#compose-modal"  data-toggle="modal" aria-hidden="true" 
                  id="guardaConsentimiento" class="btn btn-success btn-md">Guardar</button>
               <button class="btn btn-danger btn-md">Cancelar</button>
               
            </div>
         </div>
      </div>
      </div>
      <!-- right column -->
      </div>   <!-- /.row -->
   </div>
   </section>
   <!-- /.content -->
   <!-- COMPOSE MESSAGE MODAL -->
   <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title"><i class="fa fa-check"></i> Detalle de Consentimiento </h4>
            </div>
            <div>
               <label> Por favor revise los datos ingresados</label>
            </div>
            <div style="width:500px;margin-left:auto;margin-right:auto;">
               <div class="form-group modal-header">
                  <div id="consentimientoinfodesde">
                     <label>Fecha desde:</label>
                  </div>
                  <div id="consentimientoinfohasta">
                     <label>Fecha hasta: </label>
                  </div>
                  <div id="consentimientoinfodia">
                     <label>Dia de Visita: </label>
                  </div>
                  <div id="consentimientoinfopedido">
                     <label></label>
                  </div>
                  <div id="consentimientoinfocalle">
                     <label></label>
                  </div>
                  <div id="consentimientoinfoaltura">
                     <label></label>
                  </div>
                  <div id="consentimientoinfobarrio">
                     <label></label>
                  </div>
                  <div id="consentimientoinfopiso">
                     <label></label>
                  </div>
                  <div id="consentimientoinfodpto">
                     <label></label>
                  </div>
                  <div id="consentimientoinfomz">
                     <label></label>
                  </div>
                  <div id="consentimientoinfopc">
                     <label></label>
                  </div>
                  <div id="consentimientoinfozona">
                     <label></label>
                  </div>
                  <div id="consentimientoinfopermite">
                     <label></label>
                  </div>
               </div>
               <div style="margin:auto;">
                  <button id="guardarTodo" data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true"
                     class="btn btn-success btn-lg">Confirmar
                  </button>
                  <button data-dismiss="modal" aria-hidden="true" 
                     class="btn btn-danger btn-lg">Descartar 
                  </button>
               </div>
            </div>
         </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
   </div><!-- /.modal -->
</aside>
<!-- /.right-side -->

<script src="<?php echo base_url();?>assets/internals/js/consentimientoinfo.js" type="text/javascript" charset="utf-8" async defer></script>