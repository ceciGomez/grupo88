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
</section>  <!-- fin section header -->
<!-- section body -->

<section class="container-fluid">
  <div class="content row col-xs-12">
   <form id="formularioHR2" role="form" method="POST" action="<?php echo base_url()?>index.php/chojaderuta/generarHojaDerutaFormatoPDF">
    <!--Seccion que muestra informacion correspondiente a la hoja de ruta en particular -->
    <?php foreach ($hojaderuta as $value) :?>
    Fecha de Creacion<input id="fechaCreacion" name="fCreacion" value="<?php echo $value->fechaCreacionHdR; ?>">
    Fecha de Recorrido<input id="fechaRec" name="fRecorrido" value="<?php echo $value->fechaRecorrido; ?>">
    Chofer<input id="chofer" name="chofer" value="<?php echo $value->chofer; ?>">
    Asistente<input id="asist" name="asistente" value="<?php echo $value->asistente; ?>">
               <h4>Consentimientos por Zona: <?php echo $value->zona;
                                            $idZon = $value->zona;
                                            echo ' - ' ;
                                             $unaZona = $this->zona_model->getNombreZona($idZon);
                                             echo  $unaZona->nombreZona;?></h4>
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
                              <th></th>
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
                                 
                              </div></td>
                            <td colspan="" rowspan="" headers="">
                             <input id="checkbox" type="checkbox" value="<?php echo $value->HojaDeRuta_idHojaDeRuta; ?>" name="ceci[]">
                            </td>
                         
                          </tr>
                        <?php endforeach ?>
                       </tbody>
                    </table>
                    <button type="submit">Imprimir Etiquetas</button>
                </div><!-- /.box-body -->
                
            </div><!-- /.box -->
        </div>
    </div>

   </form> <!-- /.form  -->
  </div>
</section>  <!-- fin section body -->


</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/hojarutainfo.js" type="text/javascript" charset="utf-8" async defer></script>
<!-- script para la fecha -->
<script type="text/javascript">
         $(function () {
             $('#datetimepicker10').datetimepicker({ locale: 'es', viewMode: 'days', format: 'DD/MM/YYYY' });
         });
</script>
