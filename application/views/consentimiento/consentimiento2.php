
<!-- Right side column. Contains the navbar and content of the page -->
<script>
var urlbase="<?php echo base_url();?>";
</script>
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Registrar nuevo Consentimiento
      </h1>
   </section>
   
   <!-- /. fecha, num consentimiento y dni-->
   <section class="content" id="cont">
     <div class="form-group panel panel-default col-md-12" style="margin:auto">
      <form data-toggle="validator" id="formularioConsentimiento" role="form" method="POST" action="<?php echo base_url()?>index.php/consentimiento/altaConsentimiento" >  
         <input class="hidden" name="condicion" id="condicion" value="<?php echo $unaCondicion;?>">
         <div class="col-md-12">
               <div class="row-md-12">
               <label> Datos de madre donante y su bebe asociado</label>
               </div>
            <!--  otra prueba de madre donante-->
               <!-- /. madre donante y bebé asociado-->
                  <div class="col-md-3">
                     <fieldset disabled>
                        <div class="form-group">
                           <label for="disabledTextInput">Nombre y Apellido de Madre Donante</label>
                           <input name="nombreDonante" type="text"  id="campoDeshabilitado" class="form-control" 
                              value="<?php echo $unaDonanteConsentimiento[0]->nombre;echo " "; echo $unaDonanteConsentimiento[0]->apellido;?>">
                        </div>
                     </fieldset>
                     <div  style='display:none;'>
                      <div class="form-group"><!-- Nro donante Nro bebe asociado-->
                        <input type="text" class="form-control" id="nroDonante" name="nroDonante" value="<?php echo $unaDonanteConsentimiento[0]->nroDonante ;?>">
                        <input type="text" class="form-control" id="idBebeAsociado" name="idBebeAsociado" value="<?php echo $unBebe[0]->idBebeAsociado;?>">
                      </div>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <fieldset disabled>
                        <div class="form-group">
                           <label for="disabledTextInput">Nombre y Apellido del Bebé Asociado</label>
                           <input name="nombreBebe" type="text"  id="campoDeshabilitado" class="form-control" 
                              value="<?php echo $unBebe[0]->nombreBebeAsociado;echo " "; echo $unBebe[0]->apellidoBebeAsociado;?>">
                        </div>
                     </fieldset>
                  </div>
               <!-- periodo de donacion -->
               <label> Período de donación</label>
                  <div class="container">
                     <div class="col-md-2">
                        <div class="form-group">
                           <label>Fecha desde:</label>
                           <div class="form-group">
                               <div class='input-group date' id='datetimepicker2'>
                                 <span class="input-group-addon">
                                 <span class="fa fa-calendar"></span>
                                 </span>
                                 <input type="text" class="form-control" id="fdesde" data-inputmask="'alias': 'dd/mm/yyyy'" 
                                 data-mask name="desde" placeholder="dd/mm/aaaa" required/>
                               </div>
                               <span class="help-block with-errors">*Campo Requerido</span>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-2">
                        <div class="form-group">
                           <label>Fecha Hasta</label>
                           <div class="input-group" class="hidden">
                              <span class="input-group-addon">
                              <span class="fa fa-calendar"></span>
                              </span>
                              <input type="text" class="form-control" id="fHasta" disabled data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="hasta"placeholder="dd/mm/aaaa"/>
                           </div>
                        </div>
                     </div>
                  </div>
         </div>
         <!-- /. pedido de serologia -->
         <div class="col-md-12"> 
         <div class="row-md-12">
         <label>Domicilio de Recolección</label>
         </div> 
         <!-- direccion -->
            <div class="col-md-3 ">
               <div class="form-group">
                  <label>Calle</label>
                  <input name="calle" id="calle" type="text" class="form-control" placeholder="" required/>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
               </div>
            </div>
            <div class="col-md-1">
               <label>Número</label>
               <input name="numero" id="numero" type="text" min="0" class="form-control" onkeypress = "return validarNum(event)" placeholder="">
            </div>
            <div class="col-md-2">
               <div class="form-group">
                  <label>Barrio</label required>
                  <input name="barrio" id="barrio" type="text" class="form-control" placeholder="" required/>
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  <span class="help-block with-errors">* Campo Requerido</span>
               </div>
            </div>
            <div class="col-md-1">
               <label>Piso</label>
               <input name="piso" id="piso" type="number" min="0" class="form-control" placeholder="">
            </div>
            <div class="col-md-1">
               <label>Dpto.</label>
               <input name="dpto" id="dpto"  min="0" type="number" onkeypress = "return validarNum(event)" class="form-control" placeholder="">
            </div>
            <div class="col-md-1">
               <label>Mz.</label>
               <input name="mz" id="mz"  min="0" type="number" onkeypress = "return validarNum(event)" class="form-control" placeholder="">
            </div>
            <div class="col-md-1">
               <label>Pc.</label>
               <input name="pc" id="pc" min="0" type="number" class="form-control" placeholder="">
            </div>
         </div>
      <!-- /. permiso de foto y zona-->
         <div class="col-md-12"> 
            <div class="col-md-3">
               <label>Observación</label>
               <input name="observacion" id="observacion" type="text" class="form-control" placeholder="indicaciones de direccion">
            </div> 
            <!-- Zona -->
            <div class="col-md-3">
                  <div class="form-group">
                     <label>Zona</label>
                     <div>
                        <select name="zona" id="zona" value="$valor" class="form-control">
                        <?php foreach ($todasLasZonas as $key):?>
                           <option value="<?php echo  $key->idZona;?>"><?php echo $key->nombreZona; ?>
                           </option>
                        <?php endforeach ?>
                        </select>
                     </div>
                  </div>
            </div>
            <!-- dia de visita-->  
            <div class="col-md-3">   
               <label>Día de Visita</label>
               <input name="diaVisita" id="diaVisita" type="text" class="form-control" placeholder="Lunes">
            </div>
            <div class="col-md-3">
               <label>Permite Publicar fotos?</label>
               <div class="radio" style="line-height:4">
                  <label style="text-align:center">
                  <input type="radio" name="permiteFoto" id="permiteFoto" value="1" checked>
                  Si
                  </label>
                  <label>
                  <input type="radio" name="permiteFoto" id="permiteFoto" value="0"checked>
                  No
                  </label>
               </div>
            </div>
         </div>      
         <div class="col-md-12">
               <div class="col-md-4">
                  <label>¿Se ha realizado la Serología?</label>
                  <div class="radio" style="line-height:4">
                     <label style="text-align:center">
                     <input type="radio" name="pedidoSerologia" id="pedidoSerologia" value="1" checked>
                     Si
                     </label>
                     <label>
                     <input type="radio" name="pedidoSerologia" id="pedidoSerologia" value="0">
                     No
                     </label>
                  </div> 
               </div>
               <div class="col-md-4" >
                     <label for="frasco" class="col-md-4 control-label">Cant de Frascos</label>
                     <div class="col-md-6">
                        <select name="frascos" id="frascos"  class="form-control">
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                           <option value="6">6</option>
                           <option value="7">7</option>
                           <option value="8">8</option>
                           <option value="9">9</option>
                           <option value="10">10</option>
                        </select>
                     </div>
               </div>
               <div class="form-group col-md-4" >
                 <label class="col-md-4">Medios de contacto</label>
                  <select class="col-md-6" name="medio" id="medio" value="$valor" class="form-control">
                     <?php foreach ($medios as $value):?>
                      <option value="<?php echo $value->idMedio;?>">
                        <?php echo $value->Medio; ?>          
                      </option>
                     <?php endforeach ?>
                  </select>
               </div>
         </div>
             <!-- boton confirmar --> 
         <div class="pull-right">
            <div class="form-group">
               <button id="cancelaTodo" class="btn btn-danger btn-md">Cancelar</button>
               <button data-target="#compose-modal"  data-toggle="modal" aria-hidden="true" 
                  id="guardaConsentimiento" class="btn btn-success btn-md">Guardar Consentimiento</button>
            </div>
         </div>
      </form>
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
            <div class="content">
               <label> VA A GUARDAR LO SIGUIENTE:</label>
            </div>
            <div style="width:500px;margin-left:auto;margin-right:auto;" class="container">
               <div class="form-group modal-header">
                  <div id="consentimientoinfofdesde">
                     <label>Fecha desde:<span></span></label>
                  </div>
                  <div id="consentimientoinfocalle">
                     <label>Calle:<span></span></label>
                  </div>
                  <div id="consentimientoinfoaltura">
                     <label>Número:<span></span></label>
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
                  <div id="consentimientoinfoobs">
                     <label>Observaciones:<span></span></label>
                  </div>
                  <div id="consentimientoinfozona">
                     <label>Zona:<span></span></label>
                  </div>
                  <div id="consentimientoinfodia">
                     <label>Dia de Visita:<span></span></label>
                  </div>
                  <div id="consentimientoinfopermite">
                     <label>Permite Foto:<span></span></label>
                  </div>
                  <div id="consentimientoinfopedido">
                     <label>Pedido de serologia:<span></span></label>
                  </div>
                  <div id="consentimientoinfofrasco">
                     <label>Cantidad de Frascos:<span></span></label>
                  </div>
                  <div id="consentimientoinfomedio">
                     <label>Medios:<span></span></label>
                  </div>
               </div>
               <div class="pull-right " >
                  <div class="from-group">
                  <button id="cancelaTodo" data-dismiss="modal" aria-hidden="true" 
                     class="btn btn-danger btn-md">Cancelar 
                  </button>
                  <button type="button" id="guardarTodo" data-dismiss="modal"  
                  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true"
                     class="btn btn-success btn-md">Confirmar
                  </button>
                  </div> 
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

<script src="<?php echo base_url();?>assets/internals/js/consentimientoinfo.js" type="text/javascript" charset="utf-8" async defer></script>
