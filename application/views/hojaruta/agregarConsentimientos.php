<aside class="right-side">
   <!-- section header -->
   <section class="content-header">
      <h1>
         Agregar Consentimientos
      </h1>
      <ol class="breadcrumb">
         <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
         <li><a href="#">Hoja de Ruta</a></li>
         <li class="active">Agregar Consentimientos</li>
      </ol>
   </section>
   <!-- fin section header -->
    <section class="container-fluid">
      <form id="formAgregarCons" role="form" method="POST" action="<?php echo base_url()?>index.php/chojaderuta/agregarConsentimientos/<?php echo  $hojaderuta[0]->idHojaDeRuta;?>">
               <div class="row">
                  <div class="col-xs-12">
                     <div class="box">
                        <div class="box-body table-responsive">
                           <table id="example1" class="table table-responsive table-bordered table-hover">
                              <thead>
                                 <tr>
                                    <th>Nro de Cons.</th>
                                    <th>Dni de Donante</th>
                                    <th>Nombre Donante</th>
                                    <th>Apellido Donante</th>
                                    <th>Tipo de Donante</th>
                                    <th>Fecha Desde</th>
                                    <th>Zona</th>
                                    <th>Dia</th>
                                    
                                    <th>Seleccionar</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php foreach ($consentimientosActivos as $value) :?>
                                 <?php
                                    $fechaArray = explode('-', $value->fechaDesde);
                                     $date = new DateTime();
                                    $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                    $fecha= $date->format('d-m-Y'); 
                                    ?> 
                                 <tr>
                                    <?php $unaDonante = $this->donantes_model->getNAD($value->Donante_nroDonante);?>
                                    <?php $unaZona = $this->zona_model->getNombreZona($value->Zona_idZona);?>
                                    <td colspan="" rowspan="" headers=""><?php echo $value->nroConsentimiento; ?></td>
                                    <td colspan="" rowspan="" headers=""><?php echo $unaDonante->dniDonante; ?></td>
                                    <td colspan="" rowspan="" headers=""><?php echo $unaDonante->nombre; ?></td>
                                    <td colspan="" rowspan="" headers=""><?php echo $unaDonante->apellido; ?></td>
                                    <?php if ($unaDonante->tipoDonante == 0)
                                 { 
                                    $tipo = "Interna";
                                    }else {
                                       $tipo = "Externa";
                                    }
                                 ?>   
                                 <td colspan="" rowspan="" headers=""><?php echo $tipo;?></td>
                                    <td colspan="" rowspan="" headers=""><?php echo $fecha; ?></td>
                                    <td colspan="" rowspan="" headers=""><?php echo $unaZona->nombreZona; ?>
                                       <input style="display:none" id="zona" name="zona" value="<?php echo $value->Zona_idZona; ?>">
                                    </td>
                                    <td colspan="" rowspan="" headers=""><?php echo $value->dia; ?></td>
                                    
                                    <td colspan="" rowspan="" headers="">
                                       <input  id="checkbox" type="checkbox" value="<?php echo $value->nroConsentimiento; ?>" name="consSel[]">
                                    </td>
                                 </tr>
                                 <?php endforeach ?>
                              </tbody>
                           </table>
                        </div>
                        <!-- /.box-body -->
                     </div>
                     <!-- /.box -->
                  </div>
               </div>
               <div class="form-group">
                  <button type="button"  aria-hidden="true" 
                     id="agregarConsentimientos" class="btn btn-success btn-md">Agregar Seleccionados</button>
                     <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
               </div>
            </form>
            <!-- /.form  -->
         </div>
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