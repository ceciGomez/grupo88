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
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form id="form" method="GET" action="<?=base_url()?>index.php/cfrascos/buscarDonanteFrasco" >
                        <label >Ingrese número de frasco</label>
                        <input type="hidden" type="text" id="nroHR" name="nroHR" value="<?php echo $unahr;?>"/>
                        <input id="nroFrasco" name="nroFrasco"/>
                        <input class="btn btn-default btn-sm " type="submit" id="buscar" value="Buscar"/>
                     </form>
                     <div class="clearfix">&nbsp;</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form id="ingresaFrascos" name="ingresaFrascos" method="POST" role="form" action="<?php echo base_url()?>index.php/cfrascos/guardarFrasco">
                       <input type="hidden" id="nroFrasco" name="nroFrasco" value="<?php echo $nrofrasco;?>"/>
                       <input type="hidden" id="nroHR" name="nroHR" value="<?php echo $unahr;?>"/>
                       <input type="hidden" id="sigue" name="sigue" value="1"/>
                        <div class="row" >
                           <label class="col-md-4">Fecha de Extracción</label>
                             <div class="form-group">
                              <div class='input-group date' id='datetimepicker1'> <!---->
                                 <span class="input-group-addon">
                                 <span class="fa fa-calendar"></span>
                                 </span>
                                 <input class="col-md-5" type="text" class="form-control" id="fextraccion" name="fextraccion" 
                                  data-inputmask="'alias': 'dd/mm/yyyy'" 
                                  data-mask name="fextraccion" placeholder="dd/mm/aaaa" required/>
                              </div>
                           </div>  
                        </div>
                        <br>
                        <div class="row">
                        <label class="col-md-4">Volumen (cm3)</label>
                        <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        <input class="col-md-4" type="text" onkeypress = "return validarNum(event)" minlength="2" maxlength="4" id="vol" class="form-control" placeholder="Volumen de frasco" name="vol" required/>
                        <span class="help-block with-errors"></span>
                        </div>
                        <br>
                        
                        <div class="col-md-offset-2">
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
   </section>
   </aside>
<script src="<?php echo base_url();?>assets/internals/js/frascosinfo.js" type="text/javascript" charset="utf-8" async defer></script>
