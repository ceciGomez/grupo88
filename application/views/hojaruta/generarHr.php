<aside class="right-side">
<!-- section header -->
<section class="content-header">
  <h1>
    Generar Hoja de Ruta
  </h1>

  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
    <li><a href="#">Hoja de Ruta</a></li>
    <li class="active">Generar Hoja de Ruta</li>
  </ol>
</section>  <!-- fin section header -->
<!-- section body -->

<section class="container-fluid">
  <div class="content row col-xs-10">
   <form id="formularioHR" role="form" method="POST" action="<?php echo base_url()?>index.php/chojaderuta/generarHR" >
  <!-- text input -->
    <div class="form-group col-xs-3">
      <label>Indicar Fecha</label>
      <div class="form-group">
        <div class='input-group date' id='datetimepicker10'>
          <span class="input-group-addon">
          <span class="fa fa-calendar"></span>
          </span>
          <input type="text" class="form-control" id="fnac" 
          data-inputmask="'alias': 'dd/mm/yyyy'" 
          data-mask name="fecha" placeholder="dd/mm/aaaa" required/>

        </div>
      </div>
    <!-- /.input group -->
    </div>
    <!-- /.form group -->
    <!-- text input -->
    <div class="form-group col-xs-3">
      <label>Indicar Zona</label>
      <div>
        <select name="zona" id="zona"  class="form-control">
          <option value="1">Centro</option>
          <option value="2">Norte</option>
          <option value="3">Sur</option>
          <option value="4">Saenz Peña</option>
          <option value="5">Corrientes</option>
        </select>
      </div>
               
    </div>
    <!-- /.input group -->
    <!-- text input -->
    <div class="form-group col-xs-3">
      <label>Indicar Dia</label>
      <div>
        <select name="dia" id="dia" value="$valor" class="form-control">
          <option value="1">Lunes</option>
          <option value="2">Martes</option>
          <option value="3">Miercoles</option>
          <option value="4">Jueves</option>
          <option value="5">Viernes</option>
        </select>
      </div>         
    </div>
    <!-- /.input group -->
    <div class="pull-right content">
      <div class="form-group">
       
         <button type="button"  aria-hidden="true" 
            id="generarHR" class="btn btn-success btn-md">Generar HR</button>
      </div>
    </div>
    </form> <!-- /.form  -->
    <?php if($showData) : ?>
      <section class="container-fluid">
      <div class="content row col-xs-12">
       <form id="formularioHR2" role="form" method="POST" action="<?php echo base_url()?>index.php/chojaderuta/generarHojaDerutaFormatoPDF">
        <!-- text input -->
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                   <h4>Consentimientos por Zona: <?php echo $zona; ?></h4>
                   
                    <div class="box-body table-responsive">
                        <table id="example1" class="table table-responsive table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th>Nro de Consentimiento</th>
                                  <th>Dni de Donante</th>
                                  <th>Nombre Donante</th>
                                  <th>Apellido Donante</th>
                                  <th>Fecha Desde</th>
                                  <th></th>
                                </tr>
                            </thead>
                           <tbody>
                            <?php foreach ($consenxzona as $value) :?>
                            <?php
                                 $fechaArray = explode('-', $value->fechaDesde);
                                  $date = new DateTime();
                                 $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                 $fecha= $date->format('d-m-Y'); 
                                 ?> 
                              <tr>
                                <?php $unaDonante = $this->donantes_model->getNAD($value->Donante_nroDonante);?>
                                <td colspan="" rowspan="" headers=""><?php echo $value->nroConsentimiento; ?></td>
                                <td colspan="" rowspan="" headers=""><?php echo $unaDonante->dniDonante; ?></td> 
                                <td colspan="" rowspan="" headers=""><?php echo $unaDonante->nombre; ?></td>  
                                <td colspan="" rowspan="" headers=""><?php echo $unaDonante->apellido; ?></td>  
                                <td colspan="" rowspan="" headers=""><?php echo $fecha; ?></td>
                                <td colspan="" rowspan="" headers="">
                                 <input id="checkbox" type="checkbox" value="<?php echo $value->nroConsentimiento; ?>" name="ceci[]">
                                </td>
                             
                              </tr>
                            <?php endforeach ?>
                           </tbody>
                        </table>
                        <button type="submit">guardar</button>
                    </div><!-- /.box-body -->
                    <h4>Consentimientos por día: <?php echo $dia; ?></h4>
                     <div class="box-body table-responsive">
                        <table id="example2" class="table table-responsive table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th>Nro de Consentimiento</th>
                                  <th>Dni de Donante</th>
                                  <th>Nombre Donante</th>
                                  <th>Apellido Donante</th>
                                  <th>Fecha Desde</th>
                                  <th></th>
                                </tr>
                            </thead>
                           <tbody>
                            <?php foreach ($consenxdia as $value) :?>
                            <?php
                                 $fechaArray = explode('-', $value->fechaDesde);
                                  $date = new DateTime();
                                 $date->setDate($fechaArray[0], $fechaArray[1], $fechaArray[2]);
                                 $fecha= $date->format('d-m-Y'); 
                                 ?> 
                              <tr>
                                <?php $unaDonante = $this->donantes_model->getNAD($value->Donante_nroDonante);?>
                                <td colspan="" rowspan="" headers=""><?php echo $value->nroConsentimiento; ?></td>
                                <td colspan="" rowspan="" headers=""><?php echo $unaDonante->dniDonante; ?></td> 
                                <td colspan="" rowspan="" headers=""><?php echo $unaDonante->nombre; ?></td>  
                                <td colspan="" rowspan="" headers=""><?php echo $unaDonante->apellido; ?></td>  
                                <td colspan="" rowspan="" headers=""><?php echo $fecha; ?></td>
                                <td colspan="" rowspan="" headers="">
                                 <input id="checkbox" type="checkbox">
                                </td>
                             
                              </tr>
                            <?php endforeach ?>
                           </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>

       </form> <!-- /.form  -->
      </div>
    </section>  <!-- fin section body -->


    <?php endif ?>
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