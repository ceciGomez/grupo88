<!-- Carga de analisis de cultivos de biberones -->
<aside class="right-side">
   
   <section class="content-header">
      <h1>
         Ver Biberon
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
                     <form  id="formularioCultivoBiberon" name="formularioCultivoBiberon"  role="form" >
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
                           <div class="col-md-3">
                              <label >Col crema</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->colCrema; ?></p>
                           </div>
                           <div class="col-md-3">
                              <label >Porcentaje de crema</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->porcenCrema; ?></p>
                           </div>
                           <div class="col-md-3">
                              <label >Porcentaje de grasa</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->porcenGrasa; ?></p>
                           </div>
                           <div class="col-md-3">
                              <label >Total Col</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->totalCol; ?></p>
                           </div>
                           </div><br>
                        <div class="row">
                           <div class="col-md-3">
                              <label >KCali</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->kcali; ?></p>
                           </div>
                           <div class="col-md-3">
                              <label >Acidez D</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->acidezD; ?></p>
                           </div>
                           <div class="col-md-3">
                              <label >Caldo</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->caldo; ?></p>
                           </div>
                           <div class="col-md-3">
                              <label >Placaclde</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->placaclde; ?></p>
                           </div>
                           </div><br>
                        <div class="row">
                           <div class="col-md-3">
                              <label >PlacaAS</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->PlacaAS; ?></p>
                           </div>
                           <div class="col-md-3">
                              <label >Identificación</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->identif; ?></p>
                           </div>
                           <div class="col-md-3">
                              <label >eg</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->eg; ?></p>
                           </div>
                           <div class="col-md-3">
                              <label >Estado Biberon</label>
                              <p class="form-control-static"><?php echo $unBiberon[0]->estadoBiberon; ?></p>
                           </div>
                          <?php 
                            if ($unBiberon[0]->estadoBiberon == "Rechazado") {
                              $motivo = explode('-', $unBiberon->motivoRechazoBiberon);
                            } else {
                              $motivo = "no fue Rechazado";}?>

                           <div class="col-md-3">
                              <label >Motivo de Rechazo</label>
                              <p class="form-control-static"><?php echo $motivo; ?></p>
                           </div>                            
                           </div><br>
                           </div>
                           </div>
                           <div class="col-md-offset-2">
                            <div>
                              <a class="btn btn-primary btn-sm" href="<?php echo base_url();?>index.php/cbiberon/view/administrarBiberones">Volver</a>
                              <button  type="button" class="btn btn-success btn-sm" href="<?php echo base_url();?>index.php/cbiberon/view/editarBiberon/<?php echo $unBiberon[0]->idBiberon,"/"?>" >Editar Datos
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


