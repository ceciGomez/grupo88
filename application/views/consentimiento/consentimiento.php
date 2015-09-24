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
         <!--1-->
         <div class="col-lg-3">
            <label>Ingrese DNI de madre donante</label>
            <div class="input-group">
               <input id="buscaDni" type="text" name="dniDonante" class="form-control" placeholder="12345678">
               <span class="input-group-btn">
               <button  data-target="#compose-modal" data-toggle="modal" aria-hidden="true" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
               </span>
            </div>
            <!-- /input-group -->
         </div>
         <!-- /.col-lg-3 -->
         <!-- COMPOSE MESSAGE MODAL -->
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
                     <div style="margin:center;">
                        <a href="<?php echo base_url();?>index.php/cdonante/view/registrardonante" 
                           class="btn btn-success btn-md" role="button">Si</a>
                        <a href="<?php echo base_url();?>index.php/page/view" 
                           class="btn btn-danger btn-md" role="button">No</a>  
                     </div>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
      </div>
      <!--/1-->
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
         <div class="col-lg-2">
            <label>desde</label>
            <input name="IfechaDesde" type="text" class="form-control" placeholder="dd/mm/aaaa">
         </div>
         <div class="col-lg-2">
            <label>hasta</label>
            <input name="IfechaHasta" type="text" class="form-control" placeholder="dd/mm/aaaa">
         </div>
         <div class="col-lg-2">
            <label>Día de Visita</label>
            <input name="IdiaVisita" type="text" class="form-control" placeholder="Lunes">
         </div>
         <!-- /. pedido de serologia -->
         <label>Pedido de Serología</label>
         <div>
            <div class="radio">
               <label>
               <input type="radio" name="IpedidoSerologia" id="opciones_1" value="1" checked>
               Si
               </label>
               <label>
               <input type="radio" name="IpedidoSerologia" id="opciones_2" value="0">
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
            <input name="Icalle" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Número</label>
            <input name="Inumero" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-3">
            <label>Barrio</label>
            <input name="Ibarrio" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Piso</label>
            <input name="Ipiso" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Dpto.</label>
            <input name="Idpto" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Mz.</label>
            <input name="Imz" type="text" class="form-control" placeholder="">
         </div>
         <div class="col-lg-1">
            <label>Pc.</label>
            <input name="Ipc" type="text" class="form-control" placeholder="">
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
                     <select name="Izona" value="$valor" class="form-control">
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
               <input type="radio" name="IpermiteFoto" id="opciones_1" value="1" checked>
               Si
               </label>
               <label>
               <input type="radio" name="IpermiteFoto" id="opciones_2" value="0"checked>
               No
               </label>
            </div>
         </div>
      </div>
      <!-- boton confirmar -->     
      <div class="btn-group" >
         <a href="<?php echo base_url();?>index.php/consentimiento/view/consentimiento" 
            class="btn btn-success btn-md" role="button">Confirmar</a>
      </div>
      <div class="btn-group" >
         <a href="<?php echo base_url();?>index.php/page/view" 
            class="btn btn-danger btn-md" role="button">Cancelar</a>
      </div>
      </div>
   </section>
</aside>
<!-- /.right-side -->
