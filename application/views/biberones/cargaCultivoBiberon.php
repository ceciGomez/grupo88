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
                     <form id="formularioCultivoBiberon" name="formularioCultivoBiberon" method="POST" role="form" action="<?php echo base_url()?>index.php/cbiberon/guardarAnalisis">
                        <input class="col-md-4" value="<?php echo $unBiberon[0]->idBiberon; ?>" type="hidden" id="nroBib" class="form-control" name="nroBib"/>
                        <div class="row">
                           <div class="col-md-6">
                              <label >Nro de Biberon</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->idBiberon; ?></p>
                           </div>
                        </div>
                        <br>
                           <div class="row">
                           <div class="col-md-6">
                              <label >Volumen de leche</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->volumenDeLeche; ?></p>
                           </div>
                           <div class="col-md-6">
                              <label >Volumen Fraccionado</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->volFraccionado; ?></p>
                           </div>
                           </div><br>
                           <div class="row">
                           <div class="col-md-6">
                              <label >Tipo de Leche</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->tipoDeLeche; ?></p>
                           </div>
                           <div class="col-md-6">
                              <label >Estado de Frasco</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->estadoBiberon; ?></p>
                           </div>
                           </div><br>
                           <div class="row">
                           <div class="col-md-6">
                              <label>Hematocritos</label>
                              <input type="text" onkeypress = "return validarNum(event)" id="hematocritos" class="form-control" name="hematocritos"/>
                           </div>
                           <div class="col-md-6">
                              <label>Crema</label>
                              <input type="text" onkeypress = "return validarNum(event)" id="crema" class="form-control" name="crema"/>
                           </div>
                           <div class="col-md-6">
                              <label>Total Col</label>
                              <input type="text" onkeypress = "return validarNum(event)" id="totalCol" class="form-control" name="totalCol"/>
                           </div>
                           <div class="col-md-6">
                              <label>Gordura</label>
                              <input type="text" onkeypress = "return validarNum(event)" id="gordura" class="form-control" name="gordura"/>
                           </div>
                           <div class="col-md-6">
                              <label>KCal</label>
                              <input type="text" onkeypress = "return validarNum(event)" id="kCal" class="form-control" name="kCal"/>
                           </div>
                           <div class="col-md-6">
                              <label>KCal</label>
                              <input type="text" onkeypress = "return validarNum(event)" id="kCal" class="form-control" name="kCal"/>
                           </div>
                           <div class="col-md-6">
                              <label>Cultivo Cal 24</label>
                              <input type="text" onkeypress = "return validarNum(event)" id="cultivoCal24" class="form-control" name="cultivoCal24"/>
                           </div>
                           <div class="col-md-6">
                              <label>Cultivo Cal 48</label>
                              <input type="text" onkeypress = "return validarNum(event)" id="cultivoCAl48" class="form-control" name="cultivoCAl48"/>
                           </div>
                           <div class="col-md-6">
                              <label>Estado Biberon</label>
                                <div>
                                    <select name="estadoBiberon" class="form-control" >
                                      <option>
                                        <?php echo $unBiberon[0]->estadoBiberon;?>
                                      </option>
                                          <option value="Cuarentena">Cuarentena</option>
                                          <option value="Ok">Ok</option>
                                          <option value="Rechazado">Rechazado</option>
                                    </select>
                                </div>
                           </div>
                           <div class="col-md-6" id="motivo">
                              <label>Motivo de Rechazo</label>
                              <input type="text" class="form-control" name="motivoRechazoBiberon"/>
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
<script type="text/javascript">
   $(document).ready(function() {
      $("#motivo").hide();
         console.log(event);
      $(".select label").click(function(event) {
         if ($(event.target.children).find("input").val()=="Rechazado") {
            $("#motivo").show()
         };
      };
   });
</script>
