<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
   <!-- Content Header (Page header) -->
   <section class="content-header">
      <h1>   Ver Prescripciones Medicas seleccionadas</h1>
      <ol class="breadcrumb">
         <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
         <li class="active">Ver Prescripcion Medica Seleccionadas</li>
      </ol>
   </section>
   <section class="content">
     
      <form id="formConfirmarFrac" role="form" method="POST" 
      action="<?php echo base_url()?>index.php/cfraccionamiento/realizarFracc">
         <div class="row">
            <div class="col-xs-12">
               <div class="box">
                <label>Tipo de leche:</label>
                <input id="tipoLeche" name="tipoLeche" value="<?php echo $tipoLeche; ?>">
                  <div class="box-body table-responsive">
                     <table id="example2" class="table table-responsive table-bordered table-striped">
                        <thead>
                           <tr>
                              <th>id Pmedica</th>
                              <th>Fecha P. Medica</th>
                              <th>KCal/l</th>
                              <th>Nro de Toma</th>
                              <th>Volumen </th>
                              <th>Biberon - Volumen - KCal/l - % Crema</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php 
                           $volTotal = 0;
                           foreach ($pmSelec as  $value):?>
                           <tr>
                              <?php  
                                 $volTotal = $value[0]->cant_tomas*$value[0]->volumen + $volTotal; 
                                 $fechaArreglada = $this->pasteurizacion_model->arreglarFecha($value[0]->fechaPrescripcion);
                                 $tomas = $value[0]->cant_tomas;
                                 for ($i=1; $i < $tomas + 1; $i++) { ?>
                                       <tr>
                                       <td colspan="" rowspan="" headers=""><input type="hidden" name="pmSel[]" value="<?php echo $value[0]->idPrescripcionMedica; ?>">
                                        <?php echo $value[0]->idPrescripcionMedica; ?></td>
                                       <td colspan="" rowspan="" headers=""><?php echo $fechaArreglada; ?></td>
                                       <td colspan="" rowspan="" headers=""><?php echo $value[0]->kcal; ?></td>
                                       <td colspan="" rowspan="" headers=""><?php echo $i ?></td> 
                                       <td colspan="" rowspan="" headers=""><?php echo $value[0]->volumen; ?></td>
                                       <td colspan="" rowspan="" headers="">
                                         <select  name="bibSel[]" id="biberon" value="$valor" class="form-control">
                                           <?php foreach ($biberonesOk as $key):?>
                                              <option value="<?php echo $key->idBiberon;?>" >
                                                <?php echo 'biberon: ', $key->idBiberon,', vol: ', $key->volumenDeLeche; 
                                                echo ', kcal: ',  $key->kcali;
                                                echo ', %crema: ',  $key->porcenCrema;?>          
                                              </option>
                                           <?php endforeach ?>
                                         </select>
                                       </td>
                                   </tr>
                                <?php } ?>
                            </tr>
                           <?php endforeach ?>
                        </tbody>
                     </table>
                      <p> El volumen total de todas las prescripciones médicas seleccionadas es: 
                        <b><?php echo $volTotal, " cc"; ?></b>
                        <?php 
                        $volTotalBiberonesDisponibles = 0;
                        foreach ($biberonesOk as $key):
                          $volTotalBiberonesDisponibles = $key->volumenDeLeche + $volTotalBiberonesDisponibles;
                        endforeach 
                        ?>
                        <p> El volumen total de todas los biberones disponibles es: 
                        <b><?php echo $volTotalBiberonesDisponibles, " cc"; ?></b>
                      </p>
                  </div>
                  <!--fin de tabla -->
               </div>
               <!-- -->
            </div>
         </div>
         <div class="form-group pull-right content">
                  <button type="button"  aria-hidden="true" 
                     id="confirmarFracc" class="btn btn-success btn-md">Confirmar Fraccionamiento</button>
                     <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
               </div>
      </form>
   </section>
   <!-- /.content -->    
</aside>
<!-- /.right-side -->
<script src="<?php echo base_url();?>assets/internals/js/fraccionamientoinfo.js" type="text/javascript" charset="utf-8" async defer></script>
