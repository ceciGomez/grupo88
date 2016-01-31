<!-- Carga de analisis de cultivos de biberones -->
<aside class="right-side">
   
   <section class="content-header">
      <h1>
         Registrar Análisis de Biberones
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a>Ver Biberones</a></li>
         <li class="active">Registrar Resultado de Cultivos</li>
      </ol>
   </section>
   <section class="content">
     <div class="container-fluid">
         <div class="row">
            <div class="col-md-6 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form id="formularioAnalisis" name="formularioAnalisis" method="POST" role="form" action="<?php echo base_url()?>index.php/cfrascos/guardarResultados">
                        <input class="col-md-4" value="<?php echo $unBiberon[0]->nroFrasco; ?>" type="hidden" id="nroFrasco" class="form-control" name="nroFrasco"/>
                        <div class="row">
                           <div class="col-md-6">
                              <label >Nro de Frasco</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->idBiberon; ?></p>
                           </div>
                        </div>
                        <br>
                           <div class="row">
                           <div class="col-md-6">
                              <label >Volumen de leche</label>
                              <p class="form-control-static"><?php echo $unFrasco[0]->volumenDeLeche; ?></p>
                           </div>
                           <div class="col-md-6">
                              <label >Fecha de Extracción</label>
                              <p class="form-control-static"> 
                                 <?php
                                       $fechaArray = explode('-', $unFrasco[0]->fechaExtraccion);
                                       if ($fechaArray[0] == 0){
                                           $fecha="";
                                         }else{ 
                                           $date = new DateTime();
                                           $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                           $fecha= $date->format('d-m-Y'); 
                                       }?>
                                          <?php echo $fecha;?> </p>
                           </div>
                           </div><br>
                           <div class="row">
                           <div class="col-md-6">
                              <label >Tipo de Leche</label>
                              <p class="form-control-static"><?php echo $tipoLeche; ?></p>
                           </div>
                           <div class="col-md-6">
                              <label >Estado de Frasco</label>
                              <p class="form-control-static"><?php echo $unFrasco[0]->estadoDeFrasco; ?></p>
                           </div>
                           </div><br>
                           <div class="row">
                           <div class="col-md-6">
                              <label>Nivel de Acidez</label>
                              <input type="text" onkeypress = "return validarNum(event)" id="acidez" class="form-control" name="acidez"/>

                           </div>
                           
                           <div class="col-md-6">
                              <label>Hematocritos</label>
                              <input type="text" onkeypress = "return validarNum(event)" id="hematocritos" class="form-control" name="hematocritos"/>
                           </div>
                           </div>
                           </div>
                           <div class="col-md-offset-2">
                            <div>
                             
                                 <a class="btn btn-primary btn-sm" href="javascript:window.history.back();">Volver</a>
                                 
                              <button  type="submit" class="btn btn-success btn-sm" id="guardaResultados">Guardar
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

