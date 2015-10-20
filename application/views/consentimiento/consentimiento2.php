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
    
      <div class="container">
      <!--  otra prueba de madre donante-->
      
      <label>Datos de madre donante y su bebe asociado</label>
      <!-- /. madre donante y bebé asociado-->

      <div class="container row">
         <div class="col-lg-3">
            <fieldset disabled>
               <div class="form-group">
                  <label for="disabledTextInput">Nombre de Madre Donante</label>
                  <input name="nombreDonante" type="text"  id="campoDeshabilitado" class="form-control" 
                     value="<?php echo $unaDonanteConsentimiento[0]->nombre;
                                    echo " ";
                                 echo $unaDonanteConsentimiento[0]->apellido;
                     ?>">
               </div>
            </fieldset>
               <div class="col-lg-6" style='display:none;'>
             <div class="form-group">
             <label for="nroDonante">Nro de donante</label>
             
               <input type="text" class="form-control" id="nroDonante" name="nroDonante"
               value="<?php echo $unaDonanteConsentimiento[0]->nroDonante ;?>">
             </div>
        </div>
        <div class="col-lg-6" style='display:none;'>
             <div class="form-group">
             <label>Nro de bebe asociado</label>
             
               <input type="text" class="form-control" id="nroBebeAsociado" name="nroBebeAsociado"
               value="<?php echo $unBebe[0]->idBebeAsociado ;?>">
             </div>
        </div>
         </div>
         <div class="col-lg-3">
            <fieldset disabled>
               <div class="form-group">
                  <label for="disabledTextInput">Nombre de Bebé</label>
                  <input name="nombreBebe" type="text"  id="campoDeshabilitado" class="form-control" 
                     value="<?php echo $unBebe[0]->nombreBebeAsociado;?>">
                     
               </div>
            </fieldset>
         </div>
      </div> 
      <!-- periodo de donacion -->
      
      <label>Período de donación</label>
      <div class="container row">
         <div class="container">
            <div class="col-xs-2">
               <!-- text input -->
               <div class="form-group">
                  <label>Fecha desde:</label>
                  <div class="form-group">
                            <div class='input-group date' id='datetimepicker1'>
                                 <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                 </span>
                                 <input type="text" class="form-control" id="fnac" data-inputmask="'alias': 'dd/mm/yyyy'" 
                                 data-mask name="desde" placeholder="dd/mm/aaaa" required/>

                            </div>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>
 
            <div class="col-xs-2">
              
               <div class="form-group">
                  <label>Fecha Hasta</label>
                  <div class="input-group" class="hidden">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" class="form-control" id="fechaHasta" disabled
                        data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="hasta"placeholder="dd/mm/aaaa"/>
                  </div>
                  <!-- /.input group -->
               </div>
               <!-- /.form group -->
            </div>
         </div>

      
         <!-- /. pedido de serologia -->
         
      <!-- direccion -->
      <label>Domicilio de Recolección</label>
      <div class="container row" >
         <div class="col-lg-3 ">
            <label>Calle</label>
            <input name="calle" id="calle" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Número</label>
            <input name="numero" id="numero" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-2">
            <label>Barrio</label>
            <input name="barrio" id="barrio" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Piso</label>
            <input name="piso" id="piso" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Dpto.</label>
            <input name="dpto" id="dpto" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Mz.</label>
            <input name="mz" id="mz" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Pc.</label>
            <input name="pc" id="pc" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-3">
            <label>Observación</label>
            <input name="observacion" id="observacion" type="text" class="form-control" placeholder="">
         </div>
      </div>
      <br>
      
      <!-- /. permiso de foto y zona-->
      <!-- Zona -->
       <label>Dia de recoleccion </label>
      <div class="container row">
          <div class="container">
        
         
            <div class="col-xs-3">
               <!-- text input -->
               <div class="form-group">
                  <label>Zona</label>
                  <div>
                     <select name="zona" id="zona" value="$valor" class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                     </select>
                  </div>
               </div>
            </div>
             <!-- dia de visita-->     
         <div class="col-lg-2">
            <label>Día de Visita</label>
            <input name="diaVisita" id="diaVisita" type="text" class="form-control" placeholder="Lunes">
         </div>
         
 </div> </div>
         <div class="container row">
             <div class="col-xs-3">
         <label>¿Permite publicar fotos?</label>
        
            <div class="radio">
               <label>
               <input type="radio" name="permiteFoto" id="permiteFoto" value="1" checked>
               Si
               </label>
               <label>
               <input type="radio" name="permiteFoto" id="permiteFoto" value="0"checked>
               No
               </label>
            </div>
         </div>
          <div class="col-xs-3">
         <label>Pedido de Serología</label>
        
            <div class="radio">
               <label>
               <input type="radio" name="pedidoSerologia" id="pedidoSerologia" value="1" checked>
               Si
               </label>
               <label>
               <input type="radio" name="pedidoSerologia" id="pedidoSerologia" value="0">
               No
               </label>
            </div>
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
                     <label>Fecha desde:<span></span></label>
                  </div>
                  <div id="consentimientoinfohasta">
                     <label>Fecha Hasta:<span></span></label>
                  </div>
                  <div id="consentimientoinfodia">
                     <label>Dia de Visita:<span></span></label>
                  </div>
                  <div id="consentimientoinfopedido">
                     <label>Pedido de serologia:<span></span></label>
                  </div>
                  <div id="consentimientoinfocalle">
                     <label>Calle:<span></span></label>
                  </div>
                  <div id="consentimientoinfoaltura">
                     <label>Altura:<span></span></label>
                  </div>
                  <div id="consentimientoinfobarrio">
                     <label>Barrio:<span></span></label>
                  </div>
                  <div id="consentimientoinfopiso">
                     <label>Piso:<span></span></label>
                  </div>
                  <div id="consentimientoinfodpto">
                     <label>Dpto:<span></span></label>
                  </div>
                  <div id="consentimientoinfomz">
                     <label>Mz:<span></span></label>
                  </div>
                  <div id="consentimientoinfopc">
                     <label>Pc:<span></span></label>
                  </div>
                  <div id="consentimientoinfozona">
                     <label>Zona:<span></span></label>
                  </div>
                  <div id="consentimientoinfopermite">
                     <label>Permite Foto:<span></span></label>
                  </div>
               </div>
               <div style="margin:auto;">
                  <button id="guardarTodo" data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true"
                     class="btn btn-success btn-md">Confirmar
                  </button>
                  <button data-dismiss="modal" aria-hidden="true" 
                     class="btn btn-danger btn-md">Descartar 
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
<script type="text/javascript">
         $(function () {
             $('#datetimepicker1').datetimepicker({ locale: 'es', format: 'DD/MM/YYYY' });
         });
      </script>​