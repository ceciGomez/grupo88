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
                        <input type="text" id="query" name="query" />
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
                              <label >Nombre Donante</label>
                              <p class="form-control-static"> </p>
                           </div>
                           <div class="col-md-4">
                              <label >Apellido Donante</label>
                              <p class="form-control-static"></p>
                           </div>
                           <div class="col-md-4">
                              <label >Dni Donante</label>
                              <p class="form-control-static"></p>
                           </div>
                        <?php 
                        }else{
                        ?>
                           <div class="col-md-4">
                              <label >Nombre Donante</label>
                              <p class="form-control-static"> <?php echo $result[0]->nombre; ?></p>
                           </div>
                           <div class="col-md-4">
                              <label >Apellido Donante</label>
                              <p class="form-control-static"><?php echo $result[0]->apellido; ?></p>
                           </div>
                           <div class="col-md-4">
                              <label >Dni Donante</label>
                              <p class="form-control-static"><?php echo $result[0]->dniDonante; ?></p>
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
                     <form id="ingresaFrascos" name="ingresaFrascos" method="POST" role="form" action="<?php echo base_url()?>index.php/cfrascos/guardarFrasco/">
                       <!-- <input type="hidden" class="col-md-2" type="text" id="nroHR" name="nroHR" value="<?php echo $unahr[0]->idHojaDeRuta;?>" />-->
                        <div class="row">
                           <label class="col-md-4">Tipo de Leche</label>
                           <p class="form-control-static">Calostro</p>
                        </div>
                        
                        
                      
                        <div class="row" >
                           <label class="col-md-4">Fecha de Extracción</label>
                           <input class="col-md-2" type="text" id="fextraccion" name="fextraccion" required/>
                        </div>
                        <br>

                        <div class="row">
                           <label class="col-md-4">Volumen</label>
                           <input class="col-md-2" type="text" id="vol" name="vol" required/>
                        </div>
                        <br>
                        
                        <div class="col-md-offset-2">
                           <div>
                              <a id="guardarYcontinuar" class="btn btn-success btn-sm" 
                                 role="button">Guardar y Continuar</a>
                              <a id="guardarYterminar"  class="btn btn-danger btn-sm" 
                                 role="button">Guardar y Terminar</a>
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