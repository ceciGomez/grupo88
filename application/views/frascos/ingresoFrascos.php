<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>
         Registrar Ingreso de frascos al Banco
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Frascos </a></li>
         <li class="active">Ingreso de Frascos </li>
      </ol>
   </section>
   <section class="content">
<!--  MUESTRA DATOS DE HOJA DE RUTA  --> 
     <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form id="form" >
                        <?php 
                        $hojaRuta = $this->hojaruta_model->getUnaHRuta($unahr);
                         ?>
                        <div class="row">
                           <div class="col-md-4">
                              <label > N° Hoja de Ruta:</label>
                              <p class="form-control-static"><?php echo $hojaRuta[0]->idHojaDeRuta; ?></p>
                           </div>
                           <div class="col-md-4">
                              <label >Fecha de Efectivización</label>
                              <?php
                                  $fechaArray = explode('-', $hojaRuta[0]->fechaEfectivizacion);
                                  $date = new DateTime();
                                  $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                  $fechaEfec= $date->format('d/m/Y'); ?>
                              <p class="form-control-static"> <?php echo $fechaEfec; ?></p>
                           </div>
                          </div>
                     </form>
                  </div>
               </div>
            </div>
          </div>
      </div>
<!--  fin MUESTRA DATOS DE HOJA DE RUTA  --> 
<!--  BUSCADOR DE FRASCOS POR NRO DE FRASCO  --> 
   <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                   
                     <div class="container-fluid">
                     <form id="form" method="GET" action="<?=base_url()?>index.php/cfrascos/buscarDonanteFrasco" >
                        <div class="row">
                           <div>
                              <div class="input-group">
                                 <label>Ingrese número de frasco</label>
                                 <input type="hidden"  id="nroHR" name="nroHR" value="<?php echo $unahr;?>"/>
                                 <input id="nroFrasco" name="nroFrasco" type="text" />
                                 <input class="btn btn-default btn-md" type="submit" id="buscar" value="Buscar"/>
                              </div>
                           </div>
                        </div>
                     </form>
                     </div>
                     <div class="clearfix">&nbsp;</div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
<!--  fin BUSCADOR DE FRASCOS POR NRO DE FRASCO  --> 
<!--   MUESTRA DATOS DE FRASCO SOLICITADO  --> 
     <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form id="form" >
                        <div class="row">
                        <?php if($result == FALSE){?>

                           <div class="col-md-4">
                              <label >Nro de Frasco</label>
                              <p class="form-control-static"> </p>
                           </div>
                           <div class="col-md-4">
                              <label >Nombre Donante</label>
                              <p class="form-control-static"></p>
                           </div>
                           <div class="col-md-4">
                              <label >Apellido Donante</label>
                              <p class="form-control-static"></p>
                           </div>
                        <?php 
                        }else{
                        ?>
                           <div class="col-md-4">
                              <label >Nro de Frasco</label>
                              <p class="form-control-static"><?php echo $nrofrasco; ?></p>
                           </div>
                           <div class="col-md-4">
                              <label >Nombre Donante</label>
                              <p class="form-control-static"> <?php echo $result[0]->nombre; ?></p>
                           </div>
                           <div class="col-md-4">
                              <label >Apellido Donante</label>
                              <p class="form-control-static"><?php echo $result[0]->apellido; ?></p>
                           </div>
                           
                        <?php }  ?>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
          </div>
      </div>
<!--  fin MUESTRA DATOS DE FRASCO SOLICITADO  --> 
<!--   solicita ingreso de datos de frasco  --> 
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form id="ingresaFrascos" name="ingresaFrascos" method="POST" role="form" action="<?php echo base_url()?>index.php/cfrascos/guardarFrasco">
                       <input type="hidden" id="nroFrasco" name="nroFrasco" value="<?php echo $nrofrasco;?>"/>
                       <input type="hidden" id="nroHR" name="nroHR" value="<?php echo $unahr;?>"/>
                       <input type="hidden" id="sigue" name="sigue" value="1"/>
                           <?php $unFrasco = $this->frascos_model->getFrasco($nrofrasco);
                           if ($unFrasco[0]->fechaExtraccion) {?> <!-- si el frasco ya fue ingresado -->
                              <div class="row">
                            
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Fecha de Extracción</label>
                                             <div class='input-group date' id='datetimepicker2'>
                                                <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                                </span>
                                                <?php
                                                    $fechaArray = explode('-', $unFrasco[0]->fechaExtraccion);
                                                    $date = new DateTime();
                                                    $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                                    $fextraccion= $date->format('d/m/Y'); ?>
                                                <input class="form-control" id="fextraccion" name="fextraccion"
                                                  value="<?php echo $fextraccion;?>" required>
                                             </div>
                                    </div>
                                 </div>
                                
                                          <div >
                                       <div class="col-md-6">
                                          <label>Volumen (cm3)</label>
                                          <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                          <input  value="<?php echo $unFrasco[0]->volumenDeLeche;?>" type="text" onkeypress = "return validarNum(event)" minlength="2" maxlength="4" id="vol" class="form-control" placeholder="Volumen de frasco" name="vol" required/>
                                          <span class="help-block with-errors"></span>
                                          </div>
                                       </div>
                           </div>
                                 <br>
                        <?php }else{ ?>  <!-- si el frasco es cargado por primera vez -->
                        
                     <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label >Fecha de Extracción</label>
                                    <div class='input-group date' id='datetimepicker1'> 
                                       <span class="input-group-addon">
                                       <span class="fa fa-calendar"></span>
                                       </span>
                                          <input type="text" class="form-control" id="fextraccion" name="fextraccion" 
                                             data-inputmask="'alias': 'dd/mm/yyyy'" 
                                             data-mask name="fextraccion" placeholder="dd/mm/aaaa" required/>
                                    </div>
                              </div>  
                           </div>
                        <div >
                           <div class="col-md-6">
                              <label >Volumen (cm3)</label>
                              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                              <input type="text" onkeypress = "return validarNum(event)" minlength="2" maxlength="4" id="vol" class="form-control" placeholder="Volumen de frasco" name="vol" required/>
                              <span class="help-block with-errors"></span>
                           </div>
                        </div>
                     </div>
                       
                        <?php } ?>
                        <div class="form-group" style="float: right">
                           <div>
                              <button id="guardarYcontinuar" name="guardarYcontinuar" type="submit" class="btn btn-success btn-sm" >Guardar y Continuar
                              </button>
                              <button id="guardarYterminar" name="guardarYterminar" type="submit" class="btn btn-danger btn-sm" >Guardar y Terminar
                              </button>
                           </div>
                        </div>
                       
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--  fin solicita ingreso de datos de frasco  --> 
   </section>
   </aside>
<script src="<?php echo base_url();?>assets/internals/js/frascosinfo.js" type="text/javascript" charset="utf-8" async defer></script>
