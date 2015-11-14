<aside class="right-side">
   <!-- section header -->
   <section class="content-header">
      <h1>
         Registrar Ingreso de Hoja de Ruta
      </h1>
      
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
         <li><a href="#">Hoja de Ruta</a></li>
         <li class="active">Registrar Ingreso de Hoja De Ruta</li>
      </ol>
   </section>
   <!-- fin section header -->
   <!-- seccion de datos especificios de hoja de ruta -->
   <section class="content-body">
      <section>
		<?php foreach ($unaHR as $value) :?>
        <div class="row">
         <div class="col-xs-12">
            <form class="form" role="form">
               <div class="col-xs-12">
                  <div >
                      <div class="form-group">
                        <label class="col-xs-2 control-label">Id HR</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="idhr" disabled="" value="<?php echo $value->idHojaDeRuta?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-2 control-label">F. de Creacion</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="fcracion" disabled="" value="<?php echo $fechaCreaArreglada?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-2 control-label">F. de Recorrido</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="frecorrido" disabled="" value="<?php echo $fechaRecArreglada?>">
                        </div>
                     </div>
                  <!-- 12 -->  
                  </div>
                   <div >
                     <div class="form-group">
                        <label class="col-xs-2 control-label">F. de Efectivizacion</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="fefectivizacion" value="<?php echo $value->fechaEfectivizacion?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-2 control-label">F. Ultima Modif</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="fultmodif" disabled="" value="<?php echo $fechaUltModArreglada?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-2 control-label">Zona</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="zona" disabled="" value="<?php echo $value->zona?>">
                        </div>
                     </div>
                  </div>
                  <!-- 12 -->
                   <div >
                     <div class="form-group">
                        <label class="col-xs-2 control-label">Chofer</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="chofer" disabled="" value="<?php echo $value->chofer?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-2 control-label">Asistente</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="asistente" disabled="" value="<?php echo $value->asistente?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-2 control-label">Observaciones</label>
                        <div class="col-xs-2">
                           <input class="form-control" disabled="" id="observaciones" value="<?php echo $value->observaciones?>">
                        </div>
                     </div>
                  </div>
               </div>
            </form>
            <?php endforeach ?>
         </div>
      </div> 
      </section>

   </section>
   <!-- fin section de datos especificos de hoja de ruta -->
   <!-- seccion de datos de consentimientos por hoja de ruta -->
   <br><br>
   <section class="content-body">
      <h4>Consentimientos asociados</h4>
      <div class="row">
               <div class="col-xs-12">
                  <div class="box">
                     <div class="box-body table-responsive">
                        <table id="example1" class="table table-responsive table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>Nro de Consentimiento</th>
                                 <th>Frascos Recolectados</th>
                                 <th>Nombre y Apellido de Donante</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                  <?php foreach ($consentAsociados as $value) :
                                 $unConsent = $this->consentimiento_model->getConsentimiento($value->Consentimiento_nroConsentimiento);
                                 $unaDonante = $this->donantes_model->getNAD($unConsent[0]->Donante_nroDonante);
                                 $idHr = $value->HojaDeRuta_idHojaDeRuta;
                                 ?>
                                 <td colspan="" rowspan="" headers=""><?php echo $value->Consentimiento_nroConsentimiento; ?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo $value->cantFrascosRecolectados; ?></td>
                                 <td colspan="" rowspan="" headers=""><?php echo $unaDonante->nombre; echo ' '; echo $unaDonante->apellido; ?></td>
                              </tr>
                              <?php endforeach ?>
                           </tbody>
                        </table>
      </div>
      <div class="pull-right">
         <br>
         
          <a class="btn btn-success btn-md" href="javascript:window.history.back();">Volver</a>
          <a class="btn btn-success btn-md" href="<?php echo base_url()?>/index.php/cfrascos/view/ingresoFrascos/<?php echo $idHr;  ?>">Registrar Ingreso de Frascos</a>
      </div>
                        
   </section>
   <!-- seccion de datos de consentimientos por hoja de ruta-->
</aside>
<!-- /.right-side -->