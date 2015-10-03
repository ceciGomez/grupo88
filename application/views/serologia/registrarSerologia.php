<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Datos de Serologia
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-dashboard"></i> Home</a></li>
         <li><a href="<?php echo base_url();?>index.php/page/view/buscaconsentimiento">Consentimiento</a></li>
         <li>
            <a href="<?php echo base_url();?>index.php/page/view/serologia">Serología </a>
         </li>
         <li class="active">Registrar Serología </li>
      </ol>
   </section>
   <section class="content" id="cont">
      <div class="row">
      <form id="formularioSerologia" role="form" method="POST" 
      action="<?php echo base_url()?>index.php/cserologia/altaSerologia" >
         <div class="form-group container">
         <div class="col-xs-2">
            <!-- text input -->
            <div class="form-group">
               <label>Nro de Consentimiento</label>
               <input type="text" name="nroCons" id="nroCons" class="form-control" 
               value="<?php echo $unConsentimiento[0]->nroConsentimiento; ?>" disabled />
            </div>
            <div class="form-group" style='display:none;'>
               <label>Nro de Consentimiento</label>
               <input type="text" name="nroConsentimiento" id="nroConsentimiento" class="form-control" 
               value="<?php echo $unConsentimiento[0]->nroConsentimiento; ?>"  />
            </div>
         </div>
         <div class="col-xs-2">
            <!-- text input -->
            <div class="form-group">
               <label>DNI de Donante</label>
               <input type="text" id="nro" name="nro" class="form-control" 
               value="<?php echo $unaDonante[0]->dniDonante; ?>"disabled />
            </div>
         </div>
         <div class="col-xs-4">
            <!-- text input -->
            <div class="form-group">
               <label>Nombre y Apellido de Donante</label>
               <input type="text" id="nro" class="form-control" 
               value="<?php echo $unaDonante[0]->nombre;
                            echo ", " ; 
                            echo $unaDonante[0]->apellido?>" disabled name="nya"/>
            </div>
         </div>
         <div class="col-lg-6" style='display:none;'>
             <div class="form-group">
             <label for="nombre">Nro de donante</label>
             <input type="text" class="form-control" id="nombre" name="nombre"
               value="<?php echo $unaDonante[0]->nombre;?>">
             </div>
             <div class="form-group">
             <label for="apellido">Nro de donante</label>
             <input type="text" class="form-control" id="apellido" name="apellido"
               value="<?php echo $unaDonante[0]->apellido;?>">
             </div>
        </div>
         <div class="col-xs-2">
            <!-- text input -->
            <div class="form-group">
               <label>Fecha de Extracción</label>
               <div class="input-group">
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" class="form-control" id="fex"
                        data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="fecha" placeholder="dd/mm/aaaa" 
                        required="required" title="This field should not be left blank."/>
                  </div>
               </div>
         </div>
         </div>
         
      <div class="container-fluid" id="cont">
      <h4>Registrar Resultados</h4>
      <div  class="container-fluid panel panel-primary"><br>
         <div class="row">
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3  ">
               <label>VDRL</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion1" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion1" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 ">
               <label>Chagas</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion2" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion2" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 ">
               <label>HVC</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion3" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion3" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 ">
               <label>HIV</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion4" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion4" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>HVB</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion5" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion5" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>HVB Core</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion6" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion6" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>HTLV I - II</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion7" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion7" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>Medicación</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion8" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion8" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>Fuma</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion9" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion9" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>Alcohol</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion10" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion10" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>Zona Rural</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion11" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion11" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>Vacunas</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion12" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion12" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-6 " >
               <label>Usa Drogas</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion13" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion13" id="opciones_2" 
                        value="No">No
                     </label>
                  </div>
                     <label>Dosis <input  name="dosis" id="cantidaddosis"></label>
                     <label>Droga <input  name="droga" id="cantidaddroga"></label>
                  
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-6 " >
               <label>Toxoplasmosis</label>
               <div>
                  <div class="radio">
                     <label>
                     <input type="radio" name="opcion14" id="opciones_1" 
                        value="Si" checked>Si
                     </label>
                     <label>
                     <input type="radio" name="opcion14" id="opciones_2" 
                        value="No">No
                     </label>
                     </div>
                     <label>Ig M= <input name="igm"id="cantidadigm"></label>
                     <label>Ig G= <input name="igg" id="cantidadigg"></label>
                  </div>
               </div>
            </div>
            <!-- -->
            <div class="col-xs-6">
               <label>Observaciones</label>
               <form name="sugerencias" method="POST" target="resultado">
                  <textarea rows="2" cols="90" name="txtsugerencias">Sus observaciones aquí...</textarea><br>
                  <input type="hidden" name="identificador" >
               </form><br>
            </div>
         </div>
         <div class="col-xs-3 pull-right content">
            
            <div class="form-group ">
               <button type="button" data-target="#compose-modal"  data-toggle="modal" aria-hidden="true" 
                  id="guardaSerologia" class="btn btn-success btn-lg">Guardar Resultados</button>
            </div>
         </div>
      </div>

       </form>
   </section>
   <!-- /.content --> 
   <!-- COMPOSE MESSAGE MODAL -->
   <div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h4 class="modal-title"><i class="fa fa-check"></i> Detalle de Serologia </h4>
            </div>
            <div class="content">
               <label> Va a guardar la siguiente Donante, revise los datos ingresados</label>
            </div>
            <div style="width:500px;margin-left:auto;margin-right:auto;" class="container">
               <div class="form-group modal-header">
                  <div id="Iconsentimientonro">
                     <label>Nro Consentimiento: <span></span></label>
                  </div>
                  <div id="Iconsentimientonombre">
                     <label>Nombre: <span></span></label>
                  </div>
                  <div id="Iconsentimientoapellido">
                     <label>Apellido: <span></span></label>
                  </div>
               </div>
               <div id="btnAction">
                  <button id="guardarTodo" data-dismiss="modal"  data-toggle="modal" data-target="#mssg-modal" aria-hidden="true"
                     class="btn btn-success btn-lg">Confirmar
                  </button>
                  <button data-dismiss="modal" aria-hidden="true" 
                     class="btn btn-success btn-lg">Descartar 
                  </button>
               </div>
               <div id="btnCanc">
                  <div style="margin:auto;">
                     <div id="camposRequerido">
                        
                     </div>
                     <button data-dismiss="modal" aria-hidden="true" 
                        class="btn btn-succes btn-lg">Volver
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

