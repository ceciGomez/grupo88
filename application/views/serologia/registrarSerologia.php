<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Datos de Serologia
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="<?php echo base_url();?>index.php/page/view/buscaconsentimiento">Consentimiento</a></li>
         <li>
            <a href="<?php echo base_url();?>index.php/page/view/serologia">Serología </a>
         </li>
         <li class="active">Registrar Serología </li>
      </ol>
   </section>  <!-- fin section header -->
   <section class="content" id="cont">
      <div class="row">
      <form id="formularioSerologia" role="form" method="POST" data-toggle="validator"
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
         <div class="col-xs-3">
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
               <div class='input-group  date' id='datetimepicker1'>
                     <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                     </div>
                     <input type="text" class="form-control" id="fex"
                        data-inputmask="'alias': 'dd/mm/yyyy'" data-mask name="fechaex" placeholder="dd/mm/aaaa" 
                        required />
               </div>
            </div>
         </div>
         <div class="col-xs-2">
            <!-- text input -->
               
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
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion1" id="opcion1" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion2" id="opcion2" 
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion2" id="opcion2" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion3" id="opcion3" 
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion3" id="opcion3" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion4" id="opcion4" 
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion4" id="opcion4" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion5" id="opcion5" 
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion5" id="opcion5" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion6" id="opcion6" 
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion6" id="opcion6" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion7" id="opcion7" 
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion7" id="opcion7" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion8" id="opcion8" 
                        value="Si" >Si
                     </label>
                     <label>
                     <input type="radio" name="opcion8" id="opcion8" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion9" id="opcion9" 
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion9" id="opcion9" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion10" id="opcion10" 
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion10" id="opcion10" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion11" id="opcion11" 
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion11" id="opcion11" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion12" id="opcion12" 
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion12" id="opcion12" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion13" id="opcion13" 
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion13" id="opcion13" 
                        value="No" checked>No
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
                     <input type="radio" name="opcion14" id="opcion14" 
                        value="Si">Si
                     </label>
                     <label>
                     <input type="radio" name="opcion14" id="opcion14" 
                        value="No" checked>No
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
                  <textarea rows="2" cols="90" name="txtsugerencias" placeholder="Sus observaciones aquí..."></textarea><br>
                 
               </form><br>
            </div>

         </div>
         <div class="row-lg-12 pull-right content">
            
            <div class="form-group ">
                <a class="btn btn-primary btn-md" href="<?php echo base_url();?>index.php/cserologia/view/verSerologias">Volver</a>
               <button type="button" data-target="#compose-modal"  data-toggle="modal" aria-hidden="true" 
                  id="guardarTodo" class="btn btn-success btn-md">Guardar Resultados</button>
            </div>
         </div>
      </div>

       </form>
   </section>
   <!-- /.content --> 
  

<script src="<?php echo base_url();?>assets/internals/js/serologiainfo.js" type="text/javascript" charset="utf-8" async defer></script>