<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Agregar una nueva Zona
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Alta Zona </li>
  </ol>
 </section>
  <section class="content">
    <form id="formZona" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/czona/altaZona" >
    <div class="container">
      <div class="form-group">
        <label class="col-lg-2">Nombre de Zona</label>
        <input class="col-lg-2" type="text" name="nombreZona" value="">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Localidad</label>
        <?php $localidades = $this->localidad_model->getAllLocalidades();?>
        <select class="col-lg-2" name="localidad" id="localidad" value="$valor" class="form-control">
          <?php foreach ($localidades as $value):?>
          <option value="<?php echo $value->idLocalidad;?>">
            <?php echo $value->nombreLocalidad; ?>          
          </option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label class="col-lg-2">Dia de Visita</label>
        <input class="col-lg-2" type="text" name="diaVisita" value="">
      </div>
    </div>
    <div class="pull-right content">
      <div class="form-group">
        <button type="button"  aria-hidden="true" id="altaZona" class="btn btn-success btn-md">Agregar Zona</button>
        <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
      </div>
    </div>
    </form>
  </section><!-- /.content -->    
</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/zonainfo.js" type="text/javascript" charset="utf-8" async defer></script>


