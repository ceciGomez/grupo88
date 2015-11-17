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
            <?php foreach ($hojaderuta as $value) :?>
         <form id="formularioHR2" role="form" method="POST" action="<?php echo base_url()?>index.php/chojaderuta/view/agregarConsentimientos/<?php echo  $value->idHojaDeRuta;?>">
            <!--Seccion que muestra informacion correspondiente a la hoja de ruta en particular -->
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
               <input id="chofer" name="chofer" disabled="" value="<?php echo $value->chofer; ?>">
            </div>
            <div class="form-group col-xs-4" >
               <label for="asistente" class="col-xs-4 control-label">Asistente</label>
               <input id="asist" name="asistente" disabled="" value="<?php echo $value->asistente; ?>">
            </div>
            <div class="form-group col-xs-4" >
               <?php  $idZon = $value->zona;
                  $unaZona = $this->zona_model->getNombreZona($idZon);
                   ?>
               <label for="zona" class="col-xs-4 control-label">Zona </label>
               <input disabled="" value="<?php echo  $unaZona->nombreZona; ?>">
            </div>
            <?php endforeach ?>
            <!-- text input -->
     
         <label>Numero de Hoja de Ruta: <?php  echo  $value->idHojaDeRuta;  ?></label>
            <input id="idHr" name="idHr" style="display:none" value="<?php  echo $value->idHojaDeRuta;  ?>">
            <div class="row">
               <div class="col-xs-12">
                  <div class="box">
                     <div class="box-body table-responsive">
                        <table id="example1" class="table table-responsive table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>Nro de Consentimiento</th>
                                 <th>Frascos Entregados</th>
                                 <th>Nombre y Apellido de Donante</th>
                                 <th>Tipo de Donante</th>
                                 <th></th>
                                 
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                  <?php foreach ($hrxcons as $value) :
                                 $unConsent = $this->consentimiento_model->getConsentimiento($value->Consentimiento_nroConsentimiento);
                                 $unaDonante = $this->donantes_model->getNAD($unConsent[0]->Donante_nroDonante);
                                 ?>

                                 <td colspan="" rowspan="" headers=""><?php echo $value->Consentimiento_nroConsentimiento; ?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo $value->cantFrascosEntregados; ?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo $unaDonante->nombre; echo ' '; echo $unaDonante->apellido; ?></td>
                                 <?php if ($unaDonante->tipoDonante == 0)
                                 { 
                                    $tipo = "Interna";
                                    }else {
                                       $tipo = "Externa";
                                    }
                                 ?>   
                                 <td colspan="" rowspan="" headers=""><?php echo $tipo;?></td>
                                 <td colspan="" rowspan="" headers="">
                                    <div>
                                       <a href="<?php echo base_url(); ?>index.php/consentimiento/view/verUnConsentimiento/<?php echo $value->Consentimiento_nroConsentimiento ?>"
                                          title="Ver Consentimiento Asociado" 
                                          class="btn btn-default btn-sm" 
                                          role="button"><i class="fa fa-eye"></i>
                                       </a>
                                       <a href="<?php echo base_url(); ?>index.php/chojaderuta/view/quitarConsentimientos/<?php echo $value->Consentimiento_nroConsentimiento; 
                                                                                                                              echo "/";
                                                                                                                              echo $hojaderuta[0]->idHojaDeRuta?>"
                                          title="Eliminar consentimiento asociado" 
                                          class="btn btn-default btn-sm" 
                                          role="button"><i class="fa fa-times"></i>
                                       </a>
                                    </div>
                                 </td>
                               
                              </tr>
                              <?php endforeach ?>
                           </tbody>

                        </table>
                        <button type="submit">Agregar Consentimientos</button>
                        
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
                    <a class="btn btn-success btn-md" href="<?php echo base_url()?>index.php/chojaderuta/view/verhrSemanal">Volver</a>
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