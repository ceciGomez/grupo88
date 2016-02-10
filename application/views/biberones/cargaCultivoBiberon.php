<!-- Carga de analisis de cultivos de biberones -->
<aside class="right-side">
   
   <section class="content-header">
      <h1>
         Registrar Análisis de Biberones
      </h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li><a>Pasteurización</a></li>
         <li class="active">Registrar Resultado de Cultivos</li>
      </ol>
   </section>
   <section class="content">
     <div class="container-fluid">
         <div class="row">
            <div class="col-md-8 col-md-offset-2">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <form data-toggle="validator" id="formularioCultivoBiberon" name="formularioCultivoBiberon" method="POST" role="form" action="<?php echo base_url()?>index.php/cbiberon/guardarAnalisis">
                        <input class="col-md-3" value="<?php echo $unBiberon[0]->idBiberon; ?>" type="hidden" id="nroBib" class="form-control" name="nroBib"/>
                        <div class="row">
                           <div class="col-md-3">
                              <label >Nro de Biberon</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->idBiberon; ?></p>
                           </div>
                           <div class="col-md-3">
                              <label >Volumen de leche</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->volumenDeLeche; ?></p>
                           </div>
                           <div class="col-md-3">
                              <label >Volumen Fraccionado</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->volFraccionado; ?></p>
                           </div>
                           <div class="col-md-3">
                              <label >Tipo de Leche</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->tipoDeLeche; ?></p>
                           </div>
                           </div><br>
                           <div class="row">
                           <div class="col-md-6">
                              <label>Col crema</label>
                              <input type="number" onkeypress = "return validarNum(event)" id="colCrema" class="form-control" name="colCrema" required/>
                           </div>
                           <div class="col-md-6">
                              <label>Porcentaje de crema</label>
                              <input type="number" onkeypress = "return validarNum(event)" id="porcenCrema" class="form-control" name="porcenCrema" required/>
                           </div>
                           <div class="col-md-6">
                              <label>Porcentaje de grasa</label>
                              <input type="number" onkeypress = "return validarNum(event)" id="porcenGrasa" class="form-control" name="porcenGrasa" required/>
                           </div>
                           <div class="col-md-6">
                              <label>Total Col</label>
                              <input type="number" onkeypress = "return validarNum(event)" id="totalCol" class="form-control" name="totalCol" required/>
                           </div>
                           <div class="col-md-6">
                              <label>KCali</label>
                              <input type="number" onkeypress = "return validarNum(event)" id="kCali" class="form-control" name="kCali" required />
                           </div>
                           <div class="col-md-6">
                              <label>Acidez D</label>
                              <input type="number" onkeypress = "return validarNum(event)" id="acidezD" class="form-control" name="acidezD" required/>
                           </div>
                           <div class="col-md-6">
                              <label>Caldo</label>
                              <input type="number" onkeypress = "return validarNum(event)" id="caldo" class="form-control" name="caldo" required/>
                           </div>
                           <div class="col-md-6">
                              <label>Placaclde</label>
                              <input type="number" onkeypress = "return validarNum(event)" id="placacIde" class="form-control" name="placacIde" required/>
                           </div>
                           <div class="col-md-6">
                              <label>PlacaAS</label>
                              <input type="number" onkeypress = "return validarNum(event)" id="placaAS" class="form-control" name="placaAS" required/>
                           </div>
                           <div class="col-md-6">
                              <label>Identificación</label>
                              <input type="text" id="ident" class="form-control" name="ident" required/>
                           </div>
                           <div class="col-md-6">
                              <label>eg</label>
                              <input type="text" id="eg" class="form-control" name="eg" required/>
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
                              <a class="btn btn-primary btn-sm" href="<?php echo base_url();?>index.php/cbiberon/view/administrarBiberones">Volver</a>
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
<script src="<?php echo base_url();?>assets/internals/js/biberoninfo.js" type="text/javascript" charset="utf-8" async defer></script>


