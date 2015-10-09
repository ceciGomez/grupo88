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
      <form id="formularioSerologia" role="form" method="POST" >
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

         <!-- campos ocultos de formuladrio -->
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
         <!--FIN DE campos ocultos de formuladrio -->

         <div class="col-xs-2">
            <!-- text input -->
            <div class="form-group">
               <label>Fecha de Extracción</label>
               <input type="text" class="form-control" id="fex"
                        value=" <?php echo $unaSerologia[0]->fechaSerologia; ?>" disabled />
                  
            </div>
         </div>
         <div class="col-xs-2">
            <!-- text input -->
            <div class="form-group">
               <label>Fecha de Carga </label>
               <input type="text" class="form-control" id="fex"
                        value=" <?php echo $unaSerologia[0]->fechaCarga; ?>" disabled />
                  
               </div>
         </div>
         </div>
         
      <div class="container-fluid" id="cont">
        <!--funcion para el cambio de color del estado de serologia --> 
            <?php if ($unaSerologia[0]->estadoSerologia == 'Positivo') {
                     $colorResultado= 'green';
            } elseif ($unaSerologia[0]->estadoSerologia == 'Negativo') {
               $colorResultado= 'red';
            } else {
               $colorResultado= 'orange';
            }
            ?>
         <!-- FIN funcion para el cambio de color del estado de serologia --> 
      <label>Estado:</label> <input style="color:<?php echo $colorResultado ?>; text-align:center;" value="<?php echo $unaSerologia[0]->estadoSerologia;?>" disabled />
      <h4>Resultados</h4>
      <div  class="container-fluid panel panel-primary"><br>
         <div class="row">
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3  ">
               <label>VDRL</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->vdrl; ?>" disabled/>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 ">
               <label>Chagas</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->chagas; ?>" disabled/>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 ">
               <label>HVC</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->hvc; ?>" disabled/>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 ">
               <label>HIV</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->hiv; ?>" disabled/>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>HVB</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->hvb; ?>" disabled/>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>HVB Core</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->hvbCore; ?>" disabled/>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>HTLV I - II</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->htlvl_ll; ?>" disabled/>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>Medicación</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->medicacion; ?>" disabled/>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>Fuma</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->fuma; ?>" disabled/>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>Alcohol</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->alcohol; ?>" disabled/>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>Zona Rural</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->zonaRural; ?>" disabled/>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-3 " >
               <label>Vacunas</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->vacunas; ?>" disabled/>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-6 " >
               <label>Usa Drogas</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->usaDrogas; ?>" disabled/>
               <div>
                     <br>
                     <label>Dosis <input value="<?php echo $unaSerologia[0]->dosis ?>" disabled></label>
                     <label>Droga <input value="<?php echo $unaSerologia[0]->droga ?>" disabled></label>
                  
               </div>
            </div>
            <!-- -->
            <!-- Estudio  - Resultado -->
            <div class="col-xs-6 " >
               <label>Toxoplasmosis</label>
               <input type="text" class="form-control" value="<?php echo $unaSerologia[0]->toxoplasmosis; ?>" disabled/>
               <div>
                  <br>
                  <label>Ig M= <input value="<?php echo $unaSerologia[0]->igM ?>" disabled></label>
                  <label>Ig G= <input value="<?php echo $unaSerologia[0]->igG ?>" disabled></label>
               </div>
            </div>
            </div>
            <!-- -->
            <div class="col-xs-6">
               <label>Observaciones</label>
               <textarea rows="2" cols="90" disabled><?php echo $unaSerologia[0]->observaciones; ?></textarea>
               <br><br>
            </div>
            <br>
         </div>
         <!--
         <div class="col-xs-3 pull-right content">
            
            <div class="form-group ">
               <button type="button" data-target="#compose-modal"  data-toggle="modal" aria-hidden="true" 
                  id="guardarTodo" class="btn btn-success btn-lg">Guardar Resultados</button>
            </div>
         </div>
         -->
      </div>

       </form>
   </section>
   <!-- /.content --> 
  

 <!-- <script src="<?php echo base_url();?>assets/internals/js/serologiainfo.js" type="text/javascript" charset="utf-8" async defer></script>
 -->