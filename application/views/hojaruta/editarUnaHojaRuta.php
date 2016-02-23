<aside class="right-side">
   <!-- section header -->
   <section class="content-header">
      <h1>
         Editar una Hoja de Ruta
      </h1>
<?php foreach ($unaHR as $value) :?>
     <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Hoja de Ruta</a></li>
         <li class="active">Editar una hoja de ruta</li>
      </ol>
   </section>
   <!-- fin section header -->
   <!-- seccion de datos especificios de hoja de ruta -->
   <form data-toggle="validator" class="form" role="form" method="POST" action="<?php echo base_url()?>index.php/chojaderuta/actualizarHr">
   <section class="content-body">
      <section>
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
                      <div style="display:none" class="form-group">
                        <label class="col-xs-2 control-label">Id HR</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="idhr" name="idhr" value="<?php echo $value->idHojaDeRuta?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-2 control-label">F. de Creacion</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="fcreacion" disabled="" value="<?php echo $fechaCreaArreglada?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-2 control-label">F. de Recorrido</label>
                        <div class="col-xs-2">
                           <div class='input-group date' id='datetimepicker1'>
                                    <span class="input-group-addon">
                                    <span class="fa fa-calendar"></span>
                                    </span>
                           <input class="form-control" id="frecorrido" name="frecorrido" value="<?php echo $fechaRecArreglada?>">
                        </div>
                        </div>
                     </div>
                  <!-- 12 -->  
                  </div>
                   <div >
                     <div class="form-group">
                        <label class="col-xs-2 control-label">F. de Efectivizacion</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="fefectivizacion" value="<?php echo $fechaEfecArreglada?>" disabled="">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-2 control-label">F. Ultima Modif</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="fultmodif" value="<?php echo $fechaUltModArreglada?>"disabled="">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-2 control-label">Zona</label>
                        <div class="col-xs-2">
                           <?php $unaZona = $this->zona_model->getNombreZona($value->zona);?>
                           <select name="zona" id="zona"  class="form-control">
                              <option value="<?php echo $value->zona?>"><?php echo $unaZona->nombreZona;?></option>
                              <option value="1">Centro</option>
                              <option value="2">Norte</option>
                              <option value="3">Sur</option>
                              <option value="4">Saenz Peña</option>
                              <option value="5">Corrientes</option>
                              <option value="10">Internas</option>
                              <option value="7">Todos</option>
                     </select>

                        </div>
                     </div>
                  </div>
                  <!-- 12 -->
                   <div >
                     <div class="form-group">
                        <label class="col-xs-2 control-label">Chofer</label>
                        <div class="col-xs-2">
                           <input class="form-control" id="chofer" name="chofer" value="<?php echo $value->chofer?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-2 control-label">Asistente</label>
                        <div class="col-xs-2">
                           <input class="form-control" name="asistente" id="asistente" value="<?php echo $value->asistente?>">
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="col-xs-2 control-label">Observaciones</label>
                        <div class="col-xs-2">
                           <input class="form-control" name="observaciones" id="observaciones" value="<?php echo $value->observaciones?>">
                        </div>
                     </div>
                  </div>
               </div>
            </form>
      <div class="pull-right content">
          <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
         <button class="btn btn-success" type="submit">Guardar cambios</button>
         <a class="btn btn-success btn-md" role="button"href="<?php echo base_url(); ?>index.php/chojaderuta/view/agregarConsentimientos/<?php echo $value->idHojaDeRuta ?>">Agregar/Quitar Consentimientos</a>
      </div>
            <?php endforeach ?>
         </div>
      </div> 
      </section>

   </section>
</form>
   <!-- fin section de datos especificos de hoja de ruta -->
   <!-- seccion de datos de consentimientos por hoja de ruta -->
   
   <section class="content-body content">
      <h4>Consentimientos asociados</h4>
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
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                  <?php foreach ($consentAsociados as $value) :
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
                               
                              </tr>
                              <?php endforeach ?>
                           </tbody>
                        </table>
                        
                        
                     </div>
   </section>
   <!-- seccion de datos de consentimientos por hoja de ruta-->
</aside>
<!-- /.right-side -->

