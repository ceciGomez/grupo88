<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
   Editar Zona
  </h1>
  <ol class="breadcrumb">
   <li><a href="<?php echo base_url();?>index.php/page/view/"><i class="fa fa-home"></i> Home</a></li>
  
   <li class="active">Editar Zona </li>
  </ol>
 </section>
  <section class="content">
    <form id="formZonaEditar" class="form-horizontal" data-toggle="validator"role="form" method="POST" 
    action="<?php echo base_url();?>index.php/czona/editarZona" >
    <div class="container">
      <div style="display:none">
        <input name="idzona" value="<?php echo $unaZona[0]->idZona;?>">
      </div>
      <div class="form-group">
        <label class="col-lg-2">Nombre de Zona</label>
        <input class="col-lg-2" type="text" id="nombreZona" name="nombreZona" 
        value="<?php echo $unaZona[0]->nombreZona; ?>" >
      </div>
      <div class="form-group">
        <label class="col-lg-2">Localidad</label>
        <?php $localidades = $this->localidad_model->getAllLocalidades();
        $unaLocalidad = $this->localidad_model->getUnaLocalidad($unaZona[0]->Localidad_idLocalidad) ?>
        <select class="col-lg-2" id="localidad" name="localidad" id="localidad" value="$valor" class="form-control">
          <option value="<?php echo $unaLocalidad[0]->idLocalidad;  ?>">
            <?php echo $unaLocalidad[0]->nombreLocalidad;  ?>
          </option>
          <?php foreach ($localidades as $value):?>
          <option value="<?php echo $value->idLocalidad;?>">
            <?php echo $value->nombreLocalidad; ?>          
          </option>
          <?php endforeach ?>
        </select>
      </div>
      <div class="form-group">
        <label class="col-lg-2">Dia de Visita</label>
        <input class="col-lg-2" type="text" id="diaVisita" name="diaVisita" 
        value="<?php  echo $unaZona[0]->dia_visita;?>" >
      </div>
    </div>
  <div class="pull-right">
    <a class="btn btn-primary btn-md" href="javascript:window.history.back();">Volver</a>
    
    <button class="btn btn-success" type="submit">Guardar Cambios Zona</button>
  </div>
    </form>
  </section><!-- /.content -->

</aside><!-- /.right-side -->
<!-- llamado al js de hoja de ruta -->
<script src="<?php echo base_url();?>assets/internals/js/zonainfo.js" type="text/javascript" charset="utf-8" async defer></script>