<script>
$(document).ready(function(){
   /**
   Cuando se va a validar varios campos cambiar el if por configuracion de json
   Tienen que ir los ID de todos los campos
   var camposRequeridos = {
      "fex":true,
      "cantidadigm":false,
      "cantidadigg": false,
      "apellido":false,
      "nombre":false,
      "nro": false,
      "cantidaddosis":false,
      "cantidaddroga":false,
   };

   y cambiar el primer por:

   if(campoRequeridos[elements[i].id]){
      if (elements[i].value=="") {
         $("#camposRequerido").append("<p style='color:red'>"+elements[i].name+" es requerido</p>");
         $("#btnCanc").show();
         $("#btnAction").hide();
      } else {
         $("#btnCanc").hide();
         $("#btnAction").show();
      }
   }

   */

   var camposRequeridos = {
      "fex":{
         "mostrar":true,
         "mensaje":"Fecha de Extracción"
      }
   };

   $("#btnCanc").hide();
   $("#btnAction").hide();
   $("#guardaSerologia").on("click", function(e){
       var elements = $("#formularioSerologia").find("input");
       for (var i = 0; i < elements.length; i++) {
         console.log(camposRequeridos[elements[i].id]);
           if(elements[i].type = "text" && camposRequeridos[elements[i].id]  && camposRequeridos[elements[i].id].mostrar){
               if (elements[i].value=="") {
                  $("#camposRequerido").append("<p style='color:red'>"+camposRequeridos[elements[i].id].mensaje+" es requerido</p>");
                  $("#btnCanc").show();
                  $("#btnAction").hide();
               } else {
                  $("#btnCanc").hide();
                  $("#btnAction").show();
               }
           } 
       }
   });
});
</script>
<script src="<?php echo base_url();?>assets/internals/js/serologiainfo.js" type="text/javascript" charset="utf-8" async defer></script>

