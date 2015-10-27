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