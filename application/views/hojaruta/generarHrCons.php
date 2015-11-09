<aside class="right-side">
   <!-- section header -->
   <section class="content-header">
      <h1>
         Consentimientos Asociados a Hoja de Ruta
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Hoja de Ruta</a></li>
         <li class="active">Hoja de Ruta Generada</li>
      </ol>
   </section>
   <!-- fin section header -->
   <!-- section body -->
   <section class="container-fluid">
      <div class="content row col-xs-12">
         <form id="formularioHR2" role="form" method="POST" action="<?php echo base_url()?>index.php/chojaderuta/generarHojaDerutaFormatoPDF">
            <!--Seccion que muestra informacion correspondiente a la hoja de ruta en particular -->
            <?php foreach ($hojaderuta as $value) :?>
            <div class="form-group col-xs-4">
               <label for="fcrea" class="col-xs-4 control-label"> F. de Creacion</label>
               <input id="fechaCreacion" name="fCreacion"  disabled="" value="<?php echo $fechaCreaArreglada; ?>">
            </div>
            <div class="form-group col-xs-4" >
               <label for="fecha" class="col-xs-4 control-label">F. de Recorrido</label>
               <input id="fRec" name="fRec" disabled="" value="<?php echo $fechaRecArreglada;?>">
            </div>
            <div class="form-group col-xs-4" >
               <label for="dia" class="col-xs-4 control-label">Dia de recorrido</label>
               <input id="diaRec" name="diaRec"  disabled=""  value="<?php echo "$diaSemana"; ?>">
            </div>
            <div class="form-group col-xs-4" >
               <label for="chofer" class="col-xs-4 control-label">Chofer</label>
               <input id="chofer" name="chofer" value="<?php echo $value->chofer; ?>">
            </div>
            <div class="form-group col-xs-4" >
               <label for="asistente" class="col-xs-4 control-label">Asistente</label>
               <input id="asist" name="asistente" value="<?php echo $value->asistente; ?>">
            </div>
            <div class="form-group col-xs-4" >
               <?php  $idZon = $value->zona;
                  $unaZona = $this->zona_model->getNombreZona($idZon);
                   ?>
               <label for="zona" class="col-xs-4 control-label">Zona </label>
               <input value="<?php echo  $unaZona->nombreZona; ?>">
            </div>
            <?php endforeach ?>
            <!-- text input -->
            <div class="row">
               <div class="col-xs-12">
                  <div class="box">
                     <div class="box-body table-responsive">
                        <table id="example1" class="table table-responsive table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>Nro de Consentimiento</th>
                                 <th>Nro de HR</th>
                                 <th>Frascos Entregados</th>
                                 <th>Frascos Recolectados</th>
                                 <th>Observaciones</th>
                                 <th></th>
                                 <th>Imprimir</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($hrxcons as $value) :?>
                              <tr>
                                 <?php //$unaDonante = $this->donantes_model->getNAD($value->Donante_nroDonante);?>
                                 <td colspan="" rowspan="" headers=""><?php echo $value->Consentimiento_nroConsentimiento; ?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo $value->HojaDeRuta_idHojaDeRuta; ?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo $value->cantFrascosEntregados; ?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo $value->cantFrascosRecolectados; ?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo $value->observaciones; ?></td>
                                 <td colspan="" rowspan="" headers="">
                                    <div>
                                       <a href="#" 
                                          class="btn btn-default btn-sm" 
                                          role="button"><i class="fa fa-eye"></i></a>
                                       <a href="#"
                                          class="btn btn-default btn-sm"  
                                          role="button"><i class="fa fa-pencil"></i></a>
                                       <a href="#" 
                                          class="btn btn-default btn-sm" 
                                          role="button"><i class="fa fa-times"></i></a>
                                    </div>
                                 </td>
                                 <td colspan="" rowspan="" headers="">
                                    <input id="checkbox" type="checkbox" value="<?php echo $value->HojaDeRuta_idHojaDeRuta; ?>" name="ceci[]">
                                 </td>
                              </tr>
                              <?php endforeach ?>
                           </tbody>
                        </table>
                        <button type="submit">Agregar Consentimientos</button>
                        <button type="submit">Imprimir todas las Etiquetas</button>
                        <button type="submit">Imprimir Etiquetas seleccionadas</button>
                     </div>
                     <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
               </div>
            </div>
         </form>
         <!-- /.form  -->
      </div>
      <div class="pull-right">
                    <a class="btn btn-success btn-md" href="javascript:window.history.back();">Volver</a>
                </div>
   </section>
   </section>
   <!-- fin section body -->
</aside>
<!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/hojarutainfo.js" type="text/javascript" charset="utf-8" async defer></script>
<!-- script para la fecha -->
<script type="text/javascript">
   $(function () {
       $('#datetimepicker10').datetimepicker({ locale: 'es', viewMode: 'days', format: 'DD/MM/YYYY' });
   });
</script>